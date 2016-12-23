<?php

namespace Panopto\SessionManagement;

class MoveSessions
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $sessionIds
     */
    protected $sessionIds = null;

    /**
     * @var guid $folderId
     */
    protected $folderId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $sessionIds
     * @param guid $folderId
     */
    public function __construct($auth, $sessionIds, $folderId)
    {
      $this->auth = $auth;
      $this->sessionIds = $sessionIds;
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
     * @return \Panopto\SessionManagement\MoveSessions
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessionIds()
    {
      return $this->sessionIds;
    }

    /**
     * @param ArrayOfguid $sessionIds
     * @return \Panopto\SessionManagement\MoveSessions
     */
    public function setSessionIds($sessionIds)
    {
      $this->sessionIds = $sessionIds;
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
     * @return \Panopto\SessionManagement\MoveSessions
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

}
