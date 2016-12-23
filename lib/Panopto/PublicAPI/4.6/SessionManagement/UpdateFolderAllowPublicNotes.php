<?php

namespace Panopto\SessionManagement;

class UpdateFolderAllowPublicNotes
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $folderId
     */
    protected $folderId = null;

    /**
     * @var boolean $allowPublicNotes
     */
    protected $allowPublicNotes = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param boolean $allowPublicNotes
     */
    public function __construct($auth, $folderId, $allowPublicNotes)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->allowPublicNotes = $allowPublicNotes;
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
     * @return \Panopto\SessionManagement\UpdateFolderAllowPublicNotes
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getFolderId()
    {
      return $this->folderId;
    }

    /**
     * @param guid $folderId
     * @return \Panopto\SessionManagement\UpdateFolderAllowPublicNotes
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowPublicNotes()
    {
      return $this->allowPublicNotes;
    }

    /**
     * @param boolean $allowPublicNotes
     * @return \Panopto\SessionManagement\UpdateFolderAllowPublicNotes
     */
    public function setAllowPublicNotes($allowPublicNotes)
    {
      $this->allowPublicNotes = $allowPublicNotes;
      return $this;
    }

}
