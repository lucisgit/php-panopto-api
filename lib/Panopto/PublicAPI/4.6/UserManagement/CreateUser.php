<?php

namespace Panopto\UserManagement;

class CreateUser
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var User $user
     */
    protected $user = null;

    /**
     * @var string $initialPassword
     */
    protected $initialPassword = null;

    /**
     * @param AuthenticationInfo $auth
     * @param User $user
     * @param string $initialPassword
     */
    public function __construct($auth, $user, $initialPassword)
    {
      $this->auth = $auth;
      $this->user = $user;
      $this->initialPassword = $initialPassword;
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
     * @return \Panopto\UserManagement\CreateUser
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param User $user
     * @return \Panopto\UserManagement\CreateUser
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * @return string
     */
    public function getInitialPassword()
    {
      return $this->initialPassword;
    }

    /**
     * @param string $initialPassword
     * @return \Panopto\UserManagement\CreateUser
     */
    public function setInitialPassword($initialPassword)
    {
      $this->initialPassword = $initialPassword;
      return $this;
    }

}
