<?php

namespace Panopto\Auth;

class LogOnWithPasswordResponse
{

    /**
     * @var boolean $LogOnWithPasswordResult
     */
    protected $LogOnWithPasswordResult = null;

    /**
     * @param boolean $LogOnWithPasswordResult
     */
    public function __construct($LogOnWithPasswordResult)
    {
      $this->LogOnWithPasswordResult = $LogOnWithPasswordResult;
    }

    /**
     * @return boolean
     */
    public function getLogOnWithPasswordResult()
    {
      return $this->LogOnWithPasswordResult;
    }

    /**
     * @param boolean $LogOnWithPasswordResult
     * @return \Panopto\Auth\LogOnWithPasswordResponse
     */
    public function setLogOnWithPasswordResult($LogOnWithPasswordResult)
    {
      $this->LogOnWithPasswordResult = $LogOnWithPasswordResult;
      return $this;
    }

}
