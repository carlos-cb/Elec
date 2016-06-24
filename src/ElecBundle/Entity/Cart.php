<?php

namespace ElecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 */
class Cart
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
     * @var string
     */
    private $cartState;

    /**
     * @var \DateTime
     */
    private $createDate;

    /**
     * @var \ElecBundle\Entity\User
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cartItems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartItems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set cartState
     *
     * @param string $cartState
     * @return Cart
     */
    public function setCartState($cartState)
    {
        $this->cartState = $cartState;

        return $this;
    }

    /**
     * Get cartState
     *
     * @return string 
     */
    public function getCartState()
    {
        return $this->cartState;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Cart
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set user
     *
     * @param \ElecBundle\Entity\User $user
     * @return Cart
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

    /**
     * Add cartItems
     *
     * @param \ElecBundle\Entity\CartItem $cartItems
     * @return Cart
     */
    public function addCartItem(\ElecBundle\Entity\CartItem $cartItems)
    {
        $this->cartItems[] = $cartItems;

        return $this;
    }

    /**
     * Remove cartItems
     *
     * @param \ElecBundle\Entity\CartItem $cartItems
     */
    public function removeCartItem(\ElecBundle\Entity\CartItem $cartItems)
    {
        $this->cartItems->removeElement($cartItems);
    }

    /**
     * Get cartItems
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCartItems()
    {
        return $this->cartItems;
    }
}
