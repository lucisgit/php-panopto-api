<?php

namespace Panopto\SessionManagement;

class GetSessionsListResponse
{

    /**
     * @var ListSessionsResponse $GetSessionsListResult
     */
    protected $GetSessionsListResult = null;

    /**
     * @param ListSessionsResponse $GetSessionsListResult
     */
    public function __construct($GetSessionsListResult)
    {
      $this->GetSessionsListResult = $GetSessionsListResult;
    }

    /**
     * @return ListSessionsResponse
     */
    public function getGetSessionsListResult()
    {
      return $this->GetSessionsListResult;
    }

    /**
     * @param ListSessionsResponse $GetSessionsListResult
     * @return \Panopto\SessionManagement\GetSessionsListResponse
     */
    public function setGetSessionsListResult($GetSessionsListResult)
    {
      $this->GetSessionsListResult = $GetSessionsListResult;
      return $this;
    }

}
