<?php

namespace Panopto\UserManagement;

class DeleteUsers
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
     * @return \Panopto\UserManagement\DeleteUsers
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
     * @return \Panopto\UserManagement\DeleteUsers
     */
    public function setUserIds($userIds)
    {
      $this->userIds = $userIds;
      return $this;
    }

}
