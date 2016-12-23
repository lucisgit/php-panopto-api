<?php

namespace Panopto\UserManagement;

class ListUsersRequest
{

    /**
     * @var Pagination $Pagination
     */
    protected $Pagination = null;

    /**
     * @var UserSortField $SortBy
     */
    protected $SortBy = null;

    /**
     * @var boolean $SortIncreasing
     */
    protected $SortIncreasing = null;


    public function __construct()
    {

    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param Pagination $Pagination
     * @return \Panopto\UserManagement\ListUsersRequest
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return UserSortField
     */
    public function getSortBy()
    {
      return $this->SortBy;
    }

    /**
     * @param UserSortField $SortBy
     * @return \Panopto\UserManagement\ListUsersRequest
     */
    public function setSortBy($SortBy)
    {
      $this->SortBy = $SortBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSortIncreasing()
    {
      return $this->SortIncreasing;
    }

    /**
     * @param boolean $SortIncreasing
     * @return \Panopto\UserManagement\ListUsersRequest
     */
    public function setSortIncreasing($SortIncreasing)
    {
      $this->SortIncreasing = $SortIncreasing;
      return $this;
    }

}
