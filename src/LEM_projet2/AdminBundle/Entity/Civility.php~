<?php

namespace LEM_projet2\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civility
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LEM_projet2\AdminBundle\Entity\CivilityRepository")
 */
class Civility
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;
    
    /**
     * 
     */
    public function __toString() {
        return $this->getName();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Civility
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
