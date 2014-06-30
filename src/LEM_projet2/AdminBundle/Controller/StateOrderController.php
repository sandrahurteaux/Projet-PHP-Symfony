<?php

namespace LEM_projet2\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LEM_projet2\AdminBundle\Entity\StateOrder;
use LEM_projet2\AdminBundle\Form\StateOrderType;

/**
 * StateOrder controller.
 *
 * @Route("/admin/stateorder")
 */
class StateOrderController extends Controller
{

    /**
     * Lists all StateOrder entities.
     *
     * @Route("/", name="admin_stateorder")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminBundle:StateOrder')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new StateOrder entity.
     *
     * @Route("/", name="admin_stateorder_create")
     * @Method("POST")
     * @Template("AdminBundle:StateOrder:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new StateOrder();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_stateorder_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a StateOrder entity.
    *
    * @param StateOrder $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(StateOrder $entity)
    {
        $form = $this->createForm(new StateOrderType(), $entity, array(
            'action' => $this->generateUrl('admin_stateorder_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new StateOrder entity.
     *
     * @Route("/new", name="admin_stateorder_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new StateOrder();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a StateOrder entity.
     *
     * @Route("/{id}", name="admin_stateorder_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:StateOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StateOrder entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing StateOrder entity.
     *
     * @Route("/{id}/edit", name="admin_stateorder_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:StateOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StateOrder entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a StateOrder entity.
    *
    * @param StateOrder $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(StateOrder $entity)
    {
        $form = $this->createForm(new StateOrderType(), $entity, array(
            'action' => $this->generateUrl('admin_stateorder_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing StateOrder entity.
     *
     * @Route("/{id}", name="admin_stateorder_update")
     * @Method("PUT")
     * @Template("AdminBundle:StateOrder:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:StateOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StateOrder entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_stateorder_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a StateOrder entity.
     *
     * @Route("/{id}", name="admin_stateorder_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:StateOrder')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find StateOrder entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_stateorder'));
    }

    /**
     * Creates a form to delete a StateOrder entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_stateorder_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
