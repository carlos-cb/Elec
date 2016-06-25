<?php

namespace ElecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderInfo
 */
class OrderInfo
{
    /**
     * @var int
     */
    private $id;


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
     * @var \DateTime
     */
    private $orderDate;

    /**
     * @var float
     */
    private $goodsfee;

    /**
     * @var float
     */
    private $totalPrice;

    /**
     * @var float
     */
    private $shipFee;

    /**
     * @var string
     */
    private $payType;

    /**
     * @var string
     */
    private $receiverName;

    /**
     * @var string
     */
    private $receiverPhone;

    /**
     * @var string
     */
    private $receiverAdress;

    /**
     * @var string
     */
    private $receiverEmail;

    /**
     * @var string
     */
    private $receiverNation;

    /**
     * @var string
     */
    private $receiverPostcode;

    /**
     * @var boolean
     */
    private $isConfirm;

    /**
     * @var boolean
     */
    private $isPayment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderItems;

    /**
     * @var \ElecBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderItems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set orderDate
     *
     * @param \DateTime $orderDate
     * @return OrderInfo
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime 
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set goodsfee
     *
     * @param float $goodsfee
     * @return OrderInfo
     */
    public function setGoodsfee($goodsfee)
    {
        $this->goodsfee = $goodsfee;

        return $this;
    }

    /**
     * Get goodsfee
     *
     * @return float 
     */
    public function getGoodsfee()
    {
        return $this->goodsfee;
    }

    /**
     * Set totalPrice
     *
     * @param float $totalPrice
     * @return OrderInfo
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return float 
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set shipFee
     *
     * @param float $shipFee
     * @return OrderInfo
     */
    public function setShipFee($shipFee)
    {
        $this->shipFee = $shipFee;

        return $this;
    }

    /**
     * Get shipFee
     *
     * @return float 
     */
    public function getShipFee()
    {
        return $this->shipFee;
    }

    /**
     * Set payType
     *
     * @param string $payType
     * @return OrderInfo
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;

        return $this;
    }

    /**
     * Get payType
     *
     * @return string 
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * Set receiverName
     *
     * @param string $receiverName
     * @return OrderInfo
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;

        return $this;
    }

    /**
     * Get receiverName
     *
     * @return string 
     */
    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * Set receiverPhone
     *
     * @param string $receiverPhone
     * @return OrderInfo
     */
    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone = $receiverPhone;

        return $this;
    }

    /**
     * Get receiverPhone
     *
     * @return string 
     */
    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    /**
     * Set receiverAdress
     *
     * @param string $receiverAdress
     * @return OrderInfo
     */
    public function setReceiverAdress($receiverAdress)
    {
        $this->receiverAdress = $receiverAdress;

        return $this;
    }

    /**
     * Get receiverAdress
     *
     * @return string 
     */
    public function getReceiverAdress()
    {
        return $this->receiverAdress;
    }

    /**
     * Set receiverEmail
     *
     * @param string $receiverEmail
     * @return OrderInfo
     */
    public function setReceiverEmail($receiverEmail)
    {
        $this->receiverEmail = $receiverEmail;

        return $this;
    }

    /**
     * Get receiverEmail
     *
     * @return string 
     */
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    /**
     * Set receiverNation
     *
     * @param string $receiverNation
     * @return OrderInfo
     */
    public function setReceiverNation($receiverNation)
    {
        $this->receiverNation = $receiverNation;

        return $this;
    }

    /**
     * Get receiverNation
     *
     * @return string 
     */
    public function getReceiverNation()
    {
        return $this->receiverNation;
    }

    /**
     * Set receiverPostcode
     *
     * @param string $receiverPostcode
     * @return OrderInfo
     */
    public function setReceiverPostcode($receiverPostcode)
    {
        $this->receiverPostcode = $receiverPostcode;

        return $this;
    }

    /**
     * Get receiverPostcode
     *
     * @return string 
     */
    public function getReceiverPostcode()
    {
        return $this->receiverPostcode;
    }

    /**
     * Set isConfirm
     *
     * @param boolean $isConfirm
     * @return OrderInfo
     */
    public function setIsConfirm($isConfirm)
    {
        $this->isConfirm = $isConfirm;

        return $this;
    }

    /**
     * Get isConfirm
     *
     * @return boolean 
     */
    public function getIsConfirm()
    {
        return $this->isConfirm;
    }

    /**
     * Set isPayment
     *
     * @param boolean $isPayment
     * @return OrderInfo
     */
    public function setIsPayment($isPayment)
    {
        $this->isPayment = $isPayment;

        return $this;
    }

    /**
     * Get isPayment
     *
     * @return boolean 
     */
    public function getIsPayment()
    {
        return $this->isPayment;
    }

    /**
     * Add orderItems
     *
     * @param \ElecBundle\Entity\OrderItem $orderItems
     * @return OrderInfo
     */
    public function addOrderItem(\ElecBundle\Entity\OrderItem $orderItems)
    {
        $this->orderItems[] = $orderItems;

        return $this;
    }

    /**
     * Remove orderItems
     *
     * @param \ElecBundle\Entity\OrderItem $orderItems
     */
    public function removeOrderItem(\ElecBundle\Entity\OrderItem $orderItems)
    {
        $this->orderItems->removeElement($orderItems);
    }

    /**
     * Get orderItems
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * Set user
     *
     * @param \ElecBundle\Entity\User $user
     * @return OrderInfo
     */
    public function setUser(\ElecBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ElecBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    public function __toString() {
        return strval($this->id);
    }
}
