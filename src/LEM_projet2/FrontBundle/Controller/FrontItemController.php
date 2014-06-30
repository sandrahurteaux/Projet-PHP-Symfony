<?php

namespace LEM_projet2\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LEM_projet2\AdminBundle\Entity\Item;
use LEM_projet2\AdminBundle\Form\ItemType;

class FrontItemController extends Controller
{
/**
 * @Route("/item/{id}", name="item")
 * @Template ("FrontBundle:Item:item.html.twig")
 */
    public function frontitemAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AdminBundle:Item')->find($id);
        
        $categoryName = $entity->getCategory()->getName();
        
        $categories = $em->getRepository('AdminBundle:Category')->findAll();
        
        
        return array(
            'entity' => $entity,
            'categoryName' => $categoryName,
            'categories' => $categories,
        );
    }
}
