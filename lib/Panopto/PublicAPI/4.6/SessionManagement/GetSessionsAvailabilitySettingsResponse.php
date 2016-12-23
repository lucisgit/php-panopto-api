<?php

namespace Panopto\SessionManagement;

class GetSessionsAvailabilitySettingsResponse
{

    /**
     * @var SessionsWithAvailabilitySettings $GetSessionsAvailabilitySettingsResult
     */
    protected $GetSessionsAvailabilitySettingsResult = null;

    /**
     * @param SessionsWithAvailabilitySettings $GetSessionsAvailabilitySettingsResult
     */
    public function __construct($GetSessionsAvailabilitySettingsResult)
    {
      $this->GetSessionsAvailabilitySettingsResult = $GetSessionsAvailabilitySettingsResult;
    }

    /**
     * @return SessionsWithAvailabilitySettings
     */
    public function getGetSessionsAvailabilitySettingsResult()
    {
      return $this->GetSessionsAvailabilitySettingsResult;
    }

    /**
     * @param SessionsWithAvailabilitySettings $GetSessionsAvailabilitySettingsResult
     * @return \Panopto\SessionManagement\GetSessionsAvailabilitySettingsResponse
     */
    public function setGetSessionsAvailabilitySettingsResult($GetSessionsAvailabilitySettingsResult)
    {
      $this->GetSessionsAvailabilitySettingsResult = $GetSessionsAvailabilitySettingsResult;
      return $this;
    }

}
