<?php

namespace LEM_projet2\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LEM_projet2\AdminBundle\Entity\Item;
use LEM_projet2\AdminBundle\Form\ItemType;
use LEM_projet2\AdminBundle\Entity\CategoryRepository;

class HomeController extends Controller
{
/**
 * @Route("/home", name="home")
 * @Template ("FrontBundle:Home:home.html.twig")
 */
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminBundle:Item')->findAll();
  
        $nb = count($entities);        
        $select = array();        
        $rand = array();
        
        // on veut afficher 4 éléments en page d'accueil
        for($i = 0 ; $i < 4 ; $i++) {
            
            // fonction pour tirer aléatoirement des id tous différents les uns des autres  
            while (count($rand) < $nb-1 ) {
                $r = mt_rand(0,$nb-1);
                if ( !in_array($r,$rand) ) {
                    $rand[] = $r;
                }
            }            
            $select[$i] = $entities[$rand[$i]];
            
        }
         
       $categories = $em->getRepository('AdminBundle:Category')->findAll();
        
        $session = $_SESSION;
        
        return array(
            'entities' => $select,
            'categories' => $categories,
            'session' => $session,
        );
    }
    
   
}
