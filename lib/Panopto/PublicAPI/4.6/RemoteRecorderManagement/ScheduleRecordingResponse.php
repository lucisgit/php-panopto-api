<?php

namespace Panopto\RemoteRecorderManagement;

class ScheduleRecordingResponse
{

    /**
     * @var ScheduledRecordingResult $ScheduleRecordingResult
     */
    protected $ScheduleRecordingResult = null;

    /**
     * @param ScheduledRecordingResult $ScheduleRecordingResult
     */
    public function __construct($ScheduleRecordingResult)
    {
      $this->ScheduleRecordingResult = $ScheduleRecordingResult;
    }

    /**
     * @return ScheduledRecordingResult
     */
    public function getScheduleRecordingResult()
    {
      return $this->ScheduleRecordingResult;
    }

    /**
     * @param ScheduledRecordingResult $ScheduleRecordingResult
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecordingResponse
     */
    public function setScheduleRecordingResult($ScheduleRecordingResult)
    {
      $this->ScheduleRecordingResult = $ScheduleRecordingResult;
      return $this;
    }

}
