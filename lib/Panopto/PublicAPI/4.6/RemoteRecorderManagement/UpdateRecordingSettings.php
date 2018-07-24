<?php

namespace Panopto\RemoteRecorderManagement;

class UpdateRecordingSettings
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
     * @var ArrayOfRecorderSettings $recorderSettings
     */
    protected $recorderSettings = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param ArrayOfRecorderSettings $recorderSettings
     */
    public function __construct($auth, $sessionId, $recorderSettings)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
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
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingSettings
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
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingSettings
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
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
     * @return \Panopto\RemoteRecorderManagement\UpdateRecordingSettings
     */
    public function setRecorderSettings($recorderSettings)
    {
      $this->recorderSettings = $recorderSettings;
      return $this;
    }

}
