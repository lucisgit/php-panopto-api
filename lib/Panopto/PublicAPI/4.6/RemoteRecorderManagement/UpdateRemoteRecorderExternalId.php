<?php

namespace Panopto\RemoteRecorderManagement;

class UpdateRemoteRecorderExternalId
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
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $remoteRecorderId
     * @param string $externalId
     */
    public function __construct($auth, $remoteRecorderId, $externalId)
    {
      $this->auth = $auth;
      $this->remoteRecorderId = $remoteRecorderId;
      $this->externalId = $externalId;
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
     * @return \Panopto\RemoteRecorderManagement\UpdateRemoteRecorderExternalId
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
     * @return \Panopto\RemoteRecorderManagement\UpdateRemoteRecorderExternalId
     */
    public function setRemoteRecorderId($remoteRecorderId)
    {
      $this->remoteRecorderId = $remoteRecorderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Panopto\RemoteRecorderManagement\UpdateRemoteRecorderExternalId
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
