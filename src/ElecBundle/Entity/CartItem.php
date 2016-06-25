<?php

namespace ElecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartItem
 */
class CartItem
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
     * @var \ElecBundle\Entity\Cart
     */
    private $cart;


    /**
     * Set unitPrice
     *
     * @param float $unitPrice
     * @return CartItem
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
     * @return CartItem
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
     * @return CartItem
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
     * Set cart
     *
     * @param \ElecBundle\Entity\Cart $cart
     * @return CartItem
     */
    public function setCart(\ElecBundle\Entity\Cart $cart = null)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return \ElecBundle\Entity\Cart 
     */
    public function getCart()
    {
        return $this->cart;
    }

    public function __toString() {
        return strval($this->id);
    }
}
