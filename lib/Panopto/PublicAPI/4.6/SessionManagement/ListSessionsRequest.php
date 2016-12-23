<?php

namespace Panopto\SessionManagement;

class ListSessionsRequest
{

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var guid $FolderId
     */
    protected $FolderId = null;

    /**
     * @var Pagination $Pagination
     */
    protected $Pagination = null;

    /**
     * @var guid $RemoteRecorderId
     */
    protected $RemoteRecorderId = null;

    /**
     * @var SessionSortField $SortBy
     */
    protected $SortBy = null;

    /**
     * @var boolean $SortIncreasing
     */
    protected $SortIncreasing = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var ArrayOfSessionState $States
     */
    protected $States = null;


    public function __construct()
    {

    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Panopto\SessionManagement\ListSessionsRequest
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return guid
     */
    public function getFolderId()
    {
      return $this->FolderId;
    }

    /**
     * @param guid $FolderId
     * @return \Panopto\SessionManagement\ListSessionsRequest
     */
    public function setFolderId($FolderId)
    {
      $this->FolderId = $FolderId;
      return $this;
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
     * @return \Panopto\SessionManagement\ListSessionsRequest
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return guid
     */
    public function getRemoteRecorderId()
    {
      return $this->RemoteRecorderId;
    }

    /**
     * @param guid $RemoteRecorderId
     * @return \Panopto\SessionManagement\ListSessionsRequest
     */
    public function setRemoteRecorderId($RemoteRecorderId)
    {
      $this->RemoteRecorderId = $RemoteRecorderId;
      return $this;
    }

    /**
     * @return SessionSortField
     */
    public function getSortBy()
    {
      return $this->SortBy;
    }

    /**
     * @param SessionSortField $SortBy
     * @return \Panopto\SessionManagement\ListSessionsRequest
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
     * @return \Panopto\SessionManagement\ListSessionsRequest
     */
    public function setSortIncreasing($SortIncreasing)
    {
      $this->SortIncreasing = $SortIncreasing;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Panopto\SessionManagement\ListSessionsRequest
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfSessionState
     */
    public function getStates()
    {
      return $this->States;
    }

    /**
     * @param ArrayOfSessionState $States
     * @return \Panopto\SessionManagement\ListSessionsRequest
     */
    public function setStates($States)
    {
      $this->States = $States;
      return $this;
    }

}
