<?php

namespace Panopto\Auth;

class LogOnWithExternalProviderResponse
{

    /**
     * @var boolean $LogOnWithExternalProviderResult
     */
    protected $LogOnWithExternalProviderResult = null;

    /**
     * @param boolean $LogOnWithExternalProviderResult
     */
    public function __construct($LogOnWithExternalProviderResult)
    {
      $this->LogOnWithExternalProviderResult = $LogOnWithExternalProviderResult;
    }

    /**
     * @return boolean
     */
    public function getLogOnWithExternalProviderResult()
    {
      return $this->LogOnWithExternalProviderResult;
    }

    /**
     * @param boolean $LogOnWithExternalProviderResult
     * @return \Panopto\Auth\LogOnWithExternalProviderResponse
     */
    public function setLogOnWithExternalProviderResult($LogOnWithExternalProviderResult)
    {
      $this->LogOnWithExternalProviderResult = $LogOnWithExternalProviderResult;
      return $this;
    }

}
