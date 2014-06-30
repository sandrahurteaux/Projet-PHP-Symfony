<?php

namespace LEM_projet2\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ItemRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ItemRepository extends EntityRepository
{
    /**
     * 
     * @param type $id
     * @return array Liste des articles pour une categorie donnee
     */
    public function getItemsByCat($id){
        $qb = $this->createQueryBuilder('a');        
        $qb->leftJoin('a.category', 'c')
            ->addSelect('c')
            ->where($qb->expr()->in('c.id', $id));
            
        return $qb->getQuery()->getResult();
    }
}