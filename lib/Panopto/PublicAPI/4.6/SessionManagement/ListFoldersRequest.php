<?php

namespace Panopto\SessionManagement;

class ListFoldersRequest
{

    /**
     * @var Pagination $Pagination
     */
    protected $Pagination = null;

    /**
     * @var guid $ParentFolderId
     */
    protected $ParentFolderId = null;

    /**
     * @var boolean $PublicOnly
     */
    protected $PublicOnly = null;

    /**
     * @var FolderSortField $SortBy
     */
    protected $SortBy = null;

    /**
     * @var boolean $SortIncreasing
     */
    protected $SortIncreasing = null;

    /**
     * @var boolean $WildcardSearchNameOnly
     */
    protected $WildcardSearchNameOnly = null;


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
     * @return \Panopto\SessionManagement\ListFoldersRequest
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return guid
     */
    public function getParentFolderId()
    {
      return $this->ParentFolderId;
    }

    /**
     * @param guid $ParentFolderId
     * @return \Panopto\SessionManagement\ListFoldersRequest
     */
    public function setParentFolderId($ParentFolderId)
    {
      $this->ParentFolderId = $ParentFolderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPublicOnly()
    {
      return $this->PublicOnly;
    }

    /**
     * @param boolean $PublicOnly
     * @return \Panopto\SessionManagement\ListFoldersRequest
     */
    public function setPublicOnly($PublicOnly)
    {
      $this->PublicOnly = $PublicOnly;
      return $this;
    }

    /**
     * @return FolderSortField
     */
    public function getSortBy()
    {
      return $this->SortBy;
    }

    /**
     * @param FolderSortField $SortBy
     * @return \Panopto\SessionManagement\ListFoldersRequest
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
     * @return \Panopto\SessionManagement\ListFoldersRequest
     */
    public function setSortIncreasing($SortIncreasing)
    {
      $this->SortIncreasing = $SortIncreasing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWildcardSearchNameOnly()
    {
      return $this->WildcardSearchNameOnly;
    }

    /**
     * @param boolean $WildcardSearchNameOnly
     * @return \Panopto\SessionManagement\ListFoldersRequest
     */
    public function setWildcardSearchNameOnly($WildcardSearchNameOnly)
    {
      $this->WildcardSearchNameOnly = $WildcardSearchNameOnly;
      return $this;
    }

}
