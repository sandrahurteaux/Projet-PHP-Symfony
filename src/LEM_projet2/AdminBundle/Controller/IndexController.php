<?php

namespace LEM_projet2\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/admin")
 */

class IndexController extends Controller
{
    /**
    * @Route("/", name="index")
    * @Template ("AdminBundle:Index:index.html.twig")
    */
    public function indexAction()
    {
        return array();
    }
}
