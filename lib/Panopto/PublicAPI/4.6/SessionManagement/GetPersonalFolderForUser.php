<?php

namespace Panopto\SessionManagement;

class GetPersonalFolderForUser
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $userId
     */
    protected $userId = null;

    /**
     * @var boolean $allowCreation
     */
    protected $allowCreation = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $userId
     * @param boolean $allowCreation
     */
    public function __construct($auth, $userId, $allowCreation)
    {
      $this->auth = $auth;
      $this->userId = $userId;
      $this->allowCreation = $allowCreation;
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
     * @return \Panopto\SessionManagement\GetPersonalFolderForUser
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param guid $userId
     * @return \Panopto\SessionManagement\GetPersonalFolderForUser
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowCreation()
    {
      return $this->allowCreation;
    }

    /**
     * @param boolean $allowCreation
     * @return \Panopto\SessionManagement\GetPersonalFolderForUser
     */
    public function setAllowCreation($allowCreation)
    {
      $this->allowCreation = $allowCreation;
      return $this;
    }

}
