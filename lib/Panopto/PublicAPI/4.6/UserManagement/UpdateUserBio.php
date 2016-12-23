<?php

namespace Panopto\UserManagement;

class UpdateUserBio
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
     * @var string $bio
     */
    protected $bio = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $userId
     * @param string $bio
     */
    public function __construct($auth, $userId, $bio)
    {
      $this->auth = $auth;
      $this->userId = $userId;
      $this->bio = $bio;
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
     * @return \Panopto\UserManagement\UpdateUserBio
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
     * @return \Panopto\UserManagement\UpdateUserBio
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBio()
    {
      return $this->bio;
    }

    /**
     * @param string $bio
     * @return \Panopto\UserManagement\UpdateUserBio
     */
    public function setBio($bio)
    {
      $this->bio = $bio;
      return $this;
    }

}
