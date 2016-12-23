<?php

namespace Panopto\SessionManagement;

class GetNote
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $noteId
     */
    protected $noteId = null;

    /**
     * @var guid $sessionId
     */
    protected $sessionId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $noteId
     * @param guid $sessionId
     */
    public function __construct($auth, $noteId, $sessionId)
    {
      $this->auth = $auth;
      $this->noteId = $noteId;
      $this->sessionId = $sessionId;
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
     * @return \Panopto\SessionManagement\GetNote
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getNoteId()
    {
      return $this->noteId;
    }

    /**
     * @param guid $noteId
     * @return \Panopto\SessionManagement\GetNote
     */
    public function setNoteId($noteId)
    {
      $this->noteId = $noteId;
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
     * @return \Panopto\SessionManagement\GetNote
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

}
