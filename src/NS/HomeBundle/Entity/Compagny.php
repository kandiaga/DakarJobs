<?php
# src/NS/HomeBundle\Enitity\Employee.php

namespace NS\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="compagny")
*/
class Compagny{

/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
public $id;

/**
* @ORM\Column(type="string", length=255)
*/
public $contact_firstname;

/**
* @ORM\Column(type="string", length=255)
*/
public $contact_lastname;

/**
* @ORM\Column(type="string", length=255)
*/
public $contact_email;


/**
* @ORM\Column(type="string", length=255)
*/
public $contact_password;


/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_phone;

/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_description;


/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_logo;

/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_size;


/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_industry;

/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_region;


/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_country;


/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_address;


/**
* @ORM\Column(type="datetime")
*/
public $created_date;

/**
* @ORM\Column(type="datetime")
*/
public $updated_date;




  
	
	
	

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
     * Set contact_firstname
     *
     * @param string $contactFirstname
     * @return Compagny
     */
    public function setContactFirstname($contactFirstname)
    {
        $this->contact_firstname = $contactFirstname;
    
        return $this;
    }

    /**
     * Get contact_firstname
     *
     * @return string 
     */
    public function getContactFirstname()
    {
        return $this->contact_firstname;
    }

    /**
     * Set contact_lastname
     *
     * @param string $contactLastname
     * @return Compagny
     */
    public function setContactLastname($contactLastname)
    {
        $this->contact_lastname = $contactLastname;
    
        return $this;
    }

    /**
     * Get contact_lastname
     *
     * @return string 
     */
    public function getContactLastname()
    {
        return $this->contact_lastname;
    }

    /**
     * Set contact_email
     *
     * @param string $contactEmail
     * @return Compagny
     */
    public function setContactEmail($contactEmail)
    {
        $this->contact_email = $contactEmail;
    
        return $this;
    }

    /**
     * Get contact_email
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contact_email;
    }

    /**
     * Set contact_password
     *
     * @param string $contactPassword
     * @return Compagny
     */
    public function setContactPassword($contactPassword)
    {
        $this->contact_password = $contactPassword;
    
        return $this;
    }

    /**
     * Get contact_password
     *
     * @return string 
     */
    public function getContactPassword()
    {
        return $this->contact_password;
    }

    /**
     * Set compagny_phone
     *
     * @param string $compagnyPhone
     * @return Compagny
     */
    public function setCompagnyPhone($compagnyPhone)
    {
        $this->compagny_phone = $compagnyPhone;
    
        return $this;
    }

    /**
     * Get compagny_phone
     *
     * @return string 
     */
    public function getCompagnyPhone()
    {
        return $this->compagny_phone;
    }

    /**
     * Set compagny_description
     *
     * @param string $compagnyDescription
     * @return Compagny
     */
    public function setCompagnyDescription($compagnyDescription)
    {
        $this->compagny_description = $compagnyDescription;
    
        return $this;
    }

    /**
     * Get compagny_description
     *
     * @return string 
     */
    public function getCompagnyDescription()
    {
        return $this->compagny_description;
    }

    /**
     * Set compagny_logo
     *
     * @param string $compagnyLogo
     * @return Compagny
     */
    public function setCompagnyLogo($compagnyLogo)
    {
        $this->compagny_logo = $compagnyLogo;
    
        return $this;
    }

    /**
     * Get compagny_logo
     *
     * @return string 
     */
    public function getCompagnyLogo()
    {
        return $this->compagny_logo;
    }

    /**
     * Set compagny_size
     *
     * @param string $compagnySize
     * @return Compagny
     */
    public function setCompagnySize($compagnySize)
    {
        $this->compagny_size = $compagnySize;
    
        return $this;
    }

    /**
     * Get compagny_size
     *
     * @return string 
     */
    public function getCompagnySize()
    {
        return $this->compagny_size;
    }

    /**
     * Set compagny_industry
     *
     * @param string $compagnyIndustry
     * @return Compagny
     */
    public function setCompagnyIndustry($compagnyIndustry)
    {
        $this->compagny_industry = $compagnyIndustry;
    
        return $this;
    }

    /**
     * Get compagny_industry
     *
     * @return string 
     */
    public function getCompagnyIndustry()
    {
        return $this->compagny_industry;
    }

    /**
     * Set compagny_region
     *
     * @param string $compagnyRegion
     * @return Compagny
     */
    public function setCompagnyRegion($compagnyRegion)
    {
        $this->compagny_region = $compagnyRegion;
    
        return $this;
    }

    /**
     * Get compagny_region
     *
     * @return string 
     */
    public function getCompagnyRegion()
    {
        return $this->compagny_region;
    }

    /**
     * Set compagny_country
     *
     * @param string $compagnyCountry
     * @return Compagny
     */
    public function setCompagnyCountry($compagnyCountry)
    {
        $this->compagny_country = $compagnyCountry;
    
        return $this;
    }

    /**
     * Get compagny_country
     *
     * @return string 
     */
    public function getCompagnyCountry()
    {
        return $this->compagny_country;
    }

    /**
     * Set compagny_address
     *
     * @param string $compagnyAddress
     * @return Compagny
     */
    public function setCompagnyAddress($compagnyAddress)
    {
        $this->compagny_address = $compagnyAddress;
    
        return $this;
    }

    /**
     * Get compagny_address
     *
     * @return string 
     */
    public function getCompagnyAddress()
    {
        return $this->compagny_address;
    }

    /**
     * Set created_date
     *
     * @param \DateTime $createdDate
     * @return Compagny
     */
    public function setCreatedDate($createdDate)
    {
        $this->created_date = $createdDate;
    
        return $this;
    }

    /**
     * Get created_date
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * Set updated_date
     *
     * @param \DateTime $updatedDate
     * @return Compagny
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updated_date = $updatedDate;
    
        return $this;
    }

    /**
     * Get updated_date
     *
     * @return \DateTime 
     */
    public function getUpdatedDate()
    {
        return $this->updated_date;
    }
}