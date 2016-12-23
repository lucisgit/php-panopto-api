<?php

namespace Panopto\SessionManagement;

class GetSessionsByExternalId
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfstring $sessionExternalIds
     */
    protected $sessionExternalIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfstring $sessionExternalIds
     */
    public function __construct($auth, $sessionExternalIds)
    {
      $this->auth = $auth;
      $this->sessionExternalIds = $sessionExternalIds;
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
     * @return \Panopto\SessionManagement\GetSessionsByExternalId
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSessionExternalIds()
    {
      return $this->sessionExternalIds;
    }

    /**
     * @param ArrayOfstring $sessionExternalIds
     * @return \Panopto\SessionManagement\GetSessionsByExternalId
     */
    public function setSessionExternalIds($sessionExternalIds)
    {
      $this->sessionExternalIds = $sessionExternalIds;
      return $this;
    }

}
