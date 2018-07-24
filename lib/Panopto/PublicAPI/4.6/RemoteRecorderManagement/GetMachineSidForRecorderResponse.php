<?php

namespace Panopto\RemoteRecorderManagement;

class GetMachineSidForRecorderResponse
{

    /**
     * @var string $GetMachineSidForRecorderResult
     */
    protected $GetMachineSidForRecorderResult = null;

    /**
     * @param string $GetMachineSidForRecorderResult
     */
    public function __construct($GetMachineSidForRecorderResult)
    {
      $this->GetMachineSidForRecorderResult = $GetMachineSidForRecorderResult;
    }

    /**
     * @return string
     */
    public function getGetMachineSidForRecorderResult()
    {
      return $this->GetMachineSidForRecorderResult;
    }

    /**
     * @param string $GetMachineSidForRecorderResult
     * @return \Panopto\RemoteRecorderManagement\GetMachineSidForRecorderResponse
     */
    public function setGetMachineSidForRecorderResult($GetMachineSidForRecorderResult)
    {
      $this->GetMachineSidForRecorderResult = $GetMachineSidForRecorderResult;
      return $this;
    }

}
