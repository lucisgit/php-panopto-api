<?php

namespace Panopto\SessionManagement;

class CreateCaptionByRelativeTime
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
     * @var string $text
     */
    protected $text = null;

    /**
     * @var float $timestamp
     */
    protected $timestamp = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param string $text
     * @param float $timestamp
     */
    public function __construct($auth, $sessionId, $text, $timestamp)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->text = $text;
      $this->timestamp = $timestamp;
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
     * @return \Panopto\SessionManagement\CreateCaptionByRelativeTime
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
     * @return \Panopto\SessionManagement\CreateCaptionByRelativeTime
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \Panopto\SessionManagement\CreateCaptionByRelativeTime
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimestamp()
    {
      return $this->timestamp;
    }

    /**
     * @param float $timestamp
     * @return \Panopto\SessionManagement\CreateCaptionByRelativeTime
     */
    public function setTimestamp($timestamp)
    {
      $this->timestamp = $timestamp;
      return $this;
    }

}
