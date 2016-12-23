<?php

namespace Panopto\UsageReporting;

class GetSessionDetailedUsageResponse
{

    /**
     * @var DetailedUsageResponse $GetSessionDetailedUsageResult
     */
    protected $GetSessionDetailedUsageResult = null;

    /**
     * @param DetailedUsageResponse $GetSessionDetailedUsageResult
     */
    public function __construct($GetSessionDetailedUsageResult)
    {
      $this->GetSessionDetailedUsageResult = $GetSessionDetailedUsageResult;
    }

    /**
     * @return DetailedUsageResponse
     */
    public function getGetSessionDetailedUsageResult()
    {
      return $this->GetSessionDetailedUsageResult;
    }

    /**
     * @param DetailedUsageResponse $GetSessionDetailedUsageResult
     * @return \Panopto\UsageReporting\GetSessionDetailedUsageResponse
     */
    public function setGetSessionDetailedUsageResult($GetSessionDetailedUsageResult)
    {
      $this->GetSessionDetailedUsageResult = $GetSessionDetailedUsageResult;
      return $this;
    }

}
