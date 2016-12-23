<?php

namespace Panopto\RemoteRecorderManagement;

class RemoteRecorderDevice
{

    /**
     * @var RemoteRecorderDeviceType $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var boolean $IsCapturing
     */
    protected $IsCapturing = null;

    /**
     * @var string $Name
     */
    protected $Name = null;


    public function __construct()
    {

    }

    /**
     * @return RemoteRecorderDeviceType
     */
    public function getDeviceType()
    {
      return $this->DeviceType;
    }

    /**
     * @param RemoteRecorderDeviceType $DeviceType
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorderDevice
     */
    public function setDeviceType($DeviceType)
    {
      $this->DeviceType = $DeviceType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCapturing()
    {
      return $this->IsCapturing;
    }

    /**
     * @param boolean $IsCapturing
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorderDevice
     */
    public function setIsCapturing($IsCapturing)
    {
      $this->IsCapturing = $IsCapturing;
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
     * @return \Panopto\RemoteRecorderManagement\RemoteRecorderDevice
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
