<?php

namespace Panopto\UserManagement;

class CreateExternalGroupResponse
{

    /**
     * @var Group $CreateExternalGroupResult
     */
    protected $CreateExternalGroupResult = null;

    /**
     * @param Group $CreateExternalGroupResult
     */
    public function __construct($CreateExternalGroupResult)
    {
      $this->CreateExternalGroupResult = $CreateExternalGroupResult;
    }

    /**
     * @return Group
     */
    public function getCreateExternalGroupResult()
    {
      return $this->CreateExternalGroupResult;
    }

    /**
     * @param Group $CreateExternalGroupResult
     * @return \Panopto\UserManagement\CreateExternalGroupResponse
     */
    public function setCreateExternalGroupResult($CreateExternalGroupResult)
    {
      $this->CreateExternalGroupResult = $CreateExternalGroupResult;
      return $this;
    }

}
