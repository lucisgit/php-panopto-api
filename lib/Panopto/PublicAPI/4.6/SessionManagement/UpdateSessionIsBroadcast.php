<?php

namespace Panopto\SessionManagement;

class UpdateSessionIsBroadcast
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
     * @var boolean $isBroadcast
     */
    protected $isBroadcast = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param boolean $isBroadcast
     */
    public function __construct($auth, $sessionId, $isBroadcast)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->isBroadcast = $isBroadcast;
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
     * @return \Panopto\SessionManagement\UpdateSessionIsBroadcast
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
     * @return \Panopto\SessionManagement\UpdateSessionIsBroadcast
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBroadcast()
    {
      return $this->isBroadcast;
    }

    /**
     * @param boolean $isBroadcast
     * @return \Panopto\SessionManagement\UpdateSessionIsBroadcast
     */
    public function setIsBroadcast($isBroadcast)
    {
      $this->isBroadcast = $isBroadcast;
      return $this;
    }

}
