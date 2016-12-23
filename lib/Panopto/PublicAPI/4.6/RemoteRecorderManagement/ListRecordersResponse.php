<?php

namespace Panopto\RemoteRecorderManagement;

class ListRecordersResponse
{

    /**
     * @var ListRecordersResponse $ListRecordersResult
     */
    protected $ListRecordersResult = null;

    /**
     * @param ListRecordersResponse $ListRecordersResult
     */
    public function __construct($ListRecordersResult)
    {
      $this->ListRecordersResult = $ListRecordersResult;
    }

    /**
     * @return ListRecordersResponse
     */
    public function getListRecordersResult()
    {
      return $this->ListRecordersResult;
    }

    /**
     * @param ListRecordersResponse $ListRecordersResult
     * @return \Panopto\RemoteRecorderManagement\ListRecordersResponse
     */
    public function setListRecordersResult($ListRecordersResult)
    {
      $this->ListRecordersResult = $ListRecordersResult;
      return $this;
    }

}
