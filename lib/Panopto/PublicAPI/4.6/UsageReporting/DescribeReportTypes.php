<?php

namespace Panopto\UsageReporting;

class DescribeReportTypes
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @param AuthenticationInfo $auth
     */
    public function __construct($auth)
    {
      $this->auth = $auth;
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
     * @return \Panopto\UsageReporting\DescribeReportTypes
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

}
