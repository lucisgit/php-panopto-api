<?php

namespace Panopto\SessionManagement;

class AddSessionResponse
{

    /**
     * @var Session $AddSessionResult
     */
    protected $AddSessionResult = null;

    /**
     * @param Session $AddSessionResult
     */
    public function __construct($AddSessionResult)
    {
      $this->AddSessionResult = $AddSessionResult;
    }

    /**
     * @return Session
     */
    public function getAddSessionResult()
    {
      return $this->AddSessionResult;
    }

    /**
     * @param Session $AddSessionResult
     * @return \Panopto\SessionManagement\AddSessionResponse
     */
    public function setAddSessionResult($AddSessionResult)
    {
      $this->AddSessionResult = $AddSessionResult;
      return $this;
    }

}
