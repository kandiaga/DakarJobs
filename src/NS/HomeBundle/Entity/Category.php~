<?php


namespace NS\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
* @ORM\Entity
* @ORM\Table(name="jobCategory")
*/

use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;


class Category 
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
   
   private $id;
  
  

  /**
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;  
  

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  public function getName()
  {
    return $this->name;
  }
  
  
  
  


    

    
}