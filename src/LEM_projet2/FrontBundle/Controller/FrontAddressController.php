<?php

namespace LEM_projet2\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LEM_projet2\AdminBundle\Entity\Address;
use LEM_projet2\AdminBundle\Form\AddressType;
use LEM_projet2\AdminBundle\Entity\User;

/**
 * Address controller.
 *
 * @Route("/client/mesadresses")
 */
class FrontAddressController extends Controller
{

    /**
     * Lists all Address entities.
     *
     * @Route("/", name="mesadresses")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        
        // recupère l'id de la personne connectée
        $logged_user= $this->get('security.context')->getToken()->getUser()->getId();
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminBundle:Address')->getAddressByUser($logged_user);

        // ici pour affichage du menu categories
        $categories = $em->getRepository('AdminBundle:Category')->findAll();

        return array(
            'entities' => $entities,
            'categories' => $categories,
            'logged_user' => $logged_user,
        );
    }
    /**
     * Creates a new Address entity.
     *
     * @Route("/crea_adresse", name="crea_adresse")
     * @Method("POST")
     * @Template("FrontBundle:FrontAddress:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Address();
        
        $logged_user = $this->get('security.context')->getToken()->getUser()->getId(); 
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AdminBundle:User')->find($logged_user);
        $categories = $em->getRepository('AdminBundle:Category')->findAll();       
        
        if(!isset($user)){
            return $this->redirect(array($this->generateUrl('login')));
        }
        
        $entity->setUser($user);
        
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            var_dump($form->getData());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mesadresses', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'categories'   => $categories,
            'logged_user'   => $logged_user,
        );
    }

    /**
    * Creates a form to create a Address entity.
    *
    * @param Address $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Address $entity)
    {
        $form = $this->createForm(new AddressType(), $entity, array(
            'action' => $this->generateUrl('crea_adresse'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Address entity.
     *
     * @Route("/nouvelleadresse", name="nouvelleadresse")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
       
        $entity = new Address();        
        $form   = $this->createCreateForm($entity);
        
        // ici pour affichage du menu categories
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AdminBundle:Category')->findAll();        
        $logged_user = $this->get('security.context')->getToken()->getUser()->getId(); 

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'categories'   => $categories,
            'logged_user'   => $logged_user,
        );
    }

    /**
     * Finds and displays a Address entity.
     *
     * @Route("/monadresse/{id}", name="monadresse")
     * @Method("GET")
     * @Template("FrontBundle:FrontAddress:show.html.twig")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Address')->find($id);        

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Address entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        
        
        // Recupere les info pour affichage menu + info utilisateur loggé
        $categories = $em->getRepository('AdminBundle:Category')->findAll();
        $logged_user = $this->get('security.context')->getToken()->getUser()->getId(); 

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'categories'   => $categories,
            'logged_user'   => $logged_user,
        );
    }

    /**
     * Displays a form to edit an existing Address entity.
     *
     * @Route("/{id}/edit", name="modifieradresse")
     * @Method("GET")
     * @Template("FrontBundle:FrontAddress:edit.html.twig")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Address')->find($id);
        
        // ici pour affichage du menu categories
        $categories = $em->getRepository('AdminBundle:Category')->findAll();
        
        $logged_user = $this->get('security.context')->getToken()->getUser()->getId();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Address entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'categories'  => $categories,
            'logged_user' => $logged_user,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Address entity.
    *
    * @param Address $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Address $entity)
    {
        $form = $this->createForm(new AddressType(), $entity, array(
            'action' => $this->generateUrl('address_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Address entity.
     *
     * @Route("/{id}", name="address_update")
     * @Method("PUT")
     * @Template("FrontBundle:FrontAddress:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Address')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Address entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('monadresse', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Address entity.
     *
     * @Route("/supprimer_adresse/{id}", name="supprimer_adresse")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:Address')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Address entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mesadresses'));
    }

    /**
     * Creates a form to delete a Address entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('address_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
