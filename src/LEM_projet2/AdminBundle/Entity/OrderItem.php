<?php

namespace LEM_projet2\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItem
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LEM_projet2\AdminBundle\Entity\OrderItemRepository")
 */
class OrderItem
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
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     **/
    private $order_id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     **/
    private $item_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="smallint")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=5, scale=2)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=50)
     */
    private $reference;


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
     * Set number
     *
     * @param integer $number
     * @return OrderItem
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return OrderItem
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return OrderItem
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set order_id
     *
     * @param \LEM_projet2\AdminBundle\Entity\Orders $orderId
     * @return OrderItem
     */
    public function setOrderId(\LEM_projet2\AdminBundle\Entity\Orders $orderId = null)
    {
        $this->order_id = $orderId;

        return $this;
    }

    /**
     * Get order_id
     *
     * @return \LEM_projet2\AdminBundle\Entity\Orders 
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Set item_id
     *
     * @param \LEM_projet2\AdminBundle\Entity\Item $itemId
     * @return OrderItem
     */
    public function setItemId(\LEM_projet2\AdminBundle\Entity\Item $itemId = null)
    {
        $this->item_id = $itemId;

        return $this;
    }

    /**
     * Get item_id
     *
     * @return \LEM_projet2\AdminBundle\Entity\Item 
     */
    public function getItemId()
    {
        return $this->item_id;
    }
}
