<?php

namespace Panopto\SessionManagement;

class GetCreatorFoldersWithExternalContextList
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ListFoldersRequest $request
     */
    protected $request = null;

    /**
     * @var string $searchQuery
     */
    protected $searchQuery = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ListFoldersRequest $request
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
     * @return \Panopto\SessionManagement\GetCreatorFoldersWithExternalContextList
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ListFoldersRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ListFoldersRequest $request
     * @return \Panopto\SessionManagement\GetCreatorFoldersWithExternalContextList
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
     * @return \Panopto\SessionManagement\GetCreatorFoldersWithExternalContextList
     */
    public function setSearchQuery($searchQuery)
    {
      $this->searchQuery = $searchQuery;
      return $this;
    }

}
