<?php

namespace Panopto\RemoteRecorderManagement;

class UpdateRecordingTime
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $sessionId
     */
    protected $sessionId = null;

    /**
     * @var \DateTime $start
     */
    protected $start = null;

    /**
     * @var \DateTime $end
     */
    protected $end = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param \DateTime $start
     * @param \DateTime $end
     */
    public function __construct($auth, $sessionId, \DateTime $start, \DateTime $end)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->start = $start->format(\DateTime::ATOM);
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
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingTime
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param guid $sessionId
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingTime
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
      if ($this->start == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->start);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $start
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingTime
     */
    public function setStart(\DateTime $start)
    {
      $this->start = $start->format(\DateTime::ATOM);
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
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingTime
     */
    public function setEnd(\DateTime $end)
    {
      $this->end = $end->format(\DateTime::ATOM);
      return $this;
    }

}
