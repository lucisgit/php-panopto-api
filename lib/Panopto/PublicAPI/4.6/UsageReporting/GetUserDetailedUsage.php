<?php

namespace Panopto\UsageReporting;

class GetUserDetailedUsage
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

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
     * @param guid $userId
     * @param Pagination $pagination
     */
    public function __construct($auth, $userId, $pagination)
    {
      $this->auth = $auth;
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
     * @return \Panopto\UsageReporting\GetUserDetailedUsage
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
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
     * @return \Panopto\UsageReporting\GetUserDetailedUsage
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
     * @return \Panopto\UsageReporting\GetUserDetailedUsage
     */
    public function setPagination($pagination)
    {
      $this->pagination = $pagination;
      return $this;
    }

}
