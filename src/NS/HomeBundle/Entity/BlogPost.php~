<?php

namespace NS\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="blogpost")
*/


use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

 
class BlogPost
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
     * @ORM\Column(name="id_author", type="integer")
     */
    public $id_author;

	 /**
     * @Assert\NotBlank()
     */
    /**
     * @var string
     *
     * @ORM\Column(name="id_blogpost_category", type="integer")
     */
    public $id_blogpost_category;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    public $content;
	
	
	 /**
     * @var string
     *
     * @ORM\Column(name="img",type="string", length=255)
     */
    public $img;
	
	
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
     * @return BlogPost
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
     * @return BlogPost
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
     * Set id_author
     *
     * @param integer $idAuthor
     * @return BlogPost
     */
    public function setIdAuthor($idAuthor)
    {
        $this->id_author = $idAuthor;
    
        return $this;
    }

    /**
     * Get id_author
     *
     * @return integer 
     */
    public function getIdAuthor()
    {
        return $this->id_author;
    }

    /**
     * Set id_blogpost_category
     *
     * @param integer $idBlogpostCategory
     * @return BlogPost
     */
    public function setIdBlogpostCategory($idBlogpostCategory)
    {
        $this->id_blogpost_category = $idBlogpostCategory;
    
        return $this;
    }

    /**
     * Get id_blogpost_category
     *
     * @return integer 
     */
    public function getIdBlogpostCategory()
    {
        return $this->id_blogpost_category;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return BlogPost
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return BlogPost
     */
    public function setImg($img)
    {
        $this->img = $img;
    
        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return BlogPost
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return BlogPost
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}