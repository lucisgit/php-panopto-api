<?php

namespace Panopto\SessionManagement;

class RecorderDownloadUrlResponse
{

    /**
     * @var string $MacRecorderDownloadUrl
     */
    protected $MacRecorderDownloadUrl = null;

    /**
     * @var string $WindowsRecorderDownloadUrl
     */
    protected $WindowsRecorderDownloadUrl = null;

    /**
     * @var string $WindowsRemoteRecorderDownloadUrl
     */
    protected $WindowsRemoteRecorderDownloadUrl = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getMacRecorderDownloadUrl()
    {
      return $this->MacRecorderDownloadUrl;
    }

    /**
     * @param string $MacRecorderDownloadUrl
     * @return \Panopto\SessionManagement\RecorderDownloadUrlResponse
     */
    public function setMacRecorderDownloadUrl($MacRecorderDownloadUrl)
    {
      $this->MacRecorderDownloadUrl = $MacRecorderDownloadUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getWindowsRecorderDownloadUrl()
    {
      return $this->WindowsRecorderDownloadUrl;
    }

    /**
     * @param string $WindowsRecorderDownloadUrl
     * @return \Panopto\SessionManagement\RecorderDownloadUrlResponse
     */
    public function setWindowsRecorderDownloadUrl($WindowsRecorderDownloadUrl)
    {
      $this->WindowsRecorderDownloadUrl = $WindowsRecorderDownloadUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getWindowsRemoteRecorderDownloadUrl()
    {
      return $this->WindowsRemoteRecorderDownloadUrl;
    }

    /**
     * @param string $WindowsRemoteRecorderDownloadUrl
     * @return \Panopto\SessionManagement\RecorderDownloadUrlResponse
     */
    public function setWindowsRemoteRecorderDownloadUrl($WindowsRemoteRecorderDownloadUrl)
    {
      $this->WindowsRemoteRecorderDownloadUrl = $WindowsRemoteRecorderDownloadUrl;
      return $this;
    }

}
