<?php

namespace Panopto\AccessManagement;

class GetSelfUserAccessDetailsResponse
{

    /**
     * @var UserAccessDetails $GetSelfUserAccessDetailsResult
     */
    protected $GetSelfUserAccessDetailsResult = null;

    /**
     * @param UserAccessDetails $GetSelfUserAccessDetailsResult
     */
    public function __construct($GetSelfUserAccessDetailsResult)
    {
      $this->GetSelfUserAccessDetailsResult = $GetSelfUserAccessDetailsResult;
    }

    /**
     * @return UserAccessDetails
     */
    public function getGetSelfUserAccessDetailsResult()
    {
      return $this->GetSelfUserAccessDetailsResult;
    }

    /**
     * @param UserAccessDetails $GetSelfUserAccessDetailsResult
     * @return \Panopto\AccessManagement\GetSelfUserAccessDetailsResponse
     */
    public function setGetSelfUserAccessDetailsResult($GetSelfUserAccessDetailsResult)
    {
      $this->GetSelfUserAccessDetailsResult = $GetSelfUserAccessDetailsResult;
      return $this;
    }

}
