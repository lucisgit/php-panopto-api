<?php

namespace Panopto\UserManagement;

class GetUsersInGroupResponse
{

    /**
     * @var ArrayOfguid $GetUsersInGroupResult
     */
    protected $GetUsersInGroupResult = null;

    /**
     * @param ArrayOfguid $GetUsersInGroupResult
     */
    public function __construct($GetUsersInGroupResult)
    {
      $this->GetUsersInGroupResult = $GetUsersInGroupResult;
    }

    /**
     * @return ArrayOfguid
     */
    public function getGetUsersInGroupResult()
    {
      return $this->GetUsersInGroupResult;
    }

    /**
     * @param ArrayOfguid $GetUsersInGroupResult
     * @return \Panopto\UserManagement\GetUsersInGroupResponse
     */
    public function setGetUsersInGroupResult($GetUsersInGroupResult)
    {
      $this->GetUsersInGroupResult = $GetUsersInGroupResult;
      return $this;
    }

}
