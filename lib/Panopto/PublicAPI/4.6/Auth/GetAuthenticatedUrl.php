<?php

namespace Panopto\Auth;

class GetAuthenticatedUrl
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $targetUrl
     */
    protected $targetUrl = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $targetUrl
     */
    public function __construct($auth, $targetUrl)
    {
      $this->auth = $auth;
      $this->targetUrl = $targetUrl;
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
     * @return \Panopto\Auth\GetAuthenticatedUrl
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetUrl()
    {
      return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     * @return \Panopto\Auth\GetAuthenticatedUrl
     */
    public function setTargetUrl($targetUrl)
    {
      $this->targetUrl = $targetUrl;
      return $this;
    }

}
