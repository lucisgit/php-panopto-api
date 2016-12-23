<?php

namespace Panopto\AccessManagement;

class GrantGroupViewerAccessToSession
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
     * @var guid $groupId
     */
    protected $groupId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param guid $groupId
     */
    public function __construct($auth, $sessionId, $groupId)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->groupId = $groupId;
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
     * @return \Panopto\AccessManagement\GrantGroupViewerAccessToSession
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
     * @return \Panopto\AccessManagement\GrantGroupViewerAccessToSession
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param guid $groupId
     * @return \Panopto\AccessManagement\GrantGroupViewerAccessToSession
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

}
