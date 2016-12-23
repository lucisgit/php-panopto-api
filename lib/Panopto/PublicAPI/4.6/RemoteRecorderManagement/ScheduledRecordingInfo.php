<?php

namespace Panopto\RemoteRecorderManagement;

class ScheduledRecordingInfo
{

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var guid $SessionID
     */
    protected $SessionID = null;

    /**
     * @var string $SessionName
     */
    protected $SessionName = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;


    public function __construct()
    {

    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \Panopto\RemoteRecorderManagement\ScheduledRecordingInfo
     */
    public function setEndTime(\DateTime $EndTime = null)
    {
      if ($EndTime == null) {
       $this->EndTime = null;
      } else {
        $this->EndTime = $EndTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionID()
    {
      return $this->SessionID;
    }

    /**
     * @param guid $SessionID
     * @return \Panopto\RemoteRecorderManagement\ScheduledRecordingInfo
     */
    public function setSessionID($SessionID)
    {
      $this->SessionID = $SessionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionName()
    {
      return $this->SessionName;
    }

    /**
     * @param string $SessionName
     * @return \Panopto\RemoteRecorderManagement\ScheduledRecordingInfo
     */
    public function setSessionName($SessionName)
    {
      $this->SessionName = $SessionName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \Panopto\RemoteRecorderManagement\ScheduledRecordingInfo
     */
    public function setStartTime(\DateTime $StartTime = null)
    {
      if ($StartTime == null) {
       $this->StartTime = null;
      } else {
        $this->StartTime = $StartTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
