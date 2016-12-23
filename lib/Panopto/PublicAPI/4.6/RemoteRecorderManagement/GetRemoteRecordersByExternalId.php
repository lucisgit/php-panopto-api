<?php

namespace Panopto\RemoteRecorderManagement;

class GetRemoteRecordersByExternalId
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfstring $externalIds
     */
    protected $externalIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfstring $externalIds
     */
    public function __construct($auth, $externalIds)
    {
      $this->auth = $auth;
      $this->externalIds = $externalIds;
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
     * @return \Panopto\RemoteRecorderManagement\GetRemoteRecordersByExternalId
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getExternalIds()
    {
      return $this->externalIds;
    }

    /**
     * @param ArrayOfstring $externalIds
     * @return \Panopto\RemoteRecorderManagement\GetRemoteRecordersByExternalId
     */
    public function setExternalIds($externalIds)
    {
      $this->externalIds = $externalIds;
      return $this;
    }

}
