<?php

namespace Panopto\SessionManagement;

class UpdateFolderParent
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
     * @var guid $parentId
     */
    protected $parentId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param guid $parentId
     */
    public function __construct($auth, $folderId, $parentId)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->parentId = $parentId;
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
     * @return \Panopto\SessionManagement\UpdateFolderParent
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
     * @return \Panopto\SessionManagement\UpdateFolderParent
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getParentId()
    {
      return $this->parentId;
    }

    /**
     * @param guid $parentId
     * @return \Panopto\SessionManagement\UpdateFolderParent
     */
    public function setParentId($parentId)
    {
      $this->parentId = $parentId;
      return $this;
    }

}
