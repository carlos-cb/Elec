<?php

namespace ElecBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 */
class Profile
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
    private $phonenumber;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $nation;

    /**
     * @var string
     */
    private $adress;

    /**
     * @var string
     */
    private $companyname;

    /**
     * @var string
     */
    private $businessMode;

    /**
     * @var \ElecBundle\Entity\User
     */
    private $user;


    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     * @return Profile
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string 
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Profile
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Profile
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set nation
     *
     * @param string $nation
     * @return Profile
     */
    public function setNation($nation)
    {
        $this->nation = $nation;

        return $this;
    }

    /**
     * Get nation
     *
     * @return string 
     */
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return Profile
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set companyname
     *
     * @param string $companyname
     * @return Profile
     */
    public function setCompanyname($companyname)
    {
        $this->companyname = $companyname;

        return $this;
    }

    /**
     * Get companyname
     *
     * @return string 
     */
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Set businessMode
     *
     * @param string $businessMode
     * @return Profile
     */
    public function setBusinessMode($businessMode)
    {
        $this->businessMode = $businessMode;

        return $this;
    }

    /**
     * Get businessMode
     *
     * @return string 
     */
    public function getBusinessMode()
    {
        return $this->businessMode;
    }

    /**
     * Set user
     *
     * @param \ElecBundle\Entity\User $user
     * @return Profile
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
}
