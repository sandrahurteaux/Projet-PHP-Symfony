<?php

namespace LEM_projet2\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Default controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * 
     * @Template("FrontBundle::base.html.twig")
     */
    public function baseAction() {
        // session
        $request = $this->getRequest();
        $session = $request->getSession();
        
        // recupère l'id de la personne connectée
        $logged_user= $this->get('security.context')->getToken()->getUser()->getId();
        $client = $session->get('logged_user');
        
        return array('id_client' => $client);
    }
}
