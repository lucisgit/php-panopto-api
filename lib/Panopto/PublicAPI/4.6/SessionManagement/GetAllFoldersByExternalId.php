<?php

namespace Panopto\SessionManagement;

class GetAllFoldersByExternalId
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfstring $folderExternalIds
     */
    protected $folderExternalIds = null;

    /**
     * @var ArrayOfstring $providerNames
     */
    protected $providerNames = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfstring $folderExternalIds
     * @param ArrayOfstring $providerNames
     */
    public function __construct($auth, $folderExternalIds, $providerNames)
    {
      $this->auth = $auth;
      $this->folderExternalIds = $folderExternalIds;
      $this->providerNames = $providerNames;
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
     * @return \Panopto\SessionManagement\GetAllFoldersByExternalId
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFolderExternalIds()
    {
      return $this->folderExternalIds;
    }

    /**
     * @param ArrayOfstring $folderExternalIds
     * @return \Panopto\SessionManagement\GetAllFoldersByExternalId
     */
    public function setFolderExternalIds($folderExternalIds)
    {
      $this->folderExternalIds = $folderExternalIds;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getProviderNames()
    {
      return $this->providerNames;
    }

    /**
     * @param ArrayOfstring $providerNames
     * @return \Panopto\SessionManagement\GetAllFoldersByExternalId
     */
    public function setProviderNames($providerNames)
    {
      $this->providerNames = $providerNames;
      return $this;
    }

}
