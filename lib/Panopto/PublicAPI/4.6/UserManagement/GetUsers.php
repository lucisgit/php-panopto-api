<?php

namespace Panopto\UserManagement;

class GetUsers
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $userIds
     */
    protected $userIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $userIds
     */
    public function __construct($auth, $userIds)
    {
      $this->auth = $auth;
      $this->userIds = $userIds;
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
     * @return \Panopto\UserManagement\GetUsers
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getUserIds()
    {
      return $this->userIds;
    }

    /**
     * @param ArrayOfguid $userIds
     * @return \Panopto\UserManagement\GetUsers
     */
    public function setUserIds($userIds)
    {
      $this->userIds = $userIds;
      return $this;
    }

}
