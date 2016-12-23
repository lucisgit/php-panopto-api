<?php

namespace Panopto\AccessManagement;

class GetSessionAccessDetailsResponse
{

    /**
     * @var SessionAccessDetails $GetSessionAccessDetailsResult
     */
    protected $GetSessionAccessDetailsResult = null;

    /**
     * @param SessionAccessDetails $GetSessionAccessDetailsResult
     */
    public function __construct($GetSessionAccessDetailsResult)
    {
      $this->GetSessionAccessDetailsResult = $GetSessionAccessDetailsResult;
    }

    /**
     * @return SessionAccessDetails
     */
    public function getGetSessionAccessDetailsResult()
    {
      return $this->GetSessionAccessDetailsResult;
    }

    /**
     * @param SessionAccessDetails $GetSessionAccessDetailsResult
     * @return \Panopto\AccessManagement\GetSessionAccessDetailsResponse
     */
    public function setGetSessionAccessDetailsResult($GetSessionAccessDetailsResult)
    {
      $this->GetSessionAccessDetailsResult = $GetSessionAccessDetailsResult;
      return $this;
    }

}
