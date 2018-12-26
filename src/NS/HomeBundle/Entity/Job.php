<?php

namespace NS\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="job")
*/


use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="NS\HomeBundle\Repository\JobRepository")
 * @ORM\HasLifecycleCallbacks()
 */

 
class Job
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
	/**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     */

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    public $date;
	/**
     * @Assert\NotBlank()
     */	

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    public $title;
	/**
     * @Assert\NotBlank()
     */

    /**
     * @var string
     *
     * @ORM\Column(name="id_customer", type="integer", length=255)
     */
    public $id_customer;
	
	/**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", length=255)
     */	
	 
    public $id_category; 	
	
	
	/**
     * @var int
     *
     * @ORM\Column(name="id_region", type="integer", length=255)
     */
    public $id_region; 
	

	 /**
     * @Assert\NotBlank()
     */
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    public $location;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    public $description;
	
	
	 /**
     * @var string
     *
     * @ORM\Column(name="requirements", type="text")
     */
    public $requirements;
	
	
	/**
   * @ORM\Column(name="published", type="boolean")
   */
   public $published = true;
   
 
  
  /**
 * @ORM\Column(name="updated_at", type="datetime", nullable=true)
 */
   public $updatedAt;   
   
  

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
     * Set date
     *
     * @param \DateTime $date
     * @return Job
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Job
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set id_customer
     *
     * @param string $id_customer
     * @return Job
     */
    public function setIdCustomer($id_customer)
    {
        $this->id_customer = $id_customer;
    
        return $this;
    }

    /**
     * Get id_customer
     *
     * @return string 
     */
    public function getIdCustomer()
    {
        return $this->id_customer;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Job
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Job
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
     * Set requirements
     *
     * @param string $requirements
     * @return Job
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
    
        return $this;
    }

    /**
     * Get requirements
     *
     * @return string 
     */
    public function getRequirements()
    {
        return $this->requirements;
    }
	
	
	
    /**
     * Set published
     *
     * @param boolean $published
     * @return Job
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }   
	
	/**
   * @ORM\PreUpdate
   */
  public function updateDate()
  {
    $this->setUpdatedAt(new \Datetime());
  }

  public function setUpdatedAt(\Datetime $updatedAt)
  {
    $this->updatedAt = $updatedAt;
    return $this;
  }

  public function getUpdatedAt()
  {
    return $this->updatedAt;
  }
	


    /**
     * Set id_category
     *
     * @param integer $idCategory
     * @return Job
     */
    public function setIdCategory($idCategory)
    {
        $this->id_category = $idCategory;
    
        return $this;
    }

    /**
     * Get id_category
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * Set id_region
     *
     * @param integer $idRegion
     * @return Job
     */
    public function setIdRegion($idRegion)
    {
        $this->id_region = $idRegion;
    
        return $this;
    }

    /**
     * Get id_region
     *
     * @return integer 
     */
    public function getIdRegion()
    {
        return $this->id_region;
    }
    
    
   

    
}