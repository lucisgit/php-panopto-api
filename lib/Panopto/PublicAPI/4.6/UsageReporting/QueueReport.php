<?php

namespace Panopto\UsageReporting;

class QueueReport
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
     * @var \DateTime $startTime
     */
    protected $startTime = null;

    /**
     * @var \DateTime $endTime
     */
    protected $endTime = null;

    /**
     * @param AuthenticationInfo $auth
     * @param StatsReportType $reportType
     * @param \DateTime $startTime
     * @param \DateTime $endTime
     */
    public function __construct($auth, $reportType, \DateTime $startTime, \DateTime $endTime)
    {
      $this->auth = $auth;
      $this->reportType = $reportType;
      $this->startTime = $startTime->format(\DateTime::ATOM);
      $this->endTime = $endTime->format(\DateTime::ATOM);
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
     * @return \Panopto\UsageReporting\QueueReport
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
     * @return \Panopto\UsageReporting\QueueReport
     */
    public function setReportType($reportType)
    {
      $this->reportType = $reportType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->startTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startTime
     * @return \Panopto\UsageReporting\QueueReport
     */
    public function setStartTime(\DateTime $startTime)
    {
      $this->startTime = $startTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->endTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endTime
     * @return \Panopto\UsageReporting\QueueReport
     */
    public function setEndTime(\DateTime $endTime)
    {
      $this->endTime = $endTime->format(\DateTime::ATOM);
      return $this;
    }

}
