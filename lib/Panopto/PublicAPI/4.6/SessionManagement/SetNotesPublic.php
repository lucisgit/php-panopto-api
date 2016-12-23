<?php

namespace Panopto\SessionManagement;

class SetNotesPublic
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
     * @var boolean $areNotesPublic
     */
    protected $areNotesPublic = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param boolean $areNotesPublic
     */
    public function __construct($auth, $sessionId, $areNotesPublic)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->areNotesPublic = $areNotesPublic;
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
     * @return \Panopto\SessionManagement\SetNotesPublic
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
     * @return \Panopto\SessionManagement\SetNotesPublic
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAreNotesPublic()
    {
      return $this->areNotesPublic;
    }

    /**
     * @param boolean $areNotesPublic
     * @return \Panopto\SessionManagement\SetNotesPublic
     */
    public function setAreNotesPublic($areNotesPublic)
    {
      $this->areNotesPublic = $areNotesPublic;
      return $this;
    }

}
