<?php

namespace Panopto\UserManagement;

class CreateUsers
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfUser $users
     */
    protected $users = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfUser $users
     */
    public function __construct($auth, $users)
    {
      $this->auth = $auth;
      $this->users = $users;
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
     * @return \Panopto\UserManagement\CreateUsers
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfUser
     */
    public function getUsers()
    {
      return $this->users;
    }

    /**
     * @param ArrayOfUser $users
     * @return \Panopto\UserManagement\CreateUsers
     */
    public function setUsers($users)
    {
      $this->users = $users;
      return $this;
    }

}
