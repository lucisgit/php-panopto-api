<?php

namespace Panopto\SessionManagement;

class IsDropbox
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
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     */
    public function __construct($auth, $folderId)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
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
     * @return \Panopto\SessionManagement\IsDropbox
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
     * @return \Panopto\SessionManagement\IsDropbox
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

}
