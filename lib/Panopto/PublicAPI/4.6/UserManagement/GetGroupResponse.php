<?php

namespace Panopto\UserManagement;

class GetGroupResponse
{

    /**
     * @var Group $GetGroupResult
     */
    protected $GetGroupResult = null;

    /**
     * @param Group $GetGroupResult
     */
    public function __construct($GetGroupResult)
    {
      $this->GetGroupResult = $GetGroupResult;
    }

    /**
     * @return Group
     */
    public function getGetGroupResult()
    {
      return $this->GetGroupResult;
    }

    /**
     * @param Group $GetGroupResult
     * @return \Panopto\UserManagement\GetGroupResponse
     */
    public function setGetGroupResult($GetGroupResult)
    {
      $this->GetGroupResult = $GetGroupResult;
      return $this;
    }

}
