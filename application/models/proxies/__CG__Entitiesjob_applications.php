<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class job_applications extends \Entities\job_applications implements \Doctrine\ORM\Proxy\Proxy
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

    public function getIs_applied()
    {
        $this->__load();
        return parent::getIs_applied();
    }

    public function setIs_applied($is_applied)
    {
        $this->__load();
        return parent::setIs_applied($is_applied);
    }

    public function getApplicant_msg()
    {
        $this->__load();
        return parent::getApplicant_msg();
    }

    public function setApplicant_msg($applicant_msg)
    {
        $this->__load();
        return parent::setApplicant_msg($applicant_msg);
    }

    public function getIs_shortlist()
    {
        $this->__load();
        return parent::getIs_shortlist();
    }

    public function setIs_shortlist($is_shortlist)
    {
        $this->__load();
        return parent::setIs_shortlist($is_shortlist);
    }

    public function getIs_report_abused()
    {
        $this->__load();
        return parent::getIs_report_abused();
    }

    public function setIs_report_abused($is_report_abused)
    {
        $this->__load();
        return parent::setIs_report_abused($is_report_abused);
    }

    public function getIs_bookmarked()
    {
        $this->__load();
        return parent::getIs_bookmarked();
    }

    public function setIs_bookmarked($is_bookmarked)
    {
        $this->__load();
        return parent::setIs_bookmarked($is_bookmarked);
    }

    public function getCv_attached()
    {
        $this->__load();
        return parent::getCv_attached();
    }

    public function setCv_attached($cv_attached)
    {
        $this->__load();
        return parent::setCv_attached($cv_attached);
    }

    public function getCover_letter_attached()
    {
        $this->__load();
        return parent::getCover_letter_attached();
    }

    public function setCover_letter_attached($cover_letter_attached)
    {
        $this->__load();
        return parent::setCover_letter_attached($cover_letter_attached);
    }

    public function getApplicant_email()
    {
        $this->__load();
        return parent::getApplicant_email();
    }

    public function setApplicant_email($applicant_email)
    {
        $this->__load();
        return parent::setApplicant_email($applicant_email);
    }

    public function getApplicant_ph_number()
    {
        $this->__load();
        return parent::getApplicant_ph_number();
    }

    public function setApplicant_ph_number($applicant_ph_number)
    {
        $this->__load();
        return parent::setApplicant_ph_number($applicant_ph_number);
    }

    public function getJob()
    {
        $this->__load();
        return parent::getJob();
    }

    public function setJob($job)
    {
        $this->__load();
        return parent::setJob($job);
    }

    public function getIlookUser()
    {
        $this->__load();
        return parent::getIlookUser();
    }

    public function setIlookUser($ilookUser)
    {
        $this->__load();
        return parent::setIlookUser($ilookUser);
    }

    public function getCreated_at()
    {
        $this->__load();
        return parent::getCreated_at();
    }

    public function setCreated_at($created_at)
    {
        $this->__load();
        return parent::setCreated_at($created_at);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'is_applied', 'applicant_msg', 'is_shortlist', 'is_report_abused', 'is_bookmarked', 'cv_attached', 'cover_letter_attached', 'applicant_email', 'applicant_ph_number', 'created_at', 'job', 'ilookUser');
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