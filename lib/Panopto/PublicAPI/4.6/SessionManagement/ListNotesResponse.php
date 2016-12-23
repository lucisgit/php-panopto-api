<?php

namespace Panopto\SessionManagement;

class ListNotesResponse
{

    /**
     * @var ListNotesResponse $ListNotesResult
     */
    protected $ListNotesResult = null;

    /**
     * @param ListNotesResponse $ListNotesResult
     */
    public function __construct($ListNotesResult)
    {
      $this->ListNotesResult = $ListNotesResult;
    }

    /**
     * @return ListNotesResponse
     */
    public function getListNotesResult()
    {
      return $this->ListNotesResult;
    }

    /**
     * @param ListNotesResponse $ListNotesResult
     * @return \Panopto\SessionManagement\ListNotesResponse
     */
    public function setListNotesResult($ListNotesResult)
    {
      $this->ListNotesResult = $ListNotesResult;
      return $this;
    }

}
