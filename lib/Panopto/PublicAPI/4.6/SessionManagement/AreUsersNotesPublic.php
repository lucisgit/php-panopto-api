<?php

namespace Panopto\SessionManagement;

class AreUsersNotesPublic
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $userId
     */
    protected $userId = null;

    /**
     * @var guid $sessionId
     */
    protected $sessionId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $userId
     * @param guid $sessionId
     */
    public function __construct($auth, $userId, $sessionId)
    {
      $this->auth = $auth;
      $this->userId = $userId;
      $this->sessionId = $sessionId;
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
     * @return \Panopto\SessionManagement\AreUsersNotesPublic
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param guid $userId
     * @return \Panopto\SessionManagement\AreUsersNotesPublic
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
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
     * @return \Panopto\SessionManagement\AreUsersNotesPublic
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

}
