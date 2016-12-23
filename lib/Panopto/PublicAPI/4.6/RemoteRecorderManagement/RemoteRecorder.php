<?php

namespace Panopto\RemoteRecorderManagement;

class RemoteRecorder
{

    /**
     * @var ArrayOfRemoteRecorderDevice $Devices
     */
    protected $Devices = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @var string $MachineIP
     */
    protected $MachineIP = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $PreviewUrl
     */
    protected $PreviewUrl = null;

    /**
     * @var ArrayOfguid $ScheduledRecordings
     */
    protected $ScheduledRecordings = null;

    /**
     * @var string $SettingsUrl
     */
    protected $SettingsUrl = null;

    /**
     * @var RemoteRecorderState $State
     */
    protected $State = null;


    public function __construct()
    {

    }

    /**
     * @return ArrayOfRemoteRecorderDevice
     */
    public function getDevices()
    {
      return $this->Devices;
    }

    /**
     * @param ArrayOfRemoteRecorderDevice $Devices
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setDevices($Devices)
    {
      $this->Devices = $Devices;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param guid $Id
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMachineIP()
    {
      return $this->MachineIP;
    }

    /**
     * @param string $MachineIP
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setMachineIP($MachineIP)
    {
      $this->MachineIP = $MachineIP;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
      return $this->PreviewUrl;
    }

    /**
     * @param string $PreviewUrl
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setPreviewUrl($PreviewUrl)
    {
      $this->PreviewUrl = $PreviewUrl;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getScheduledRecordings()
    {
      return $this->ScheduledRecordings;
    }

    /**
     * @param ArrayOfguid $ScheduledRecordings
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setScheduledRecordings($ScheduledRecordings)
    {
      $this->ScheduledRecordings = $ScheduledRecordings;
      return $this;
    }

    /**
     * @return string
     */
    public function getSettingsUrl()
    {
      return $this->SettingsUrl;
    }

    /**
     * @param string $SettingsUrl
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setSettingsUrl($SettingsUrl)
    {
      $this->SettingsUrl = $SettingsUrl;
      return $this;
    }

    /**
     * @return RemoteRecorderState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param RemoteRecorderState $State
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorder
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
