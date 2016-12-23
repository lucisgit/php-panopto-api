<?php

namespace Panopto\SessionManagement;

class SessionsWithAvailabilitySettings
{

    /**
     * @var ArrayOfSessionAvailabilitySettings $Results
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
     * @return ArrayOfSessionAvailabilitySettings
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param ArrayOfSessionAvailabilitySettings $Results
     * @return \Panopto\SessionManagement\SessionsWithAvailabilitySettings
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
     * @return \Panopto\SessionManagement\SessionsWithAvailabilitySettings
     */
    public function setTotalNumberResults($TotalNumberResults)
    {
      $this->TotalNumberResults = $TotalNumberResults;
      return $this;
    }

}
