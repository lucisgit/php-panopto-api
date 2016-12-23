<?php

namespace Panopto\SessionManagement;

class UpdateFolderEnablePodcast
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
     * @var boolean $enablePodcast
     */
    protected $enablePodcast = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param boolean $enablePodcast
     */
    public function __construct($auth, $folderId, $enablePodcast)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->enablePodcast = $enablePodcast;
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
     * @return \Panopto\SessionManagement\UpdateFolderEnablePodcast
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
     * @return \Panopto\SessionManagement\UpdateFolderEnablePodcast
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablePodcast()
    {
      return $this->enablePodcast;
    }

    /**
     * @param boolean $enablePodcast
     * @return \Panopto\SessionManagement\UpdateFolderEnablePodcast
     */
    public function setEnablePodcast($enablePodcast)
    {
      $this->enablePodcast = $enablePodcast;
      return $this;
    }

}
