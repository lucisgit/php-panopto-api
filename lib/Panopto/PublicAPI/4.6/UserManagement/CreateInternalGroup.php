<?php

namespace Panopto\UserManagement;

class CreateInternalGroup
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
     * @var ArrayOfguid $memberIds
     */
    protected $memberIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $groupName
     * @param ArrayOfguid $memberIds
     */
    public function __construct($auth, $groupName, $memberIds)
    {
      $this->auth = $auth;
      $this->groupName = $groupName;
      $this->memberIds = $memberIds;
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
     * @return \Panopto\UserManagement\CreateInternalGroup
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
     * @return \Panopto\UserManagement\CreateInternalGroup
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getMemberIds()
    {
      return $this->memberIds;
    }

    /**
     * @param ArrayOfguid $memberIds
     * @return \Panopto\UserManagement\CreateInternalGroup
     */
    public function setMemberIds($memberIds)
    {
      $this->memberIds = $memberIds;
      return $this;
    }

}
