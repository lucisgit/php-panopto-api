<?php

namespace Panopto\UserManagement;

class ListGroups
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
     * @param AuthenticationInfo $auth
     * @param Pagination $pagination
     */
    public function __construct($auth, $pagination)
    {
      $this->auth = $auth;
      $this->pagination = $pagination;
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
     * @return \Panopto\UserManagement\ListGroups
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
     * @return \Panopto\UserManagement\ListGroups
     */
    public function setPagination($pagination)
    {
      $this->pagination = $pagination;
      return $this;
    }

}
