<?php

namespace Panopto\SessionManagement;

class UpdateSessionName
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
     * @var string $name
     */
    protected $name = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param string $name
     */
    public function __construct($auth, $sessionId, $name)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->name = $name;
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
     * @return \Panopto\SessionManagement\UpdateSessionName
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
     * @return \Panopto\SessionManagement\UpdateSessionName
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Panopto\SessionManagement\UpdateSessionName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
