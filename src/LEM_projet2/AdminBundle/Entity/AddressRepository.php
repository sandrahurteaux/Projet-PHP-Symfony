<?php

namespace LEM_projet2\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AddressRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AddressRepository extends EntityRepository
{    
    /**
     * 
     * @param type $id
     * @return array Liste des articles pour une categorie donnee
     */
    public function getAddressByUser($id){
        $qb = $this->createQueryBuilder('a');        
        $qb->where('a.user = :id')
            ->setParameter('id', $id);
            
        return $qb->getQuery()->getResult();
    }
}
