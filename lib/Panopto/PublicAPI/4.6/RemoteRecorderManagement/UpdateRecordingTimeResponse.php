<?php

namespace Panopto\RemoteRecorderManagement;

class UpdateRecordingTimeResponse
{

    /**
     * @var ScheduledRecordingResult $UpdateRecordingTimeResult
     */
    protected $UpdateRecordingTimeResult = null;

    /**
     * @param ScheduledRecordingResult $UpdateRecordingTimeResult
     */
    public function __construct($UpdateRecordingTimeResult)
    {
      $this->UpdateRecordingTimeResult = $UpdateRecordingTimeResult;
    }

    /**
     * @return ScheduledRecordingResult
     */
    public function getUpdateRecordingTimeResult()
    {
      return $this->UpdateRecordingTimeResult;
    }

    /**
     * @param ScheduledRecordingResult $UpdateRecordingTimeResult
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingTimeResponse
     */
    public function setUpdateRecordingTimeResult($UpdateRecordingTimeResult)
    {
      $this->UpdateRecordingTimeResult = $UpdateRecordingTimeResult;
      return $this;
    }

}
