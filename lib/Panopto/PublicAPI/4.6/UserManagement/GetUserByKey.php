<?php

namespace Panopto\UserManagement;

class GetUserByKey
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $userKey
     */
    protected $userKey = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $userKey
     */
    public function __construct($auth, $userKey)
    {
      $this->auth = $auth;
      $this->userKey = $userKey;
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
     * @return \Panopto\UserManagement\GetUserByKey
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserKey()
    {
      return $this->userKey;
    }

    /**
     * @param string $userKey
     * @return \Panopto\UserManagement\GetUserByKey
     */
    public function setUserKey($userKey)
    {
      $this->userKey = $userKey;
      return $this;
    }

}
