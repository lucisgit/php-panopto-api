<?php

namespace Panopto\SessionManagement;

class ListSessionsResponse
{

    /**
     * @var ArrayOfSession $Results
     */
    protected $Results = null;

    /**
     * @var int $TotalNumberResults
     */
    protected $TotalNumberResults = null;


    public function __construct()
    {

    }

    /**
     * @return ArrayOfSession
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param ArrayOfSession $Results
     * @return \Panopto\SessionManagement\ListSessionsResponse
     */
    public function setResults($Results)
    {
      $this->Results = $Results;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalNumberResults()
    {
      return $this->TotalNumberResults;
    }

    /**
     * @param int $TotalNumberResults
     * @return \Panopto\SessionManagement\ListSessionsResponse
     */
    public function setTotalNumberResults($TotalNumberResults)
    {
      $this->TotalNumberResults = $TotalNumberResults;
      return $this;
    }

}
