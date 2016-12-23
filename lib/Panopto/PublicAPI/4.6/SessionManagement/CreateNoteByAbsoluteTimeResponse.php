<?php

namespace Panopto\SessionManagement;

class CreateNoteByAbsoluteTimeResponse
{

    /**
     * @var guid $CreateNoteByAbsoluteTimeResult
     */
    protected $CreateNoteByAbsoluteTimeResult = null;

    /**
     * @param guid $CreateNoteByAbsoluteTimeResult
     */
    public function __construct($CreateNoteByAbsoluteTimeResult)
    {
      $this->CreateNoteByAbsoluteTimeResult = $CreateNoteByAbsoluteTimeResult;
    }

    /**
     * @return guid
     */
    public function getCreateNoteByAbsoluteTimeResult()
    {
      return $this->CreateNoteByAbsoluteTimeResult;
    }

    /**
     * @param guid $CreateNoteByAbsoluteTimeResult
     * @return \Panopto\SessionManagement\CreateNoteByAbsoluteTimeResponse
     */
    public function setCreateNoteByAbsoluteTimeResult($CreateNoteByAbsoluteTimeResult)
    {
      $this->CreateNoteByAbsoluteTimeResult = $CreateNoteByAbsoluteTimeResult;
      return $this;
    }

}
