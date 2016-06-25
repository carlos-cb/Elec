<?php

namespace ElecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
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
    private $categoryname;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subCategorys;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subCategorys = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set categoryname
     *
     * @param string $categoryname
     * @return Category
     */
    public function setCategoryname($categoryname)
    {
        $this->categoryname = $categoryname;

        return $this;
    }

    /**
     * Get categoryname
     *
     * @return string 
     */
    public function getCategoryname()
    {
        return $this->categoryname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
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
     * Add subCategorys
     *
     * @param \ElecBundle\Entity\SubCategory $subCategorys
     * @return Category
     */
    public function addSubCategory(\ElecBundle\Entity\SubCategory $subCategorys)
    {
        $this->subCategorys[] = $subCategorys;

        return $this;
    }

    /**
     * Remove subCategorys
     *
     * @param \ElecBundle\Entity\SubCategory $subCategorys
     */
    public function removeSubCategory(\ElecBundle\Entity\SubCategory $subCategorys)
    {
        $this->subCategorys->removeElement($subCategorys);
    }

    /**
     * Get subCategorys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubCategorys()
    {
        return $this->subCategorys;
    }

    public function __toString() {
        return strval($this->id);
    }
}
