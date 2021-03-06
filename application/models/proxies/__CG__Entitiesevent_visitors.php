<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class event_visitors extends \Entities\event_visitors implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setVisiting_probability($visiting_probability)
    {
        $this->__load();
        return parent::setVisiting_probability($visiting_probability);
    }

    public function getVisiting_probability()
    {
        $this->__load();
        return parent::getVisiting_probability();
    }

    public function setIlook_user($ilook_user)
    {
        $this->__load();
        return parent::setIlook_user($ilook_user);
    }

    public function getIlook_user()
    {
        $this->__load();
        return parent::getIlook_user();
    }

    public function setevents($events)
    {
        $this->__load();
        return parent::setevents($events);
    }

    public function getEvents()
    {
        $this->__load();
        return parent::getEvents();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'visiting_probability', 'ilook_user', 'events');
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