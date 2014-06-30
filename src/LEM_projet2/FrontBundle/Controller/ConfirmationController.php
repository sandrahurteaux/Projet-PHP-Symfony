<?php

namespace LEM_projet2\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LEM_projet2\AdminBundle\Entity\Customer;
use LEM_projet2\AdminBundle\Form\CustomerType;

/**
 * Client controller.
 *
 * @Route("client")
 */
class InscriptionController extends Controller
{

    /**
     * Formulaire d'inscription.
     *
     * @Route("/", name="inscription")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $form = $this->createForm(new CustomerType());
        $form->handleRequest($request);
        
        if($form->isValid()){
            $data = $form->getData();
           // var_dump($data);
            
            //insertion dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();    
            
            // toutes les categories pour le menu
            $categories = $em->getRepository('AdminBundle:Category')->findAll();
            
            //redirection vers une route
            $url = $this->generateUrl('confirmation');
            return $this->redirect($url);
        }
        return array(
            'formulaire'=> $form->createView(),
            'categories' => $categories,
        );
    }
    
    /**
    * Confirmation entree formulaire.
    *
    * @Route("/confirmation", name="confirmation")
    * @Template()
    */     
    public function ConfirmAction() {
        return array('message' => 'Votre inscription a bien été enregistrée. Bienvenue sur notre site.');
    }
        
}
