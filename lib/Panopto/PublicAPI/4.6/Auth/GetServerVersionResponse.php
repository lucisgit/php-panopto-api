<?php

namespace Panopto\Auth;

class GetServerVersionResponse
{

    /**
     * @var string $GetServerVersionResult
     */
    protected $GetServerVersionResult = null;

    /**
     * @param string $GetServerVersionResult
     */
    public function __construct($GetServerVersionResult)
    {
      $this->GetServerVersionResult = $GetServerVersionResult;
    }

    /**
     * @return string
     */
    public function getGetServerVersionResult()
    {
      return $this->GetServerVersionResult;
    }

    /**
     * @param string $GetServerVersionResult
     * @return \Panopto\Auth\GetServerVersionResponse
     */
    public function setGetServerVersionResult($GetServerVersionResult)
    {
      $this->GetServerVersionResult = $GetServerVersionResult;
      return $this;
    }

}
