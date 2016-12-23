<?php

namespace Panopto\UsageReporting;

class DetailedUsageResponse
{

    /**
     * @var ArrayOfDetailedUsageResponseItem $PagedResponses
     */
    protected $PagedResponses = null;

    /**
     * @var int $TotalNumberResponses
     */
    protected $TotalNumberResponses = null;


    public function __construct()
    {

    }

    /**
     * @return ArrayOfDetailedUsageResponseItem
     */
    public function getPagedResponses()
    {
      return $this->PagedResponses;
    }

    /**
     * @param ArrayOfDetailedUsageResponseItem $PagedResponses
     * @return \Panopto\UsageReporting\DetailedUsageResponse
     */
    public function setPagedResponses($PagedResponses)
    {
      $this->PagedResponses = $PagedResponses;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalNumberResponses()
    {
      return $this->TotalNumberResponses;
    }

    /**
     * @param int $TotalNumberResponses
     * @return \Panopto\UsageReporting\DetailedUsageResponse
     */
    public function setTotalNumberResponses($TotalNumberResponses)
    {
      $this->TotalNumberResponses = $TotalNumberResponses;
      return $this;
    }

}
