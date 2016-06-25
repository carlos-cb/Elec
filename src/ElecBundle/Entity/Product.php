<?php

namespace ElecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
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
    private $productname;

    /**
     * @var float
     */
    private $marketPrice;

    /**
     * @var float
     */
    private $memberPrice;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var integer
     */
    private $buyMinNumber;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $isHot;

    /**
     * @var boolean
     */
    private $isDiscount;

    /**
     * @var \DateTime
     */
    private $createDate;

    /**
     * @var \ElecBundle\Entity\CartItem
     */
    private $cartItem;

    /**
     * @var \ElecBundle\Entity\SubCategory
     */
    private $subCategory;


    /**
     * Set productname
     *
     * @param string $productname
     * @return Product
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;

        return $this;
    }

    /**
     * Get productname
     *
     * @return string 
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * Set marketPrice
     *
     * @param float $marketPrice
     * @return Product
     */
    public function setMarketPrice($marketPrice)
    {
        $this->marketPrice = $marketPrice;

        return $this;
    }

    /**
     * Get marketPrice
     *
     * @return float 
     */
    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * Set memberPrice
     *
     * @param float $memberPrice
     * @return Product
     */
    public function setMemberPrice($memberPrice)
    {
        $this->memberPrice = $memberPrice;

        return $this;
    }

    /**
     * Get memberPrice
     *
     * @return float 
     */
    public function getMemberPrice()
    {
        return $this->memberPrice;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set buyMinNumber
     *
     * @param integer $buyMinNumber
     * @return Product
     */
    public function setBuyMinNumber($buyMinNumber)
    {
        $this->buyMinNumber = $buyMinNumber;

        return $this;
    }

    /**
     * Get buyMinNumber
     *
     * @return integer 
     */
    public function getBuyMinNumber()
    {
        return $this->buyMinNumber;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Product
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isHot
     *
     * @param boolean $isHot
     * @return Product
     */
    public function setIsHot($isHot)
    {
        $this->isHot = $isHot;

        return $this;
    }

    /**
     * Get isHot
     *
     * @return boolean 
     */
    public function getIsHot()
    {
        return $this->isHot;
    }

    /**
     * Set isDiscount
     *
     * @param boolean $isDiscount
     * @return Product
     */
    public function setIsDiscount($isDiscount)
    {
        $this->isDiscount = $isDiscount;

        return $this;
    }

    /**
     * Get isDiscount
     *
     * @return boolean 
     */
    public function getIsDiscount()
    {
        return $this->isDiscount;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Product
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
     * Set cartItem
     *
     * @param \ElecBundle\Entity\CartItem $cartItem
     * @return Product
     */
    public function setCartItem(\ElecBundle\Entity\CartItem $cartItem = null)
    {
        $this->cartItem = $cartItem;

        return $this;
    }

    /**
     * Get cartItem
     *
     * @return \ElecBundle\Entity\CartItem 
     */
    public function getCartItem()
    {
        return $this->cartItem;
    }

    /**
     * Set subCategory
     *
     * @param \ElecBundle\Entity\SubCategory $subCategory
     * @return Product
     */
    public function setSubCategory(\ElecBundle\Entity\SubCategory $subCategory = null)
    {
        $this->subCategory = $subCategory;

        return $this;
    }

    /**
     * Get subCategory
     *
     * @return \ElecBundle\Entity\SubCategory 
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    public function __toString() {
        return strval($this->id);
    }
}
