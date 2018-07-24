<?php

namespace Panopto\UsageReporting;

class GetReport
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $reportId
     */
    protected $reportId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $reportId
     */
    public function __construct($auth, $reportId)
    {
      $this->auth = $auth;
      $this->reportId = $reportId;
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
     * @return \Panopto\UsageReporting\GetReport
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getReportId()
    {
      return $this->reportId;
    }

    /**
     * @param guid $reportId
     * @return \Panopto\UsageReporting\GetReport
     */
    public function setReportId($reportId)
    {
      $this->reportId = $reportId;
      return $this;
    }

}
