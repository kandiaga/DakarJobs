<?php
# src/NS/HomeBundle\Enitity\WorkExperiencee.php

namespace NS\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="work_experience")
*/
class WorkExperience {

/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
public $id;

/**
* @ORM\Column(type="string", length=255)
*/
public $ocupation;

/**
* @ORM\Column(type="string", length=255)
*/
public $compagny;

/**
* @ORM\Column(type="string", length=255)
*/
public $region;


/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_website;


/**
* @ORM\Column(type="string", length=255)
*/
public $compagny_activity;


/**
* @ORM\Column(type="string", length=255)
*/
public $achievements;


/**
* @ORM\Column(type="datetime")
*/
public $from_date;

/**
* @ORM\Column(type="datetime")
*/
public $to_date;


	
	


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
     * Set ocupation
     *
     * @param string $ocupation
     * @return WorkExperience
     */
    public function setOcupation($ocupation)
    {
        $this->ocupation = $ocupation;
    
        return $this;
    }

    /**
     * Get ocupation
     *
     * @return string 
     */
    public function getOcupation()
    {
        return $this->ocupation;
    }

    /**
     * Set compagny
     *
     * @param string $compagny
     * @return WorkExperience
     */
    public function setCompagny($compagny)
    {
        $this->compagny = $compagny;
    
        return $this;
    }

    /**
     * Get compagny
     *
     * @return string 
     */
    public function getCompagny()
    {
        return $this->compagny;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return WorkExperience
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set compagny_website
     *
     * @param string $compagnyWebsite
     * @return WorkExperience
     */
    public function setCompagnyWebsite($compagnyWebsite)
    {
        $this->compagny_website = $compagnyWebsite;
    
        return $this;
    }

    /**
     * Get compagny_website
     *
     * @return string 
     */
    public function getCompagnyWebsite()
    {
        return $this->compagny_website;
    }

    /**
     * Set compagny_activity
     *
     * @param string $compagnyActivity
     * @return WorkExperience
     */
    public function setCompagnyActivity($compagnyActivity)
    {
        $this->compagny_activity = $compagnyActivity;
    
        return $this;
    }

    /**
     * Get compagny_activity
     *
     * @return string 
     */
    public function getCompagnyActivity()
    {
        return $this->compagny_activity;
    }

    /**
     * Set achievements
     *
     * @param string $achievements
     * @return WorkExperience
     */
    public function setAchievements($achievements)
    {
        $this->achievements = $achievements;
    
        return $this;
    }

    /**
     * Get achievements
     *
     * @return string 
     */
    public function getAchievements()
    {
        return $this->achievements;
    }

    /**
     * Set from_date
     *
     * @param \DateTime $fromDate
     * @return WorkExperience
     */
    public function setFromDate($fromDate)
    {
        $this->from_date = $fromDate;
    
        return $this;
    }

    /**
     * Get from_date
     *
     * @return \DateTime 
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * Set to_date
     *
     * @param \DateTime $toDate
     * @return WorkExperience
     */
    public function setToDate($toDate)
    {
        $this->to_date = $toDate;
    
        return $this;
    }

    /**
     * Get to_date
     *
     * @return \DateTime 
     */
    public function getToDate()
    {
        return $this->to_date;
    }
}