<?php

namespace Panopto\UserManagement;

class CreateUsersResponse
{

    /**
     * @var ArrayOfUser $CreateUsersResult
     */
    protected $CreateUsersResult = null;

    /**
     * @param ArrayOfUser $CreateUsersResult
     */
    public function __construct($CreateUsersResult)
    {
      $this->CreateUsersResult = $CreateUsersResult;
    }

    /**
     * @return ArrayOfUser
     */
    public function getCreateUsersResult()
    {
      return $this->CreateUsersResult;
    }

    /**
     * @param ArrayOfUser $CreateUsersResult
     * @return \Panopto\UserManagement\CreateUsersResponse
     */
    public function setCreateUsersResult($CreateUsersResult)
    {
      $this->CreateUsersResult = $CreateUsersResult;
      return $this;
    }

}
