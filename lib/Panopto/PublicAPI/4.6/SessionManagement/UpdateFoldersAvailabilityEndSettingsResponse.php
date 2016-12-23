<?php

namespace Panopto\SessionManagement;

class UpdateFoldersAvailabilityEndSettingsResponse
{

    /**
     * @var boolean $UpdateFoldersAvailabilityEndSettingsResult
     */
    protected $UpdateFoldersAvailabilityEndSettingsResult = null;

    /**
     * @param boolean $UpdateFoldersAvailabilityEndSettingsResult
     */
    public function __construct($UpdateFoldersAvailabilityEndSettingsResult)
    {
      $this->UpdateFoldersAvailabilityEndSettingsResult = $UpdateFoldersAvailabilityEndSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateFoldersAvailabilityEndSettingsResult()
    {
      return $this->UpdateFoldersAvailabilityEndSettingsResult;
    }

    /**
     * @param boolean $UpdateFoldersAvailabilityEndSettingsResult
     * @return \Panopto\SessionManagement\UpdateFoldersAvailabilityEndSettingsResponse
     */
    public function setUpdateFoldersAvailabilityEndSettingsResult($UpdateFoldersAvailabilityEndSettingsResult)
    {
      $this->UpdateFoldersAvailabilityEndSettingsResult = $UpdateFoldersAvailabilityEndSettingsResult;
      return $this;
    }

}
