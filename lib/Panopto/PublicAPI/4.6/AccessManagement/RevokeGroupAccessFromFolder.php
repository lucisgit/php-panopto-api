<?php

namespace Panopto\AccessManagement;

class RevokeGroupAccessFromFolder
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
     * @var guid $groupId
     */
    protected $groupId = null;

    /**
     * @var AccessRole $role
     */
    protected $role = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param guid $groupId
     * @param AccessRole $role
     */
    public function __construct($auth, $folderId, $groupId, $role)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->groupId = $groupId;
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
     * @return \Panopto\AccessManagement\RevokeGroupAccessFromFolder
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
     * @return \Panopto\AccessManagement\RevokeGroupAccessFromFolder
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
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
     * @return \Panopto\AccessManagement\RevokeGroupAccessFromFolder
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
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
     * @return \Panopto\AccessManagement\RevokeGroupAccessFromFolder
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
