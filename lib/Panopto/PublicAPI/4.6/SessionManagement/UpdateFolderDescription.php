<?php

namespace Panopto\SessionManagement;

class UpdateFolderDescription
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param string $description
     */
    public function __construct($auth, $folderId, $description)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->description = $description;
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
     * @return \Panopto\SessionManagement\UpdateFolderDescription
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
     * @return \Panopto\SessionManagement\UpdateFolderDescription
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Panopto\SessionManagement\UpdateFolderDescription
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
