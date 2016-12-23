<?php

namespace Panopto\AccessManagement;

class RevokeUsersViewerAccessFromSession
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfguid $userIds
     */
    protected $userIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param ArrayOfguid $userIds
     */
    public function __construct($auth, $sessionId, $userIds)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->userIds = $userIds;
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
     * @return \Panopto\AccessManagement\RevokeUsersViewerAccessFromSession
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param guid $sessionId
     * @return \Panopto\AccessManagement\RevokeUsersViewerAccessFromSession
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getUserIds()
    {
      return $this->userIds;
    }

    /**
     * @param ArrayOfguid $userIds
     * @return \Panopto\AccessManagement\RevokeUsersViewerAccessFromSession
     */
    public function setUserIds($userIds)
    {
      $this->userIds = $userIds;
      return $this;
    }

}
