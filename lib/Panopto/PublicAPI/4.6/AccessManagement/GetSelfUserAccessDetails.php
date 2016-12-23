<?php

namespace Panopto\AccessManagement;

class GetSelfUserAccessDetails
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @param AuthenticationInfo $auth
     */
    public function __construct($auth)
    {
      $this->auth = $auth;
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
     * @return \Panopto\AccessManagement\GetSelfUserAccessDetails
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

}
