<?php

namespace Panopto\RemoteRecorderManagement;

class GetDefaultFolderForRecorderResponse
{

    /**
     * @var guid $GetDefaultFolderForRecorderResult
     */
    protected $GetDefaultFolderForRecorderResult = null;

    /**
     * @param guid $GetDefaultFolderForRecorderResult
     */
    public function __construct($GetDefaultFolderForRecorderResult)
    {
      $this->GetDefaultFolderForRecorderResult = $GetDefaultFolderForRecorderResult;
    }

    /**
     * @return guid
     */
    public function getGetDefaultFolderForRecorderResult()
    {
      return $this->GetDefaultFolderForRecorderResult;
    }

    /**
     * @param guid $GetDefaultFolderForRecorderResult
     * @return \Panopto\RemoteRecorderManagement\GetDefaultFolderForRecorderResponse
     */
    public function setGetDefaultFolderForRecorderResult($GetDefaultFolderForRecorderResult)
    {
      $this->GetDefaultFolderForRecorderResult = $GetDefaultFolderForRecorderResult;
      return $this;
    }

}
