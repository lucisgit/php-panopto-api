<?php

namespace Panopto\SessionManagement;

class UpdateSessionCreateRTMPStreams
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
     * @var int $countToAdd
     */
    protected $countToAdd = null;

    /**
     * @var boolean $arePrimaries
     */
    protected $arePrimaries = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param int $countToAdd
     * @param boolean $arePrimaries
     */
    public function __construct($auth, $sessionId, $countToAdd, $arePrimaries)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->countToAdd = $countToAdd;
      $this->arePrimaries = $arePrimaries;
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
     * @return \Panopto\SessionManagement\UpdateSessionCreateRTMPStreams
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
     * @return \Panopto\SessionManagement\UpdateSessionCreateRTMPStreams
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountToAdd()
    {
      return $this->countToAdd;
    }

    /**
     * @param int $countToAdd
     * @return \Panopto\SessionManagement\UpdateSessionCreateRTMPStreams
     */
    public function setCountToAdd($countToAdd)
    {
      $this->countToAdd = $countToAdd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getArePrimaries()
    {
      return $this->arePrimaries;
    }

    /**
     * @param boolean $arePrimaries
     * @return \Panopto\SessionManagement\UpdateSessionCreateRTMPStreams
     */
    public function setArePrimaries($arePrimaries)
    {
      $this->arePrimaries = $arePrimaries;
      return $this;
    }

}
