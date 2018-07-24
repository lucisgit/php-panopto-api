<?php

namespace Panopto\SessionManagement;

class UpdateSessionUpdateRTMPStreamTypes
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfstring $streamKeys
     */
    protected $streamKeys = null;

    /**
     * @var boolean $setAsPrimaries
     */
    protected $setAsPrimaries = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param ArrayOfstring $streamKeys
     * @param boolean $setAsPrimaries
     */
    public function __construct($auth, $sessionId, $streamKeys, $setAsPrimaries)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->streamKeys = $streamKeys;
      $this->setAsPrimaries = $setAsPrimaries;
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
     * @return \Panopto\SessionManagement\UpdateSessionUpdateRTMPStreamTypes
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param guid $sessionId
     * @return \Panopto\SessionManagement\UpdateSessionUpdateRTMPStreamTypes
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getStreamKeys()
    {
      return $this->streamKeys;
    }

    /**
     * @param ArrayOfstring $streamKeys
     * @return \Panopto\SessionManagement\UpdateSessionUpdateRTMPStreamTypes
     */
    public function setStreamKeys($streamKeys)
    {
      $this->streamKeys = $streamKeys;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSetAsPrimaries()
    {
      return $this->setAsPrimaries;
    }

    /**
     * @param boolean $setAsPrimaries
     * @return \Panopto\SessionManagement\UpdateSessionUpdateRTMPStreamTypes
     */
    public function setSetAsPrimaries($setAsPrimaries)
    {
      $this->setAsPrimaries = $setAsPrimaries;
      return $this;
    }

}
