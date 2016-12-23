<?php

namespace Panopto\SessionManagement;

class UpdateSessionDescription
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param string $description
     */
    public function __construct($auth, $sessionId, $description)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->description = $description;
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
     * @return \Panopto\SessionManagement\UpdateSessionDescription
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
     * @return \Panopto\SessionManagement\UpdateSessionDescription
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Panopto\SessionManagement\UpdateSessionDescription
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
