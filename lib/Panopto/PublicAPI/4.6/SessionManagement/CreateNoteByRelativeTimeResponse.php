<?php

namespace Panopto\SessionManagement;

class CreateNoteByRelativeTimeResponse
{

    /**
     * @var guid $CreateNoteByRelativeTimeResult
     */
    protected $CreateNoteByRelativeTimeResult = null;

    /**
     * @param guid $CreateNoteByRelativeTimeResult
     */
    public function __construct($CreateNoteByRelativeTimeResult)
    {
      $this->CreateNoteByRelativeTimeResult = $CreateNoteByRelativeTimeResult;
    }

    /**
     * @return guid
     */
    public function getCreateNoteByRelativeTimeResult()
    {
      return $this->CreateNoteByRelativeTimeResult;
    }

    /**
     * @param guid $CreateNoteByRelativeTimeResult
     * @return \Panopto\SessionManagement\CreateNoteByRelativeTimeResponse
     */
    public function setCreateNoteByRelativeTimeResult($CreateNoteByRelativeTimeResult)
    {
      $this->CreateNoteByRelativeTimeResult = $CreateNoteByRelativeTimeResult;
      return $this;
    }

}
