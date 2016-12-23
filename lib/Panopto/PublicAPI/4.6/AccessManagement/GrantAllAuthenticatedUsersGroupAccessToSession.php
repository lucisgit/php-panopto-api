<?php

namespace Panopto\AccessManagement;

class GrantAllAuthenticatedUsersGroupAccessToSession
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
     * @var AccessRole $role
     */
    protected $role = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param AccessRole $role
     */
    public function __construct($auth, $sessionId, $role)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->role = $role;
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
     * @return \Panopto\AccessManagement\GrantAllAuthenticatedUsersGroupAccessToSession
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
     * @return \Panopto\AccessManagement\GrantAllAuthenticatedUsersGroupAccessToSession
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return AccessRole
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param AccessRole $role
     * @return \Panopto\AccessManagement\GrantAllAuthenticatedUsersGroupAccessToSession
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
