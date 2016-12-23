<?php

namespace Panopto\UserManagement;

class UpdatePassword
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
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $userId
     * @param string $newPassword
     */
    public function __construct($auth, $userId, $newPassword)
    {
      $this->auth = $auth;
      $this->userId = $userId;
      $this->newPassword = $newPassword;
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
     * @return \Panopto\UserManagement\UpdatePassword
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
     * @return \Panopto\UserManagement\UpdatePassword
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \Panopto\UserManagement\UpdatePassword
     */
    public function setNewPassword($newPassword)
    {
      $this->newPassword = $newPassword;
      return $this;
    }

}
