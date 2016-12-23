<?php

namespace Panopto\UserManagement;

class ListGroupsResponse
{

    /**
     * @var ListGroupsResponse $ListGroupsResult
     */
    protected $ListGroupsResult = null;

    /**
     * @param ListGroupsResponse $ListGroupsResult
     */
    public function __construct($ListGroupsResult)
    {
      $this->ListGroupsResult = $ListGroupsResult;
    }

    /**
     * @return ListGroupsResponse
     */
    public function getListGroupsResult()
    {
      return $this->ListGroupsResult;
    }

    /**
     * @param ListGroupsResponse $ListGroupsResult
     * @return \Panopto\UserManagement\ListGroupsResponse
     */
    public function setListGroupsResult($ListGroupsResult)
    {
      $this->ListGroupsResult = $ListGroupsResult;
      return $this;
    }

}
