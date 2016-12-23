<?php

namespace Panopto\AccessManagement;

class UpdateSessionInheritViewerAccess
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
     * @var boolean $inheritViewerAccess
     */
    protected $inheritViewerAccess = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param boolean $inheritViewerAccess
     */
    public function __construct($auth, $sessionId, $inheritViewerAccess)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->inheritViewerAccess = $inheritViewerAccess;
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
     * @return \Panopto\AccessManagement\UpdateSessionInheritViewerAccess
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
     * @return \Panopto\AccessManagement\UpdateSessionInheritViewerAccess
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritViewerAccess()
    {
      return $this->inheritViewerAccess;
    }

    /**
     * @param boolean $inheritViewerAccess
     * @return \Panopto\AccessManagement\UpdateSessionInheritViewerAccess
     */
    public function setInheritViewerAccess($inheritViewerAccess)
    {
      $this->inheritViewerAccess = $inheritViewerAccess;
      return $this;
    }

}
