<?php

namespace Panopto\UserManagement;

class GetGroupIsPublicResponse
{

    /**
     * @var boolean $GetGroupIsPublicResult
     */
    protected $GetGroupIsPublicResult = null;

    /**
     * @param boolean $GetGroupIsPublicResult
     */
    public function __construct($GetGroupIsPublicResult)
    {
      $this->GetGroupIsPublicResult = $GetGroupIsPublicResult;
    }

    /**
     * @return boolean
     */
    public function getGetGroupIsPublicResult()
    {
      return $this->GetGroupIsPublicResult;
    }

    /**
     * @param boolean $GetGroupIsPublicResult
     * @return \Panopto\UserManagement\GetGroupIsPublicResponse
     */
    public function setGetGroupIsPublicResult($GetGroupIsPublicResult)
    {
      $this->GetGroupIsPublicResult = $GetGroupIsPublicResult;
      return $this;
    }

}
