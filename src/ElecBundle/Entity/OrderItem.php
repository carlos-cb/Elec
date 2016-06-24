<?php

namespace ElecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItem
 */
class OrderItem
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
     * @var float
     */
    private $unitPrice;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \ElecBundle\Entity\Product
     */
    private $product;

    /**
     * @var \ElecBundle\Entity\OrderInfo
     */
    private $orderInfo;


    /**
     * Set unitPrice
     *
     * @param float $unitPrice
     * @return OrderItem
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return float 
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set product
     *
     * @param \ElecBundle\Entity\Product $product
     * @return OrderItem
     */
    public function setProduct(\ElecBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \ElecBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set orderInfo
     *
     * @param \ElecBundle\Entity\OrderInfo $orderInfo
     * @return OrderItem
     */
    public function setOrderInfo(\ElecBundle\Entity\OrderInfo $orderInfo = null)
    {
        $this->orderInfo = $orderInfo;

        return $this;
    }

    /**
     * Get orderInfo
     *
     * @return \ElecBundle\Entity\OrderInfo 
     */
    public function getOrderInfo()
    {
        return $this->orderInfo;
    }
}
