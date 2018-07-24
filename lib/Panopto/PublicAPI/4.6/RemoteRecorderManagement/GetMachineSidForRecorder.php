<?php

namespace Panopto\RemoteRecorderManagement;

class GetMachineSidForRecorder
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $remoteRecorderId
     */
    protected $remoteRecorderId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $remoteRecorderId
     */
    public function __construct($auth, $remoteRecorderId)
    {
      $this->auth = $auth;
      $this->remoteRecorderId = $remoteRecorderId;
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
     * @return \Panopto\RemoteRecorderManagement\GetMachineSidForRecorder
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getRemoteRecorderId()
    {
      return $this->remoteRecorderId;
    }

    /**
     * @param guid $remoteRecorderId
     * @return \Panopto\RemoteRecorderManagement\GetMachineSidForRecorder
     */
    public function setRemoteRecorderId($remoteRecorderId)
    {
      $this->remoteRecorderId = $remoteRecorderId;
      return $this;
    }

}
