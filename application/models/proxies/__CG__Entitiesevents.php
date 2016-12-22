<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class events extends \Entities\events implements \Doctrine\ORM\Proxy\Proxy
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

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getDetails()
    {
        $this->__load();
        return parent::getDetails();
    }

    public function setDetails($details)
    {
        $this->__load();
        return parent::setDetails($details);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getPrivacy_level()
    {
        $this->__load();
        return parent::getPrivacy_level();
    }

    public function setPrivacy_level($privacy_level)
    {
        $this->__load();
        return parent::setPrivacy_level($privacy_level);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }

    public function setCity($city)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getCountry()
    {
        $this->__load();
        return parent::getCountry();
    }

    public function setCountry($country)
    {
        $this->__load();
        return parent::setCountry($country);
    }

    public function getStart_datetime()
    {
        $this->__load();
        return parent::getStart_datetime();
    }

    public function setStart_datetime($start_datetime)
    {
        $this->__load();
        return parent::setStart_datetime($start_datetime);
    }

    public function getEnd_datetime()
    {
        $this->__load();
        return parent::getEnd_datetime();
    }

    public function setEnd_datetime($end_datetime)
    {
        $this->__load();
        return parent::setEnd_datetime($end_datetime);
    }

    public function getEvent_commentses()
    {
        $this->__load();
        return parent::getEvent_commentses();
    }

    public function setEvent_commentses($event_commentses)
    {
        $this->__load();
        return parent::setEvent_commentses($event_commentses);
    }

    public function getEvent_visitorses()
    {
        $this->__load();
        return parent::getEvent_visitorses();
    }

    public function setEvent_visitorses($event_visitorses)
    {
        $this->__load();
        return parent::setEvent_visitorses($event_visitorses);
    }

    public function getIlook_user()
    {
        $this->__load();
        return parent::getIlook_user();
    }

    public function setIlook_user($ilook_user)
    {
        $this->__load();
        return parent::setIlook_user($ilook_user);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'details', 'type', 'privacy_level', 'address', 'city', 'country', 'start_datetime', 'end_datetime', 'event_commentses', 'event_visitorses', 'ilook_user');
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