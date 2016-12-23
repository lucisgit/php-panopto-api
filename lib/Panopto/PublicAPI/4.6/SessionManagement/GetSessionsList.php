<?php

namespace Panopto\SessionManagement;

class GetSessionsList
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ListSessionsRequest $request
     */
    protected $request = null;

    /**
     * @var string $searchQuery
     */
    protected $searchQuery = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ListSessionsRequest $request
     * @param string $searchQuery
     */
    public function __construct($auth, $request, $searchQuery)
    {
      $this->auth = $auth;
      $this->request = $request;
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
     * @return \Panopto\SessionManagement\GetSessionsList
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ListSessionsRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ListSessionsRequest $request
     * @return \Panopto\SessionManagement\GetSessionsList
     */
    public function setRequest($request)
    {
      $this->request = $request;
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
     * @return \Panopto\SessionManagement\GetSessionsList
     */
    public function setSearchQuery($searchQuery)
    {
      $this->searchQuery = $searchQuery;
      return $this;
    }

}
