<?php

namespace Panopto\UserManagement;

class CreateUserResponse
{

    /**
     * @var guid $CreateUserResult
     */
    protected $CreateUserResult = null;

    /**
     * @param guid $CreateUserResult
     */
    public function __construct($CreateUserResult)
    {
      $this->CreateUserResult = $CreateUserResult;
    }

    /**
     * @return guid
     */
    public function getCreateUserResult()
    {
      return $this->CreateUserResult;
    }

    /**
     * @param guid $CreateUserResult
     * @return \Panopto\UserManagement\CreateUserResponse
     */
    public function setCreateUserResult($CreateUserResult)
    {
      $this->CreateUserResult = $CreateUserResult;
      return $this;
    }

}
