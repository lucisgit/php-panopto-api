<?php

namespace Panopto\SessionManagement;

class UpdateSessionOwner
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $sessionIds
     */
    protected $sessionIds = null;

    /**
     * @var string $newOwnerUserKey
     */
    protected $newOwnerUserKey = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $sessionIds
     * @param string $newOwnerUserKey
     */
    public function __construct($auth, $sessionIds, $newOwnerUserKey)
    {
      $this->auth = $auth;
      $this->sessionIds = $sessionIds;
      $this->newOwnerUserKey = $newOwnerUserKey;
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
     * @return \Panopto\SessionManagement\UpdateSessionOwner
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessionIds()
    {
      return $this->sessionIds;
    }

    /**
     * @param ArrayOfguid $sessionIds
     * @return \Panopto\SessionManagement\UpdateSessionOwner
     */
    public function setSessionIds($sessionIds)
    {
      $this->sessionIds = $sessionIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewOwnerUserKey()
    {
      return $this->newOwnerUserKey;
    }

    /**
     * @param string $newOwnerUserKey
     * @return \Panopto\SessionManagement\UpdateSessionOwner
     */
    public function setNewOwnerUserKey($newOwnerUserKey)
    {
      $this->newOwnerUserKey = $newOwnerUserKey;
      return $this;
    }

}
