<?php

namespace Panopto\UsageReporting;

class GetSystemSummaryUsageResponse
{

    /**
     * @var ArrayOfSummaryUsageResponseItem $GetSystemSummaryUsageResult
     */
    protected $GetSystemSummaryUsageResult = null;

    /**
     * @param ArrayOfSummaryUsageResponseItem $GetSystemSummaryUsageResult
     */
    public function __construct($GetSystemSummaryUsageResult)
    {
      $this->GetSystemSummaryUsageResult = $GetSystemSummaryUsageResult;
    }

    /**
     * @return ArrayOfSummaryUsageResponseItem
     */
    public function getGetSystemSummaryUsageResult()
    {
      return $this->GetSystemSummaryUsageResult;
    }

    /**
     * @param ArrayOfSummaryUsageResponseItem $GetSystemSummaryUsageResult
     * @return \Panopto\UsageReporting\GetSystemSummaryUsageResponse
     */
    public function setGetSystemSummaryUsageResult($GetSystemSummaryUsageResult)
    {
      $this->GetSystemSummaryUsageResult = $GetSystemSummaryUsageResult;
      return $this;
    }

}
