<?php

namespace Panopto\UserManagement;

class CreateInternalGroupResponse
{

    /**
     * @var Group $CreateInternalGroupResult
     */
    protected $CreateInternalGroupResult = null;

    /**
     * @param Group $CreateInternalGroupResult
     */
    public function __construct($CreateInternalGroupResult)
    {
      $this->CreateInternalGroupResult = $CreateInternalGroupResult;
    }

    /**
     * @return Group
     */
    public function getCreateInternalGroupResult()
    {
      return $this->CreateInternalGroupResult;
    }

    /**
     * @param Group $CreateInternalGroupResult
     * @return \Panopto\UserManagement\CreateInternalGroupResponse
     */
    public function setCreateInternalGroupResult($CreateInternalGroupResult)
    {
      $this->CreateInternalGroupResult = $CreateInternalGroupResult;
      return $this;
    }

}
