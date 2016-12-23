<?php

namespace Panopto\SessionManagement;

class GetSessionsById
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $sessionIds
     */
    protected $sessionIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $sessionIds
     */
    public function __construct($auth, $sessionIds)
    {
      $this->auth = $auth;
      $this->sessionIds = $sessionIds;
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
     * @return \Panopto\SessionManagement\GetSessionsById
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessionIds()
    {
      return $this->sessionIds;
    }

    /**
     * @param ArrayOfguid $sessionIds
     * @return \Panopto\SessionManagement\GetSessionsById
     */
    public function setSessionIds($sessionIds)
    {
      $this->sessionIds = $sessionIds;
      return $this;
    }

}
