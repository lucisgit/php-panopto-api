<?php

namespace Panopto\SessionManagement;

class UpdateFolderName
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
     * @var string $name
     */
    protected $name = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param string $name
     */
    public function __construct($auth, $folderId, $name)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->name = $name;
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
     * @return \Panopto\SessionManagement\UpdateFolderName
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
     * @return \Panopto\SessionManagement\UpdateFolderName
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Panopto\SessionManagement\UpdateFolderName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
