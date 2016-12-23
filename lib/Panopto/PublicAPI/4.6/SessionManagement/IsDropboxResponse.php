<?php

namespace Panopto\SessionManagement;

class IsDropboxResponse
{

    /**
     * @var boolean $IsDropboxResult
     */
    protected $IsDropboxResult = null;

    /**
     * @param boolean $IsDropboxResult
     */
    public function __construct($IsDropboxResult)
    {
      $this->IsDropboxResult = $IsDropboxResult;
    }

    /**
     * @return boolean
     */
    public function getIsDropboxResult()
    {
      return $this->IsDropboxResult;
    }

    /**
     * @param boolean $IsDropboxResult
     * @return \Panopto\SessionManagement\IsDropboxResponse
     */
    public function setIsDropboxResult($IsDropboxResult)
    {
      $this->IsDropboxResult = $IsDropboxResult;
      return $this;
    }

}
