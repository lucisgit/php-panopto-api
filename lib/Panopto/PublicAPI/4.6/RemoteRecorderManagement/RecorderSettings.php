<?php

namespace Panopto\RemoteRecorderManagement;

class RecorderSettings
{

    /**
     * @var guid $RecorderId
     */
    protected $RecorderId = null;

    /**
     * @var boolean $SuppressPrimary
     */
    protected $SuppressPrimary = null;

    /**
     * @var boolean $SuppressSecondary
     */
    protected $SuppressSecondary = null;


    public function __construct()
    {

    }

    /**
     * @return guid
     */
    public function getRecorderId()
    {
      return $this->RecorderId;
    }

    /**
     * @param guid $RecorderId
     * @return \Panopto\RemoteRecorderManagement\RecorderSettings
     */
    public function setRecorderId($RecorderId)
    {
      $this->RecorderId = $RecorderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressPrimary()
    {
      return $this->SuppressPrimary;
    }

    /**
     * @param boolean $SuppressPrimary
     * @return \Panopto\RemoteRecorderManagement\RecorderSettings
     */
    public function setSuppressPrimary($SuppressPrimary)
    {
      $this->SuppressPrimary = $SuppressPrimary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressSecondary()
    {
      return $this->SuppressSecondary;
    }

    /**
     * @param boolean $SuppressSecondary
     * @return \Panopto\RemoteRecorderManagement\RecorderSettings
     */
    public function setSuppressSecondary($SuppressSecondary)
    {
      $this->SuppressSecondary = $SuppressSecondary;
      return $this;
    }

}
