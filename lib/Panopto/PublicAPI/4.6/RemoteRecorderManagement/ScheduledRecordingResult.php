<?php

namespace Panopto\RemoteRecorderManagement;

class ScheduledRecordingResult
{

    /**
     * @var ArrayOfScheduledRecordingInfo $ConflictingSessions
     */
    protected $ConflictingSessions = null;

    /**
     * @var boolean $ConflictsExist
     */
    protected $ConflictsExist = null;

    /**
     * @var ArrayOfguid $SessionIDs
     */
    protected $SessionIDs = null;


    public function __construct()
    {

    }

    /**
     * @return ArrayOfScheduledRecordingInfo
     */
    public function getConflictingSessions()
    {
      return $this->ConflictingSessions;
    }

    /**
     * @param ArrayOfScheduledRecordingInfo $ConflictingSessions
     * @return \Panopto\RemoteRecorderManagement\ScheduledRecordingResult
     */
    public function setConflictingSessions($ConflictingSessions)
    {
      $this->ConflictingSessions = $ConflictingSessions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConflictsExist()
    {
      return $this->ConflictsExist;
    }

    /**
     * @param boolean $ConflictsExist
     * @return \Panopto\RemoteRecorderManagement\ScheduledRecordingResult
     */
    public function setConflictsExist($ConflictsExist)
    {
      $this->ConflictsExist = $ConflictsExist;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessionIDs()
    {
      return $this->SessionIDs;
    }

    /**
     * @param ArrayOfguid $SessionIDs
     * @return \Panopto\RemoteRecorderManagement\ScheduledRecordingResult
     */
    public function setSessionIDs($SessionIDs)
    {
      $this->SessionIDs = $SessionIDs;
      return $this;
    }

}
