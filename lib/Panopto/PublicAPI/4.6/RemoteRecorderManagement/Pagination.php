<?php

namespace Panopto\RemoteRecorderManagement;

class Pagination
{

    /**
     * @var int $MaxNumberResults
     */
    protected $MaxNumberResults = null;

    /**
     * @var int $PageNumber
     */
    protected $PageNumber = null;


    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getMaxNumberResults()
    {
      return $this->MaxNumberResults;
    }

    /**
     * @param int $MaxNumberResults
     * @return \Panopto\RemoteRecorderManagement\Pagination
     */
    public function setMaxNumberResults($MaxNumberResults)
    {
      $this->MaxNumberResults = $MaxNumberResults;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->PageNumber;
    }

    /**
     * @param int $PageNumber
     * @return \Panopto\RemoteRecorderManagement\Pagination
     */
    public function setPageNumber($PageNumber)
    {
      $this->PageNumber = $PageNumber;
      return $this;
    }

}
