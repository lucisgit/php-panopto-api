<?php

namespace Panopto\RemoteRecorderManagement;

class ScheduleRecording
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var guid $folderId
     */
    protected $folderId = null;

    /**
     * @var boolean $isBroadcast
     */
    protected $isBroadcast = null;

    /**
     * @var \DateTime $start
     */
    protected $start = null;

    /**
     * @var \DateTime $end
     */
    protected $end = null;

    /**
     * @var ArrayOfRecorderSettings $recorderSettings
     */
    protected $recorderSettings = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $name
     * @param guid $folderId
     * @param boolean $isBroadcast
     * @param \DateTime $start
     * @param \DateTime $end
     * @param ArrayOfRecorderSettings $recorderSettings
     */
    public function __construct($auth, $name, $folderId, $isBroadcast, \DateTime $start, \DateTime $end, $recorderSettings)
    {
      $this->auth = $auth;
      $this->name = $name;
      $this->folderId = $folderId;
      $this->isBroadcast = $isBroadcast;
      $this->start = $start->format(\DateTime::ATOM);
      $this->end = $end->format(\DateTime::ATOM);
      $this->recorderSettings = $recorderSettings;
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
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecording
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecording
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return guid
     */
    public function getFolderId()
    {
      return $this->folderId;
    }

    /**
     * @param guid $folderId
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecording
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBroadcast()
    {
      return $this->isBroadcast;
    }

    /**
     * @param boolean $isBroadcast
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecording
     */
    public function setIsBroadcast($isBroadcast)
    {
      $this->isBroadcast = $isBroadcast;
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
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecording
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
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecording
     */
    public function setEnd(\DateTime $end)
    {
      $this->end = $end->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfRecorderSettings
     */
    public function getRecorderSettings()
    {
      return $this->recorderSettings;
    }

    /**
     * @param ArrayOfRecorderSettings $recorderSettings
     * @return \Panopto\RemoteRecorderManagement\ScheduleRecording
     */
    public function setRecorderSettings($recorderSettings)
    {
      $this->recorderSettings = $recorderSettings;
      return $this;
    }

}
