<?php

namespace Panopto\AccessManagement;

class GetGroupAccessDetailsResponse
{

    /**
     * @var GroupAccessDetails $GetGroupAccessDetailsResult
     */
    protected $GetGroupAccessDetailsResult = null;

    /**
     * @param GroupAccessDetails $GetGroupAccessDetailsResult
     */
    public function __construct($GetGroupAccessDetailsResult)
    {
      $this->GetGroupAccessDetailsResult = $GetGroupAccessDetailsResult;
    }

    /**
     * @return GroupAccessDetails
     */
    public function getGetGroupAccessDetailsResult()
    {
      return $this->GetGroupAccessDetailsResult;
    }

    /**
     * @param GroupAccessDetails $GetGroupAccessDetailsResult
     * @return \Panopto\AccessManagement\GetGroupAccessDetailsResponse
     */
    public function setGetGroupAccessDetailsResult($GetGroupAccessDetailsResult)
    {
      $this->GetGroupAccessDetailsResult = $GetGroupAccessDetailsResult;
      return $this;
    }

}
