<?php

namespace Panopto\AccessManagement;

class SessionAccessDetails
{

    /**
     * @var FolderAccessDetails $FolderAccess
     */
    protected $FolderAccess = null;

    /**
     * @var ArrayOfguid $GroupsWithDirectViewerAccess
     */
    protected $GroupsWithDirectViewerAccess = null;

    /**
     * @var boolean $InheritViewerAccess
     */
    protected $InheritViewerAccess = null;

    /**
     * @var boolean $IsPublic
     */
    protected $IsPublic = null;

    /**
     * @var guid $SessionId
     */
    protected $SessionId = null;

    /**
     * @var ArrayOfguid $UsersWithDirectViewerAccess
     */
    protected $UsersWithDirectViewerAccess = null;


    public function __construct()
    {

    }

    /**
     * @return FolderAccessDetails
     */
    public function getFolderAccess()
    {
      return $this->FolderAccess;
    }

    /**
     * @param FolderAccessDetails $FolderAccess
     * @return \Panopto\AccessManagement\SessionAccessDetails
     */
    public function setFolderAccess($FolderAccess)
    {
      $this->FolderAccess = $FolderAccess;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getGroupsWithDirectViewerAccess()
    {
      return $this->GroupsWithDirectViewerAccess;
    }

    /**
     * @param ArrayOfguid $GroupsWithDirectViewerAccess
     * @return \Panopto\AccessManagement\SessionAccessDetails
     */
    public function setGroupsWithDirectViewerAccess($GroupsWithDirectViewerAccess)
    {
      $this->GroupsWithDirectViewerAccess = $GroupsWithDirectViewerAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritViewerAccess()
    {
      return $this->InheritViewerAccess;
    }

    /**
     * @param boolean $InheritViewerAccess
     * @return \Panopto\AccessManagement\SessionAccessDetails
     */
    public function setInheritViewerAccess($InheritViewerAccess)
    {
      $this->InheritViewerAccess = $InheritViewerAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
      return $this->IsPublic;
    }

    /**
     * @param boolean $IsPublic
     * @return \Panopto\AccessManagement\SessionAccessDetails
     */
    public function setIsPublic($IsPublic)
    {
      $this->IsPublic = $IsPublic;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param guid $SessionId
     * @return \Panopto\AccessManagement\SessionAccessDetails
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getUsersWithDirectViewerAccess()
    {
      return $this->UsersWithDirectViewerAccess;
    }

    /**
     * @param ArrayOfguid $UsersWithDirectViewerAccess
     * @return \Panopto\AccessManagement\SessionAccessDetails
     */
    public function setUsersWithDirectViewerAccess($UsersWithDirectViewerAccess)
    {
      $this->UsersWithDirectViewerAccess = $UsersWithDirectViewerAccess;
      return $this;
    }

}
