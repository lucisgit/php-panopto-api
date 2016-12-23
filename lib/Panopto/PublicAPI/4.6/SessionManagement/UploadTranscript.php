<?php

namespace Panopto\SessionManagement;

class UploadTranscript
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
     * @var string $file
     */
    protected $file = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param string $file
     */
    public function __construct($auth, $sessionId, $file)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->file = $file;
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
     * @return \Panopto\SessionManagement\UploadTranscript
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
     * @return \Panopto\SessionManagement\UploadTranscript
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFile()
    {
      return $this->file;
    }

    /**
     * @param string $file
     * @return \Panopto\SessionManagement\UploadTranscript
     */
    public function setFile($file)
    {
      $this->file = $file;
      return $this;
    }

}
