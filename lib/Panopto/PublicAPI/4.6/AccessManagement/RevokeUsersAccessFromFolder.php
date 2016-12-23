<?php

namespace Panopto\AccessManagement;

class RevokeUsersAccessFromFolder
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $folderId
     */
    protected $folderId = null;

    /**
     * @var ArrayOfguid $userIds
     */
    protected $userIds = null;

    /**
     * @var AccessRole $role
     */
    protected $role = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param ArrayOfguid $userIds
     * @param AccessRole $role
     */
    public function __construct($auth, $folderId, $userIds, $role)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->userIds = $userIds;
      $this->role = $role;
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
     * @return \Panopto\AccessManagement\RevokeUsersAccessFromFolder
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getFolderId()
    {
      return $this->folderId;
    }

    /**
     * @param guid $folderId
     * @return \Panopto\AccessManagement\RevokeUsersAccessFromFolder
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
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
     * @return \Panopto\AccessManagement\RevokeUsersAccessFromFolder
     */
    public function setUserIds($userIds)
    {
      $this->userIds = $userIds;
      return $this;
    }

    /**
     * @return AccessRole
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param AccessRole $role
     * @return \Panopto\AccessManagement\RevokeUsersAccessFromFolder
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
