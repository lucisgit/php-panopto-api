<?php

namespace Panopto\AccessManagement;

class UpdateFolderIsPublic
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
     * @var boolean $isPublic
     */
    protected $isPublic = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param boolean $isPublic
     */
    public function __construct($auth, $folderId, $isPublic)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->isPublic = $isPublic;
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
     * @return \Panopto\AccessManagement\UpdateFolderIsPublic
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
     * @return \Panopto\AccessManagement\UpdateFolderIsPublic
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param boolean $isPublic
     * @return \Panopto\AccessManagement\UpdateFolderIsPublic
     */
    public function setIsPublic($isPublic)
    {
      $this->isPublic = $isPublic;
      return $this;
    }

}
