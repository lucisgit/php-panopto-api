<?php

namespace Panopto\UserManagement;

class ListUsers
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ListUsersRequest $parameters
     */
    protected $parameters = null;

    /**
     * @var string $searchQuery
     */
    protected $searchQuery = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ListUsersRequest $parameters
     * @param string $searchQuery
     */
    public function __construct($auth, $parameters, $searchQuery)
    {
      $this->auth = $auth;
      $this->parameters = $parameters;
      $this->searchQuery = $searchQuery;
    }

    /**
     * @return AuthenticationInfo
     */
    public function getAuth()
    {
      return $this->auth;
    }

    /**
     * @param AuthenticationInfo $auth
     * @return \Panopto\UserManagement\ListUsers
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ListUsersRequest
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param ListUsersRequest $parameters
     * @return \Panopto\UserManagement\ListUsers
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchQuery()
    {
      return $this->searchQuery;
    }

    /**
     * @param string $searchQuery
     * @return \Panopto\UserManagement\ListUsers
     */
    public function setSearchQuery($searchQuery)
    {
      $this->searchQuery = $searchQuery;
      return $this;
    }

}
