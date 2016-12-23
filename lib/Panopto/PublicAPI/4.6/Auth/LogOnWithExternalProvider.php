<?php

namespace Panopto\Auth;

class LogOnWithExternalProvider
{

    /**
     * @var string $userKey
     */
    protected $userKey = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @param string $userKey
     * @param string $authCode
     */
    public function __construct($userKey, $authCode)
    {
      $this->userKey = $userKey;
      $this->authCode = $authCode;
    }

    /**
     * @return string
     */
    public function getUserKey()
    {
      return $this->userKey;
    }

    /**
     * @param string $userKey
     * @return \Panopto\Auth\LogOnWithExternalProvider
     */
    public function setUserKey($userKey)
    {
      $this->userKey = $userKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return \Panopto\Auth\LogOnWithExternalProvider
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

}
