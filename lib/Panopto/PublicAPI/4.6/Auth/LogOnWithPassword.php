<?php

namespace Panopto\Auth;

class LogOnWithPassword
{

    /**
     * @var string $userKey
     */
    protected $userKey = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $userKey
     * @param string $password
     */
    public function __construct($userKey, $password)
    {
      $this->userKey = $userKey;
      $this->password = $password;
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
     * @return \Panopto\Auth\LogOnWithPassword
     */
    public function setUserKey($userKey)
    {
      $this->userKey = $userKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Panopto\Auth\LogOnWithPassword
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
