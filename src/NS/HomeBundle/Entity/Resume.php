<?php
# src/NS/HomeBundle\Enitity\Employee.php

namespace NS\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="resume")
*/
class Resume{

/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
public $id;

/**
* @ORM\Column(type="string", length=255)
*/
public $resume_firstname;

/**
* @ORM\Column(type="string", length=255)
*/
public $resume_lastname;
/**
* @ORM\Column(type="string", length=255)
*/
public $resume_email;

/**
* @ORM\Column(type="integer", length=11)
*/
public $id_employee;
/**
* @ORM\Column(type="string", length=255)
*/
public $resume_logo;

/**
* @ORM\Column(type="string", length=255)
*/
public $resume_phone;


/**
* @ORM\Column(type="string", length=255)
*/
public $resume_address_one;

/**
* @ORM\Column(type="string", length=255)
*/
public $resume_address_two;
/**
* @ORM\Column(type="string", length=255)
*/
public $resume_alias;
/**
* @ORM\Column(type="string", length=255)
*/
public $resume_diplome_level;
/**
* @ORM\Column(type="string", length=255)
*/
public $resume_diplome;

/**
* @ORM\Column(type="string", length=255)
*/
public $resume_region;
/**
* @ORM\Column(type="string", length=255)
*/
public $resume_diplome_university;

/**
* @ORM\Column(type="string", length=255)
*/
public $resume_diplome_country;
/**
* @ORM\Column(type="string", length=255)
*/
public $resume_diplome_year;
/**
* @ORM\Column(name="resume_skills", type="text")
*/
public $resume_skills;

/**
* @ORM\Column(type="string", length=255)
*/
public $resume_hobby;

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
     * Set resume_firstname
     *
     * @param string $resumeFirstname
     * @return Resume
     */
    public function setResumeFirstname($resumeFirstname)
    {
        $this->resume_firstname = $resumeFirstname;
    
        return $this;
    }

    /**
     * Get resume_firstname
     *
     * @return string 
     */
    public function getResumeFirstname()
    {
        return $this->resume_firstname;
    }

    /**
     * Set resume_lastname
     *
     * @param string $resumeLastname
     * @return Resume
     */
    public function setResumeLastname($resumeLastname)
    {
        $this->resume_lastname = $resumeLastname;
    
        return $this;
    }

    /**
     * Get resume_lastname
     *
     * @return string 
     */
    public function getResumeLastname()
    {
        return $this->resume_lastname;
    }

    /**
     * Set resume_email
     *
     * @param string $resumeEmail
     * @return Resume
     */
    public function setResumeEmail($resumeEmail)
    {
        $this->resume_email = $resumeEmail;
    
        return $this;
    }

    /**
     * Get resume_email
     *
     * @return string 
     */
    public function getResumeEmail()
    {
        return $this->resume_email;
    }

    /**
     * Set id_employee
     *
     * @param integer $idEmployee
     * @return Resume
     */
    public function setIdEmployee($idEmployee)
    {
        $this->id_employee = $idEmployee;
    
        return $this;
    }

    /**
     * Get id_employee
     *
     * @return integer 
     */
    public function getIdEmployee()
    {
        return $this->id_employee;
    }

    /**
     * Set resume_logo
     *
     * @param string $resumeLogo
     * @return Resume
     */
    public function setResumeLogo($resumeLogo)
    {
        $this->resume_logo = $resumeLogo;
    
        return $this;
    }

    /**
     * Get resume_logo
     *
     * @return string 
     */
    public function getResumeLogo()
    {
        return $this->resume_logo;
    }

    /**
     * Set resume_phone
     *
     * @param string $resumePhone
     * @return Resume
     */
    public function setResumePhone($resumePhone)
    {
        $this->resume_phone = $resumePhone;
    
        return $this;
    }

    /**
     * Get resume_phone
     *
     * @return string 
     */
    public function getResumePhone()
    {
        return $this->resume_phone;
    }

    /**
     * Set resume_address_one
     *
     * @param string $resumeAddressOne
     * @return Resume
     */
    public function setResumeAddressOne($resumeAddressOne)
    {
        $this->resume_address_one = $resumeAddressOne;
    
        return $this;
    }

    /**
     * Get resume_address_one
     *
     * @return string 
     */
    public function getResumeAddressOne()
    {
        return $this->resume_address_one;
    }

    /**
     * Set resume_address_two
     *
     * @param string $resumeAddressTwo
     * @return Resume
     */
    public function setResumeAddressTwo($resumeAddressTwo)
    {
        $this->resume_address_two = $resumeAddressTwo;
    
        return $this;
    }

    /**
     * Get resume_address_two
     *
     * @return string 
     */
    public function getResumeAddressTwo()
    {
        return $this->resume_address_two;
    }

    /**
     * Set resume_alias
     *
     * @param string $resumeAlias
     * @return Resume
     */
    public function setResumeAlias($resumeAlias)
    {
        $this->resume_alias = $resumeAlias;
    
        return $this;
    }

    /**
     * Get resume_alias
     *
     * @return string 
     */
    public function getResumeAlias()
    {
        return $this->resume_alias;
    }

    /**
     * Set resume_diplome_level
     *
     * @param string $resumeDiplomeLevel
     * @return Resume
     */
    public function setResumeDiplomeLevel($resumeDiplomeLevel)
    {
        $this->resume_diplome_level = $resumeDiplomeLevel;
    
        return $this;
    }

    /**
     * Get resume_diplome_level
     *
     * @return string 
     */
    public function getResumeDiplomeLevel()
    {
        return $this->resume_diplome_level;
    }

    /**
     * Set resume_diplome
     *
     * @param string $resumeDiplome
     * @return Resume
     */
    public function setResumeDiplome($resumeDiplome)
    {
        $this->resume_diplome = $resumeDiplome;
    
        return $this;
    }

    /**
     * Get resume_diplome
     *
     * @return string 
     */
    public function getResumeDiplome()
    {
        return $this->resume_diplome;
    }

    /**
     * Set resume_region
     *
     * @param string $resumeRegion
     * @return Resume
     */
    public function setResumeRegion($resumeRegion)
    {
        $this->resume_region = $resumeRegion;
    
        return $this;
    }

    /**
     * Get resume_region
     *
     * @return string 
     */
    public function getResumeRegion()
    {
        return $this->resume_region;
    }

    /**
     * Set resume_diplome_university
     *
     * @param string $resumeDiplomeUniversity
     * @return Resume
     */
    public function setResumeDiplomeUniversity($resumeDiplomeUniversity)
    {
        $this->resume_diplome_university = $resumeDiplomeUniversity;
    
        return $this;
    }

    /**
     * Get resume_diplome_university
     *
     * @return string 
     */
    public function getResumeDiplomeUniversity()
    {
        return $this->resume_diplome_university;
    }

    /**
     * Set resume_diplome_country
     *
     * @param string $resumeDiplomeCountry
     * @return Resume
     */
    public function setResumeDiplomeCountry($resumeDiplomeCountry)
    {
        $this->resume_diplome_country = $resumeDiplomeCountry;
    
        return $this;
    }

    /**
     * Get resume_diplome_country
     *
     * @return string 
     */
    public function getResumeDiplomeCountry()
    {
        return $this->resume_diplome_country;
    }

    /**
     * Set resume_diplome_year
     *
     * @param string $resumeDiplomeYear
     * @return Resume
     */
    public function setResumeDiplomeYear($resumeDiplomeYear)
    {
        $this->resume_diplome_year = $resumeDiplomeYear;
    
        return $this;
    }

    /**
     * Get resume_diplome_year
     *
     * @return string 
     */
    public function getResumeDiplomeYear()
    {
        return $this->resume_diplome_year;
    }

    /**
     * Set resume_hobby
     *
     * @param string $resumeHobby
     * @return Resume
     */
    public function setResumeHobby($resumeHobby)
    {
        $this->resume_hobby = $resumeHobby;
    
        return $this;
    }

    /**
     * Get resume_hobby
     *
     * @return string 
     */
    public function getResumeHobby()
    {
        return $this->resume_hobby;
    }

    /**
     * Set created_date
     *
     * @param \DateTime $createdDate
     * @return Resume
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
     * @return Resume
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

    /**
     * Set resume_skills
     *
     * @param string $resumeSkills
     * @return Resume
     */
    public function setResumeSkills($resumeSkills)
    {
        $this->resume_skills = $resumeSkills;
    
        return $this;
    }

    /**
     * Get resume_skills
     *
     * @return string 
     */
    public function getResumeSkills()
    {
        return $this->resume_skills;
    }
}