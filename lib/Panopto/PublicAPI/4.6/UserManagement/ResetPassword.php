<?php

namespace Panopto\UserManagement;

class ResetPassword
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
     * @param AuthenticationInfo $auth
     * @param guid $userId
     */
    public function __construct($auth, $userId)
    {
      $this->auth = $auth;
      $this->userId = $userId;
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
     * @return \Panopto\UserManagement\ResetPassword
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
     * @return \Panopto\UserManagement\ResetPassword
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
