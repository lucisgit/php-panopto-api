<?php

namespace Panopto\SessionManagement;

class GetFoldersAvailabilitySettingsResponse
{

    /**
     * @var FoldersWithAvailabilitySettings $GetFoldersAvailabilitySettingsResult
     */
    protected $GetFoldersAvailabilitySettingsResult = null;

    /**
     * @param FoldersWithAvailabilitySettings $GetFoldersAvailabilitySettingsResult
     */
    public function __construct($GetFoldersAvailabilitySettingsResult)
    {
      $this->GetFoldersAvailabilitySettingsResult = $GetFoldersAvailabilitySettingsResult;
    }

    /**
     * @return FoldersWithAvailabilitySettings
     */
    public function getGetFoldersAvailabilitySettingsResult()
    {
      return $this->GetFoldersAvailabilitySettingsResult;
    }

    /**
     * @param FoldersWithAvailabilitySettings $GetFoldersAvailabilitySettingsResult
     * @return \Panopto\SessionManagement\GetFoldersAvailabilitySettingsResponse
     */
    public function setGetFoldersAvailabilitySettingsResult($GetFoldersAvailabilitySettingsResult)
    {
      $this->GetFoldersAvailabilitySettingsResult = $GetFoldersAvailabilitySettingsResult;
      return $this;
    }

}
