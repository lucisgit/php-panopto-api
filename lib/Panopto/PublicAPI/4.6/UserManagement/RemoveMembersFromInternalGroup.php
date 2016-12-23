<?php

namespace Panopto\UserManagement;

class RemoveMembersFromInternalGroup
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
     * @var ArrayOfguid $memberIds
     */
    protected $memberIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $groupId
     * @param ArrayOfguid $memberIds
     */
    public function __construct($auth, $groupId, $memberIds)
    {
      $this->auth = $auth;
      $this->groupId = $groupId;
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
     * @return \Panopto\UserManagement\RemoveMembersFromInternalGroup
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
     * @return \Panopto\UserManagement\RemoveMembersFromInternalGroup
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
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
     * @return \Panopto\UserManagement\RemoveMembersFromInternalGroup
     */
    public function setMemberIds($memberIds)
    {
      $this->memberIds = $memberIds;
      return $this;
    }

}
