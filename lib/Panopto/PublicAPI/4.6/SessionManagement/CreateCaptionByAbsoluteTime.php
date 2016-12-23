<?php

namespace Panopto\SessionManagement;

class CreateCaptionByAbsoluteTime
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
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param string $text
     * @param \DateTime $timestamp
     */
    public function __construct($auth, $sessionId, $text, \DateTime $timestamp)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->text = $text;
      $this->timestamp = $timestamp->format(\DateTime::ATOM);
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
     * @return \Panopto\SessionManagement\CreateCaptionByAbsoluteTime
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
     * @return \Panopto\SessionManagement\CreateCaptionByAbsoluteTime
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
     * @return \Panopto\SessionManagement\CreateCaptionByAbsoluteTime
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timestamp
     * @return \Panopto\SessionManagement\CreateCaptionByAbsoluteTime
     */
    public function setTimestamp(\DateTime $timestamp)
    {
      $this->timestamp = $timestamp->format(\DateTime::ATOM);
      return $this;
    }

}
