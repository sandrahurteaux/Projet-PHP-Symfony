<?php

// src/FrontBundle/Controller/SecurityController.php;

namespace LEM_projet2\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/login")
 */
class AdminSecurityController extends Controller
{
    /**
     * @Route("/", name="login")
     * @Template("FrontBundle:Security:login.html.twig")
     */
    public function adminloginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return $this->render('FrontBundle:Security:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
}