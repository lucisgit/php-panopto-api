<?php

namespace Panopto\AccessManagement;

class FolderAccessDetails
{

    /**
     * @var guid $FolderId
     */
    protected $FolderId = null;

    /**
     * @var ArrayOfguid $GroupsWithCreatorAccess
     */
    protected $GroupsWithCreatorAccess = null;

    /**
     * @var ArrayOfguid $GroupsWithPublisherAccess
     */
    protected $GroupsWithPublisherAccess = null;

    /**
     * @var ArrayOfguid $GroupsWithViewerAccess
     */
    protected $GroupsWithViewerAccess = null;

    /**
     * @var boolean $IsPublic
     */
    protected $IsPublic = null;

    /**
     * @var ArrayOfguid $UsersWithCreatorAccess
     */
    protected $UsersWithCreatorAccess = null;

    /**
     * @var ArrayOfguid $UsersWithPublisherAccess
     */
    protected $UsersWithPublisherAccess = null;

    /**
     * @var ArrayOfguid $UsersWithViewerAccess
     */
    protected $UsersWithViewerAccess = null;


    public function __construct()
    {

    }

    /**
     * @return guid
     */
    public function getFolderId()
    {
      return $this->FolderId;
    }

    /**
     * @param guid $FolderId
     * @return \Panopto\AccessManagement\FolderAccessDetails
     */
    public function setFolderId($FolderId)
    {
      $this->FolderId = $FolderId;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getGroupsWithCreatorAccess()
    {
      return $this->GroupsWithCreatorAccess;
    }

    /**
     * @param ArrayOfguid $GroupsWithCreatorAccess
     * @return \Panopto\AccessManagement\FolderAccessDetails
     */
    public function setGroupsWithCreatorAccess($GroupsWithCreatorAccess)
    {
      $this->GroupsWithCreatorAccess = $GroupsWithCreatorAccess;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getGroupsWithPublisherAccess()
    {
      return $this->GroupsWithPublisherAccess;
    }

    /**
     * @param ArrayOfguid $GroupsWithPublisherAccess
     * @return \Panopto\AccessManagement\FolderAccessDetails
     */
    public function setGroupsWithPublisherAccess($GroupsWithPublisherAccess)
    {
      $this->GroupsWithPublisherAccess = $GroupsWithPublisherAccess;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getGroupsWithViewerAccess()
    {
      return $this->GroupsWithViewerAccess;
    }

    /**
     * @param ArrayOfguid $GroupsWithViewerAccess
     * @return \Panopto\AccessManagement\FolderAccessDetails
     */
    public function setGroupsWithViewerAccess($GroupsWithViewerAccess)
    {
      $this->GroupsWithViewerAccess = $GroupsWithViewerAccess;
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
     * @return \Panopto\AccessManagement\FolderAccessDetails
     */
    public function setIsPublic($IsPublic)
    {
      $this->IsPublic = $IsPublic;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getUsersWithCreatorAccess()
    {
      return $this->UsersWithCreatorAccess;
    }

    /**
     * @param ArrayOfguid $UsersWithCreatorAccess
     * @return \Panopto\AccessManagement\FolderAccessDetails
     */
    public function setUsersWithCreatorAccess($UsersWithCreatorAccess)
    {
      $this->UsersWithCreatorAccess = $UsersWithCreatorAccess;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getUsersWithPublisherAccess()
    {
      return $this->UsersWithPublisherAccess;
    }

    /**
     * @param ArrayOfguid $UsersWithPublisherAccess
     * @return \Panopto\AccessManagement\FolderAccessDetails
     */
    public function setUsersWithPublisherAccess($UsersWithPublisherAccess)
    {
      $this->UsersWithPublisherAccess = $UsersWithPublisherAccess;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getUsersWithViewerAccess()
    {
      return $this->UsersWithViewerAccess;
    }

    /**
     * @param ArrayOfguid $UsersWithViewerAccess
     * @return \Panopto\AccessManagement\FolderAccessDetails
     */
    public function setUsersWithViewerAccess($UsersWithViewerAccess)
    {
      $this->UsersWithViewerAccess = $UsersWithViewerAccess;
      return $this;
    }

}
