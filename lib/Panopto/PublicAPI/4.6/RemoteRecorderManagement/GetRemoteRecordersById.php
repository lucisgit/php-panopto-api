<?php

namespace Panopto\RemoteRecorderManagement;

class GetRemoteRecordersById
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $remoteRecorderIds
     */
    protected $remoteRecorderIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $remoteRecorderIds
     */
    public function __construct($auth, $remoteRecorderIds)
    {
      $this->auth = $auth;
      $this->remoteRecorderIds = $remoteRecorderIds;
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
     * @return \Panopto\RemoteRecorderManagement\GetRemoteRecordersById
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getRemoteRecorderIds()
    {
      return $this->remoteRecorderIds;
    }

    /**
     * @param ArrayOfguid $remoteRecorderIds
     * @return \Panopto\RemoteRecorderManagement\GetRemoteRecordersById
     */
    public function setRemoteRecorderIds($remoteRecorderIds)
    {
      $this->remoteRecorderIds = $remoteRecorderIds;
      return $this;
    }

}
