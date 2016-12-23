<?php

namespace Panopto\RemoteRecorderManagement;

class ScheduleRecurringRecording
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $scheduledSessionId
     */
    protected $scheduledSessionId = null;

    /**
     * @var ArrayOfDayOfWeek $daysOfWeek
     */
    protected $daysOfWeek = null;

    /**
     * @var \DateTime $end
     */
    protected $end = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $scheduledSessionId
     * @param ArrayOfDayOfWeek $daysOfWeek
     * @param \DateTime $end
     */
    public function __construct($auth, $scheduledSessionId, $daysOfWeek, \DateTime $end)
    {
      $this->auth = $auth;
      $this->scheduledSessionId = $scheduledSessionId;
      $this->daysOfWeek = $daysOfWeek;
      $this->end = $end->format(\DateTime::ATOM);
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
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecurringRecording
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getScheduledSessionId()
    {
      return $this->scheduledSessionId;
    }

    /**
     * @param guid $scheduledSessionId
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecurringRecording
     */
    public function setScheduledSessionId($scheduledSessionId)
    {
      $this->scheduledSessionId = $scheduledSessionId;
      return $this;
    }

    /**
     * @return ArrayOfDayOfWeek
     */
    public function getDaysOfWeek()
    {
      return $this->daysOfWeek;
    }

    /**
     * @param ArrayOfDayOfWeek $daysOfWeek
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecurringRecording
     */
    public function setDaysOfWeek($daysOfWeek)
    {
      $this->daysOfWeek = $daysOfWeek;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
      if ($this->end == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->end);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $end
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecurringRecording
     */
    public function setEnd(\DateTime $end)
    {
      $this->end = $end->format(\DateTime::ATOM);
      return $this;
    }

}
