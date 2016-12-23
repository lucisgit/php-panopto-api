<?php

namespace Panopto\SessionManagement;

class SessionAvailabilitySettings
{

    /**
     * @var DateTimeOffset $EndSettingDate
     */
    protected $EndSettingDate = null;

    /**
     * @var SessionEndSettingType $EndSettingType
     */
    protected $EndSettingType = null;

    /**
     * @var guid $SessionId
     */
    protected $SessionId = null;

    /**
     * @var DateTimeOffset $StartSettingDate
     */
    protected $StartSettingDate = null;

    /**
     * @var SessionStartSettingType $StartSettingType
     */
    protected $StartSettingType = null;


    public function __construct()
    {

    }

    /**
     * @return DateTimeOffset
     */
    public function getEndSettingDate()
    {
      return $this->EndSettingDate;
    }

    /**
     * @param DateTimeOffset $EndSettingDate
     * @return \Panopto\SessionManagement\SessionAvailabilitySettings
     */
    public function setEndSettingDate($EndSettingDate)
    {
      $this->EndSettingDate = $EndSettingDate;
      return $this;
    }

    /**
     * @return SessionEndSettingType
     */
    public function getEndSettingType()
    {
      return $this->EndSettingType;
    }

    /**
     * @param SessionEndSettingType $EndSettingType
     * @return \Panopto\SessionManagement\SessionAvailabilitySettings
     */
    public function setEndSettingType($EndSettingType)
    {
      $this->EndSettingType = $EndSettingType;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param guid $SessionId
     * @return \Panopto\SessionManagement\SessionAvailabilitySettings
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return DateTimeOffset
     */
    public function getStartSettingDate()
    {
      return $this->StartSettingDate;
    }

    /**
     * @param DateTimeOffset $StartSettingDate
     * @return \Panopto\SessionManagement\SessionAvailabilitySettings
     */
    public function setStartSettingDate($StartSettingDate)
    {
      $this->StartSettingDate = $StartSettingDate;
      return $this;
    }

    /**
     * @return SessionStartSettingType
     */
    public function getStartSettingType()
    {
      return $this->StartSettingType;
    }

    /**
     * @param SessionStartSettingType $StartSettingType
     * @return \Panopto\SessionManagement\SessionAvailabilitySettings
     */
    public function setStartSettingType($StartSettingType)
    {
      $this->StartSettingType = $StartSettingType;
      return $this;
    }

}
