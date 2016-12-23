<?php

namespace Panopto\UserManagement;

class GetUsersInGroup
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $groupId
     */
    protected $groupId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $groupId
     */
    public function __construct($auth, $groupId)
    {
      $this->auth = $auth;
      $this->groupId = $groupId;
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
     * @return \Panopto\UserManagement\GetUsersInGroup
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param guid $groupId
     * @return \Panopto\UserManagement\GetUsersInGroup
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

}
