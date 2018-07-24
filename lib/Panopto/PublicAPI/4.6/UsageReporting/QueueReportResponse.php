<?php

namespace Panopto\UsageReporting;

class QueueReportResponse
{

    /**
     * @var guid $QueueReportResult
     */
    protected $QueueReportResult = null;

    /**
     * @param guid $QueueReportResult
     */
    public function __construct($QueueReportResult)
    {
      $this->QueueReportResult = $QueueReportResult;
    }

    /**
     * @return guid
     */
    public function getQueueReportResult()
    {
      return $this->QueueReportResult;
    }

    /**
     * @param guid $QueueReportResult
     * @return \Panopto\UsageReporting\QueueReportResponse
     */
    public function setQueueReportResult($QueueReportResult)
    {
      $this->QueueReportResult = $QueueReportResult;
      return $this;
    }

}
