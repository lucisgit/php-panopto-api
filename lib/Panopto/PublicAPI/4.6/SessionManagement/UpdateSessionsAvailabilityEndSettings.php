<?php

namespace Panopto\SessionManagement;

class UpdateSessionsAvailabilityEndSettings
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $sessionIds
     */
    protected $sessionIds = null;

    /**
     * @var SessionEndSettingType $settingType
     */
    protected $settingType = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $sessionIds
     * @param SessionEndSettingType $settingType
     * @param \DateTime $endDate
     */
    public function __construct($auth, $sessionIds, $settingType, \DateTime $endDate)
    {
      $this->auth = $auth;
      $this->sessionIds = $sessionIds;
      $this->settingType = $settingType;
      $this->endDate = $endDate->format(\DateTime::ATOM);
    }

    /**
     * @return AuthenticationInfo
     */
    public function getAuth()
    {
      return $this->auth;
    }

    /**
     * @param AuthenticationInfo $auth
     * @return \Panopto\SessionManagement\UpdateSessionsAvailabilityEndSettings
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessionIds()
    {
      return $this->sessionIds;
    }

    /**
     * @param ArrayOfguid $sessionIds
     * @return \Panopto\SessionManagement\UpdateSessionsAvailabilityEndSettings
     */
    public function setSessionIds($sessionIds)
    {
      $this->sessionIds = $sessionIds;
      return $this;
    }

    /**
     * @return SessionEndSettingType
     */
    public function getSettingType()
    {
      return $this->settingType;
    }

    /**
     * @param SessionEndSettingType $settingType
     * @return \Panopto\SessionManagement\UpdateSessionsAvailabilityEndSettings
     */
    public function setSettingType($settingType)
    {
      $this->settingType = $settingType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Panopto\SessionManagement\UpdateSessionsAvailabilityEndSettings
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

}
