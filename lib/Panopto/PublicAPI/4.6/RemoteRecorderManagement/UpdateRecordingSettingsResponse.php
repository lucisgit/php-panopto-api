<?php

namespace Panopto\RemoteRecorderManagement;

class UpdateRecordingSettingsResponse
{

    /**
     * @var ScheduledRecordingResult $UpdateRecordingSettingsResult
     */
    protected $UpdateRecordingSettingsResult = null;

    /**
     * @param ScheduledRecordingResult $UpdateRecordingSettingsResult
     */
    public function __construct($UpdateRecordingSettingsResult)
    {
      $this->UpdateRecordingSettingsResult = $UpdateRecordingSettingsResult;
    }

    /**
     * @return ScheduledRecordingResult
     */
    public function getUpdateRecordingSettingsResult()
    {
      return $this->UpdateRecordingSettingsResult;
    }

    /**
     * @param ScheduledRecordingResult $UpdateRecordingSettingsResult
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingSettingsResponse
     */
    public function setUpdateRecordingSettingsResult($UpdateRecordingSettingsResult)
    {
      $this->UpdateRecordingSettingsResult = $UpdateRecordingSettingsResult;
      return $this;
    }

}
