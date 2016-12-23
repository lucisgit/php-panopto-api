<?php

namespace Panopto\RemoteRecorderManagement;

class GetRemoteRecordersByIdResponse
{

    /**
     * @var ArrayOfRemoteRecorder $GetRemoteRecordersByIdResult
     */
    protected $GetRemoteRecordersByIdResult = null;

    /**
     * @param ArrayOfRemoteRecorder $GetRemoteRecordersByIdResult
     */
    public function __construct($GetRemoteRecordersByIdResult)
    {
      $this->GetRemoteRecordersByIdResult = $GetRemoteRecordersByIdResult;
    }

    /**
     * @return ArrayOfRemoteRecorder
     */
    public function getGetRemoteRecordersByIdResult()
    {
      return $this->GetRemoteRecordersByIdResult;
    }

    /**
     * @param ArrayOfRemoteRecorder $GetRemoteRecordersByIdResult
     * @return \Panopto\RemoteRecorderManagement\GetRemoteRecordersByIdResponse
     */
    public function setGetRemoteRecordersByIdResult($GetRemoteRecordersByIdResult)
    {
      $this->GetRemoteRecordersByIdResult = $GetRemoteRecordersByIdResult;
      return $this;
    }

}
