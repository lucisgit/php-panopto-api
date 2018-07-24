<?php

namespace Panopto\UsageReporting;

class GetRecentReports
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var StatsReportType $reportType
     */
    protected $reportType = null;

    /**
     * @param AuthenticationInfo $auth
     * @param StatsReportType $reportType
     */
    public function __construct($auth, $reportType)
    {
      $this->auth = $auth;
      $this->reportType = $reportType;
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
     * @return \Panopto\UsageReporting\GetRecentReports
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return StatsReportType
     */
    public function getReportType()
    {
      return $this->reportType;
    }

    /**
     * @param StatsReportType $reportType
     * @return \Panopto\UsageReporting\GetRecentReports
     */
    public function setReportType($reportType)
    {
      $this->reportType = $reportType;
      return $this;
    }

}
