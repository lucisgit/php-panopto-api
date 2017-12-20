<?php

namespace Panopto\Auth;

class ReportIntegrationInfo
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $idProviderName
     */
    protected $idProviderName = null;

    /**
     * @var string $moduleVersion
     */
    protected $moduleVersion = null;

    /**
     * @var string $targetPlatformVersion
     */
    protected $targetPlatformVersion = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $idProviderName
     * @param string $moduleVersion
     * @param string $targetPlatformVersion
     */
    public function __construct($auth, $idProviderName, $moduleVersion, $targetPlatformVersion)
    {
      $this->auth = $auth;
      $this->idProviderName = $idProviderName;
      $this->moduleVersion = $moduleVersion;
      $this->targetPlatformVersion = $targetPlatformVersion;
    }

    /**
     * @return AuthenticationInfo
     */
    public function getAuth()
    {
      return $this->auth;
    }

    /**
     * @param AuthenticationInfo $auth
     * @return \Panopto\Auth\ReportIntegrationInfo
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdProviderName()
    {
      return $this->idProviderName;
    }

    /**
     * @param string $idProviderName
     * @return \Panopto\Auth\ReportIntegrationInfo
     */
    public function setIdProviderName($idProviderName)
    {
      $this->idProviderName = $idProviderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getModuleVersion()
    {
      return $this->moduleVersion;
    }

    /**
     * @param string $moduleVersion
     * @return \Panopto\Auth\ReportIntegrationInfo
     */
    public function setModuleVersion($moduleVersion)
    {
      $this->moduleVersion = $moduleVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetPlatformVersion()
    {
      return $this->targetPlatformVersion;
    }

    /**
     * @param string $targetPlatformVersion
     * @return \Panopto\Auth\ReportIntegrationInfo
     */
    public function setTargetPlatformVersion($targetPlatformVersion)
    {
      $this->targetPlatformVersion = $targetPlatformVersion;
      return $this;
    }

}
