<?php

namespace LEM_projet2\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LEM_projet2\AdminBundle\Entity\OrdersRepository")
 */
class Orders
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
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;
    
    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=30)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="sum", type="decimal", precision=10, scale=2)
     */
    private $sum;
    
    /**
     * @ORM\ManyToOne(targetEntity="StateOrder")
     * @ORM\JoinColumn(name="state_order_id", referencedColumnName="id")
     **/
    private $stateorder;
    
    /**
     * @ORM\ManyToOne(targetEntity="Payment")
     * @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     **/
    private $payment;
    
    /**
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumn(name="delivery_id", referencedColumnName="id")
     **/
    private $delivery_id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumn(name="billing_id", referencedColumnName="id")
     **/
    private $billing_id;



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
     * Set reference
     *
     * @param string $reference
     * @return Orders
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
     * Set date
     *
     * @param \DateTime $date
     * @return Orders
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sum
     *
     * @param string $sum
     * @return Orders
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * Get sum
     *
     * @return string 
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Set user
     *
     * @param \LEM_projet2\AdminBundle\Entity\User $user
     * @return Orders
     */
    public function setUser(\LEM_projet2\AdminBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \LEM_projet2\AdminBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set stateorder
     *
     * @param \LEM_projet2\AdminBundle\Entity\StateOrder $stateorder
     * @return Orders
     */
    public function setStateorder(\LEM_projet2\AdminBundle\Entity\StateOrder $stateorder = null)
    {
        $this->stateorder = $stateorder;

        return $this;
    }

    /**
     * Get stateorder
     *
     * @return \LEM_projet2\AdminBundle\Entity\StateOrder 
     */
    public function getStateorder()
    {
        return $this->stateorder;
    }

    /**
     * Set payment
     *
     * @param \LEM_projet2\AdminBundle\Entity\Payment $payment
     * @return Orders
     */
    public function setPayment(\LEM_projet2\AdminBundle\Entity\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \LEM_projet2\AdminBundle\Entity\Payment 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set delivery_id
     *
     * @param \LEM_projet2\AdminBundle\Entity\Address $deliveryId
     * @return Orders
     */
    public function setDeliveryId(\LEM_projet2\AdminBundle\Entity\Address $deliveryId = null)
    {
        $this->delivery_id = $deliveryId;

        return $this;
    }

    /**
     * Get delivery_id
     *
     * @return \LEM_projet2\AdminBundle\Entity\Address 
     */
    public function getDeliveryId()
    {
        return $this->delivery_id;
    }

    /**
     * Set billing_id
     *
     * @param \LEM_projet2\AdminBundle\Entity\Address $billingId
     * @return Orders
     */
    public function setBillingId(\LEM_projet2\AdminBundle\Entity\Address $billingId = null)
    {
        $this->billing_id = $billingId;

        return $this;
    }

    /**
     * Get billing_id
     *
     * @return \LEM_projet2\AdminBundle\Entity\Address 
     */
    public function getBillingId()
    {
        return $this->billing_id;
    }
}
