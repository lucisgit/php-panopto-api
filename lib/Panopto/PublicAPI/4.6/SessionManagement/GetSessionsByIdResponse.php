<?php

namespace Panopto\SessionManagement;

class GetSessionsByIdResponse
{

    /**
     * @var ArrayOfSession $GetSessionsByIdResult
     */
    protected $GetSessionsByIdResult = null;

    /**
     * @param ArrayOfSession $GetSessionsByIdResult
     */
    public function __construct($GetSessionsByIdResult)
    {
      $this->GetSessionsByIdResult = $GetSessionsByIdResult;
    }

    /**
     * @return ArrayOfSession
     */
    public function getGetSessionsByIdResult()
    {
      return $this->GetSessionsByIdResult;
    }

    /**
     * @param ArrayOfSession $GetSessionsByIdResult
     * @return \Panopto\SessionManagement\GetSessionsByIdResponse
     */
    public function setGetSessionsByIdResult($GetSessionsByIdResult)
    {
      $this->GetSessionsByIdResult = $GetSessionsByIdResult;
      return $this;
    }

}
