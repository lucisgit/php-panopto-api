<?php

namespace Panopto\RemoteRecorderManagement;

class ListRecorders
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var Pagination $pagination
     */
    protected $pagination = null;

    /**
     * @var RecorderSortField $sortBy
     */
    protected $sortBy = null;

    /**
     * @param AuthenticationInfo $auth
     * @param Pagination $pagination
     * @param RecorderSortField $sortBy
     */
    public function __construct($auth, $pagination, $sortBy)
    {
      $this->auth = $auth;
      $this->pagination = $pagination;
      $this->sortBy = $sortBy;
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
     * @return \Panopto\RemoteRecorderManagement\ListRecorders
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
      return $this->pagination;
    }

    /**
     * @param Pagination $pagination
     * @return \Panopto\RemoteRecorderManagement\ListRecorders
     */
    public function setPagination($pagination)
    {
      $this->pagination = $pagination;
      return $this;
    }

    /**
     * @return RecorderSortField
     */
    public function getSortBy()
    {
      return $this->sortBy;
    }

    /**
     * @param RecorderSortField $sortBy
     * @return \Panopto\RemoteRecorderManagement\ListRecorders
     */
    public function setSortBy($sortBy)
    {
      $this->sortBy = $sortBy;
      return $this;
    }

}
