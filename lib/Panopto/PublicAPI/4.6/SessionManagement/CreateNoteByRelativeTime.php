<?php

namespace Panopto\SessionManagement;

class CreateNoteByRelativeTime
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
     * @var string $channel
     */
    protected $channel = null;

    /**
     * @var float $timestamp
     */
    protected $timestamp = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param string $text
     * @param string $channel
     * @param float $timestamp
     */
    public function __construct($auth, $sessionId, $text, $channel, $timestamp)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->text = $text;
      $this->channel = $channel;
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
     * @return \Panopto\SessionManagement\CreateNoteByRelativeTime
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
     * @return \Panopto\SessionManagement\CreateNoteByRelativeTime
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
     * @return \Panopto\SessionManagement\CreateNoteByRelativeTime
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param string $channel
     * @return \Panopto\SessionManagement\CreateNoteByRelativeTime
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
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
     * @return \Panopto\SessionManagement\CreateNoteByRelativeTime
     */
    public function setTimestamp($timestamp)
    {
      $this->timestamp = $timestamp;
      return $this;
    }

}
