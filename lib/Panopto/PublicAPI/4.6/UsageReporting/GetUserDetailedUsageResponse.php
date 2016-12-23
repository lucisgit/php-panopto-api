<?php

namespace Panopto\UsageReporting;

class GetUserDetailedUsageResponse
{

    /**
     * @var DetailedUsageResponse $GetUserDetailedUsageResult
     */
    protected $GetUserDetailedUsageResult = null;

    /**
     * @param DetailedUsageResponse $GetUserDetailedUsageResult
     */
    public function __construct($GetUserDetailedUsageResult)
    {
      $this->GetUserDetailedUsageResult = $GetUserDetailedUsageResult;
    }

    /**
     * @return DetailedUsageResponse
     */
    public function getGetUserDetailedUsageResult()
    {
      return $this->GetUserDetailedUsageResult;
    }

    /**
     * @param DetailedUsageResponse $GetUserDetailedUsageResult
     * @return \Panopto\UsageReporting\GetUserDetailedUsageResponse
     */
    public function setGetUserDetailedUsageResult($GetUserDetailedUsageResult)
    {
      $this->GetUserDetailedUsageResult = $GetUserDetailedUsageResult;
      return $this;
    }

}
