<?php

namespace Panopto\UsageReporting;

class GetSessionUserDetailedUsage
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
     * @var guid $userId
     */
    protected $userId = null;

    /**
     * @var Pagination $pagination
     */
    protected $pagination = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param guid $userId
     * @param Pagination $pagination
     */
    public function __construct($auth, $sessionId, $userId, $pagination)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->userId = $userId;
      $this->pagination = $pagination;
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
     * @return \Panopto\UsageReporting\GetSessionUserDetailedUsage
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
     * @return \Panopto\UsageReporting\GetSessionUserDetailedUsage
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param guid $userId
     * @return \Panopto\UsageReporting\GetSessionUserDetailedUsage
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
      return $this->pagination;
    }

    /**
     * @param Pagination $pagination
     * @return \Panopto\UsageReporting\GetSessionUserDetailedUsage
     */
    public function setPagination($pagination)
    {
      $this->pagination = $pagination;
      return $this;
    }

}
