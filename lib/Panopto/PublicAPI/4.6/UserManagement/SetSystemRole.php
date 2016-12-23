<?php

namespace Panopto\UserManagement;

class SetSystemRole
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
     * @var SystemRole $role
     */
    protected $role = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $userId
     * @param SystemRole $role
     */
    public function __construct($auth, $userId, $role)
    {
      $this->auth = $auth;
      $this->userId = $userId;
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
     * @return \Panopto\UserManagement\SetSystemRole
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
     * @return \Panopto\UserManagement\SetSystemRole
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return SystemRole
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param SystemRole $role
     * @return \Panopto\UserManagement\SetSystemRole
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
