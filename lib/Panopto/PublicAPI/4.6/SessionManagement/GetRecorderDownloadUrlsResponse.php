<?php

namespace Panopto\SessionManagement;

class GetRecorderDownloadUrlsResponse
{

    /**
     * @var RecorderDownloadUrlResponse $GetRecorderDownloadUrlsResult
     */
    protected $GetRecorderDownloadUrlsResult = null;

    /**
     * @param RecorderDownloadUrlResponse $GetRecorderDownloadUrlsResult
     */
    public function __construct($GetRecorderDownloadUrlsResult)
    {
      $this->GetRecorderDownloadUrlsResult = $GetRecorderDownloadUrlsResult;
    }

    /**
     * @return RecorderDownloadUrlResponse
     */
    public function getGetRecorderDownloadUrlsResult()
    {
      return $this->GetRecorderDownloadUrlsResult;
    }

    /**
     * @param RecorderDownloadUrlResponse $GetRecorderDownloadUrlsResult
     * @return \Panopto\SessionManagement\GetRecorderDownloadUrlsResponse
     */
    public function setGetRecorderDownloadUrlsResult($GetRecorderDownloadUrlsResult)
    {
      $this->GetRecorderDownloadUrlsResult = $GetRecorderDownloadUrlsResult;
      return $this;
    }

}
