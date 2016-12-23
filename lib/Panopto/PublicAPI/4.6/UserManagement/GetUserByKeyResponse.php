<?php

namespace Panopto\UserManagement;

class GetUserByKeyResponse
{

    /**
     * @var User $GetUserByKeyResult
     */
    protected $GetUserByKeyResult = null;

    /**
     * @param User $GetUserByKeyResult
     */
    public function __construct($GetUserByKeyResult)
    {
      $this->GetUserByKeyResult = $GetUserByKeyResult;
    }

    /**
     * @return User
     */
    public function getGetUserByKeyResult()
    {
      return $this->GetUserByKeyResult;
    }

    /**
     * @param User $GetUserByKeyResult
     * @return \Panopto\UserManagement\GetUserByKeyResponse
     */
    public function setGetUserByKeyResult($GetUserByKeyResult)
    {
      $this->GetUserByKeyResult = $GetUserByKeyResult;
      return $this;
    }

}
