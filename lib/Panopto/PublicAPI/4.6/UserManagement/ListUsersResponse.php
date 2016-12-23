<?php

namespace Panopto\UserManagement;

class ListUsersResponse
{

    /**
     * @var ListUsersResponse $ListUsersResult
     */
    protected $ListUsersResult = null;

    /**
     * @param ListUsersResponse $ListUsersResult
     */
    public function __construct($ListUsersResult)
    {
      $this->ListUsersResult = $ListUsersResult;
    }

    /**
     * @return ListUsersResponse
     */
    public function getListUsersResult()
    {
      return $this->ListUsersResult;
    }

    /**
     * @param ListUsersResponse $ListUsersResult
     * @return \Panopto\UserManagement\ListUsersResponse
     */
    public function setListUsersResult($ListUsersResult)
    {
      $this->ListUsersResult = $ListUsersResult;
      return $this;
    }

}
