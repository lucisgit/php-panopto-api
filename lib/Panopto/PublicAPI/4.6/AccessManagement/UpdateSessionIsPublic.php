<?php

namespace Panopto\AccessManagement;

class UpdateSessionIsPublic
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
     * @var boolean $isPublic
     */
    protected $isPublic = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param boolean $isPublic
     */
    public function __construct($auth, $sessionId, $isPublic)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->isPublic = $isPublic;
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
     * @return \Panopto\AccessManagement\UpdateSessionIsPublic
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
     * @return \Panopto\AccessManagement\UpdateSessionIsPublic
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param boolean $isPublic
     * @return \Panopto\AccessManagement\UpdateSessionIsPublic
     */
    public function setIsPublic($isPublic)
    {
      $this->isPublic = $isPublic;
      return $this;
    }

}
