<?php

namespace Panopto\AccessManagement;

class GrantAllAuthenticatedUsersGroupAccessToFolder
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
     * @var AccessRole $role
     */
    protected $role = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param AccessRole $role
     */
    public function __construct($auth, $folderId, $role)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
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
     * @return \Panopto\AccessManagement\GrantAllAuthenticatedUsersGroupAccessToFolder
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
     * @return \Panopto\AccessManagement\GrantAllAuthenticatedUsersGroupAccessToFolder
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
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
     * @return \Panopto\AccessManagement\GrantAllAuthenticatedUsersGroupAccessToFolder
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
