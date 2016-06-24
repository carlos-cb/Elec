<?php

namespace ElecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubCategory
 */
class SubCategory
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
    private $subCategoryname;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * @var \ElecBundle\Entity\Category
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set subCategoryname
     *
     * @param string $subCategoryname
     * @return SubCategory
     */
    public function setSubCategoryname($subCategoryname)
    {
        $this->subCategoryname = $subCategoryname;

        return $this;
    }

    /**
     * Get subCategoryname
     *
     * @return string 
     */
    public function getSubCategoryname()
    {
        return $this->subCategoryname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SubCategory
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
     * Add products
     *
     * @param \ElecBundle\Entity\Product $products
     * @return SubCategory
     */
    public function addProduct(\ElecBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \ElecBundle\Entity\Product $products
     */
    public function removeProduct(\ElecBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set category
     *
     * @param \ElecBundle\Entity\Category $category
     * @return SubCategory
     */
    public function setCategory(\ElecBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \ElecBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
