<?php

namespace Panopto\Auth;

class GetAuthenticatedUrlResponse
{

    /**
     * @var string $GetAuthenticatedUrlResult
     */
    protected $GetAuthenticatedUrlResult = null;

    /**
     * @param string $GetAuthenticatedUrlResult
     */
    public function __construct($GetAuthenticatedUrlResult)
    {
      $this->GetAuthenticatedUrlResult = $GetAuthenticatedUrlResult;
    }

    /**
     * @return string
     */
    public function getGetAuthenticatedUrlResult()
    {
      return $this->GetAuthenticatedUrlResult;
    }

    /**
     * @param string $GetAuthenticatedUrlResult
     * @return \Panopto\Auth\GetAuthenticatedUrlResponse
     */
    public function setGetAuthenticatedUrlResult($GetAuthenticatedUrlResult)
    {
      $this->GetAuthenticatedUrlResult = $GetAuthenticatedUrlResult;
      return $this;
    }

}
