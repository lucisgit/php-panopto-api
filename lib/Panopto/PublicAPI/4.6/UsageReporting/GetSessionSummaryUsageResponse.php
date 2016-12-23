<?php

namespace Panopto\UsageReporting;

class GetSessionSummaryUsageResponse
{

    /**
     * @var ArrayOfSummaryUsageResponseItem $GetSessionSummaryUsageResult
     */
    protected $GetSessionSummaryUsageResult = null;

    /**
     * @param ArrayOfSummaryUsageResponseItem $GetSessionSummaryUsageResult
     */
    public function __construct($GetSessionSummaryUsageResult)
    {
      $this->GetSessionSummaryUsageResult = $GetSessionSummaryUsageResult;
    }

    /**
     * @return ArrayOfSummaryUsageResponseItem
     */
    public function getGetSessionSummaryUsageResult()
    {
      return $this->GetSessionSummaryUsageResult;
    }

    /**
     * @param ArrayOfSummaryUsageResponseItem $GetSessionSummaryUsageResult
     * @return \Panopto\UsageReporting\GetSessionSummaryUsageResponse
     */
    public function setGetSessionSummaryUsageResult($GetSessionSummaryUsageResult)
    {
      $this->GetSessionSummaryUsageResult = $GetSessionSummaryUsageResult;
      return $this;
    }

}
