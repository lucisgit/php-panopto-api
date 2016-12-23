<?php

namespace Panopto\UserManagement;

class GetGroupsByName
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $groupName
     */
    public function __construct($auth, $groupName)
    {
      $this->auth = $auth;
      $this->groupName = $groupName;
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
     * @return \Panopto\UserManagement\GetGroupsByName
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->groupName;
    }

    /**
     * @param string $groupName
     * @return \Panopto\UserManagement\GetGroupsByName
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

}
