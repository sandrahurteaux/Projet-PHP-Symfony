<?php

namespace LEM_projet2\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LEM_projet2\AdminBundle\Entity\User;
use LEM_projet2\AdminBundle\Form\UserType;
use LEM_projet2\AdminBundle\Controller\CategoryController;

/**
 * Client controller.
 *
 * @Route("/inscription")
 */
class InscriptionController extends Controller
{

    /**
     * Formulaire d'inscription.
     *
     * @Route("/", name="inscription")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new UserType());
        $form->handleRequest($request);
        
        if($form->isValid()){
            $data = $form->getData();
            
            $data->setUsername($data->getEmail());           
                       
            //var_dump($data);           
           
            
            //insertion dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();    
           
            //redirection vers une route
             $url = $this->generateUrl('confirmation');
            return $this->redirect($url);
        }
        
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AdminBundle:Category')->findAll();
        return array(
            'formulaire'=> $form->createView(),
            'categories'=> $categories,
        );
    }
    
    /**
    * Confirmation entree formulaire.
    *
    * @Route("/confirmation", name="confirmation")
    * @Template()
    */     
    public function ConfirmationAction() {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AdminBundle:Category')->findAll();
        
        return array(
            'message' => 'Votre inscription a bien été enregistrée. Bienvenue sur notre site.',
            'categories' => $categories,
            );
    }
        
}
