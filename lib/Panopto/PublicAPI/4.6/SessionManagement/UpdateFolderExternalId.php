<?php

namespace Panopto\SessionManagement;

class UpdateFolderExternalId
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
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param string $externalId
     */
    public function __construct($auth, $folderId, $externalId)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->externalId = $externalId;
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
     * @return \Panopto\SessionManagement\UpdateFolderExternalId
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
     * @return \Panopto\SessionManagement\UpdateFolderExternalId
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Panopto\SessionManagement\UpdateFolderExternalId
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
