<?php

namespace Panopto\SessionManagement;

class UpdateFolderAllowSessionDownload
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
     * @var boolean $allowSessionDownload
     */
    protected $allowSessionDownload = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param boolean $allowSessionDownload
     */
    public function __construct($auth, $folderId, $allowSessionDownload)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->allowSessionDownload = $allowSessionDownload;
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
     * @return \Panopto\SessionManagement\UpdateFolderAllowSessionDownload
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
     * @return \Panopto\SessionManagement\UpdateFolderAllowSessionDownload
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowSessionDownload()
    {
      return $this->allowSessionDownload;
    }

    /**
     * @param boolean $allowSessionDownload
     * @return \Panopto\SessionManagement\UpdateFolderAllowSessionDownload
     */
    public function setAllowSessionDownload($allowSessionDownload)
    {
      $this->allowSessionDownload = $allowSessionDownload;
      return $this;
    }

}
