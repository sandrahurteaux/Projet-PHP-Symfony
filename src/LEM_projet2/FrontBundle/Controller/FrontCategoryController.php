<?php

namespace LEM_projet2\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LEM_projet2\AdminBundle\AdminBundle;
use LEM_projet2\AdminBundle\Entity\Item;
use LEM_projet2\AdminBundle\Form\ItemType;

class FrontCategoryController extends Controller
{
/**
 * @Route("/category/{id}", name="category")
 * @Template ("FrontBundle:Category:category.html.twig")
 */
    public function frontcategoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Category')->find($id);
        
        $categories = $em->getRepository('AdminBundle:Category')->findAll();
        
        $items = $em->getRepository('AdminBundle:Item')->getItemsByCat($id);
        
        return array(
            'entity' => $entity,
            'categories' => $categories,
            'items' => $items,
        );
    }
    
}
