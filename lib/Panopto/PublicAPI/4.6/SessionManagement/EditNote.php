<?php

namespace Panopto\SessionManagement;

class EditNote
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
     * @var string $newText
     */
    protected $newText = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $noteId
     * @param guid $sessionId
     * @param string $newText
     */
    public function __construct($auth, $noteId, $sessionId, $newText)
    {
      $this->auth = $auth;
      $this->noteId = $noteId;
      $this->sessionId = $sessionId;
      $this->newText = $newText;
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
     * @return \Panopto\SessionManagement\EditNote
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
     * @return \Panopto\SessionManagement\EditNote
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
     * @return \Panopto\SessionManagement\EditNote
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewText()
    {
      return $this->newText;
    }

    /**
     * @param string $newText
     * @return \Panopto\SessionManagement\EditNote
     */
    public function setNewText($newText)
    {
      $this->newText = $newText;
      return $this;
    }

}
