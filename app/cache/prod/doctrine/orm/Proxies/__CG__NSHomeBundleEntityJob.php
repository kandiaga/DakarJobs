<?php

namespace Proxies\__CG__\NS\HomeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Job extends \NS\HomeBundle\Entity\Job implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setIdCustomer($id_customer)
    {
        $this->__load();
        return parent::setIdCustomer($id_customer);
    }

    public function getIdCustomer()
    {
        $this->__load();
        return parent::getIdCustomer();
    }

    public function setLocation($location)
    {
        $this->__load();
        return parent::setLocation($location);
    }

    public function getLocation()
    {
        $this->__load();
        return parent::getLocation();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setRequirements($requirements)
    {
        $this->__load();
        return parent::setRequirements($requirements);
    }

    public function getRequirements()
    {
        $this->__load();
        return parent::getRequirements();
    }

    public function setPublished($published)
    {
        $this->__load();
        return parent::setPublished($published);
    }

    public function getPublished()
    {
        $this->__load();
        return parent::getPublished();
    }

    public function updateDate()
    {
        $this->__load();
        return parent::updateDate();
    }

    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function setIdCategory($idCategory)
    {
        $this->__load();
        return parent::setIdCategory($idCategory);
    }

    public function getIdCategory()
    {
        $this->__load();
        return parent::getIdCategory();
    }

    public function setIdRegion($idRegion)
    {
        $this->__load();
        return parent::setIdRegion($idRegion);
    }

    public function getIdRegion()
    {
        $this->__load();
        return parent::getIdRegion();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'date', 'title', 'id_customer', 'id_category', 'id_region', 'location', 'description', 'requirements', 'published', 'updatedAt');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}