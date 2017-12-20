<?php

namespace Panopto\AccessManagement;

class UserAccessDetails
{

    /**
     * @var ArrayOfguid $FoldersWithCreatorAccess
     */
    protected $FoldersWithCreatorAccess = null;

    /**
     * @var ArrayOfguid $FoldersWithPublisherAccess
     */
    protected $FoldersWithPublisherAccess = null;

    /**
     * @var ArrayOfguid $FoldersWithViewerAccess
     */
    protected $FoldersWithViewerAccess = null;

    /**
     * @var ArrayOfGroupAccessDetails $GroupMembershipAccess
     */
    protected $GroupMembershipAccess = null;

    /**
     * @var ArrayOfguid $SessionsWithViewerAccess
     */
    protected $SessionsWithViewerAccess = null;

    /**
     * @var SystemRole $SystemRole
     */
    protected $SystemRole = null;

    /**
     * @var guid $UserId
     */
    protected $UserId = null;


    public function __construct()
    {

    }

    /**
     * @return ArrayOfguid
     */
    public function getFoldersWithCreatorAccess()
    {
      return $this->FoldersWithCreatorAccess;
    }

    /**
     * @param ArrayOfguid $FoldersWithCreatorAccess
     * @return \Panopto\AccessManagement\UserAccessDetails
     */
    public function setFoldersWithCreatorAccess($FoldersWithCreatorAccess)
    {
      $this->FoldersWithCreatorAccess = $FoldersWithCreatorAccess;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getFoldersWithPublisherAccess()
    {
      return $this->FoldersWithPublisherAccess;
    }

    /**
     * @param ArrayOfguid $FoldersWithPublisherAccess
     * @return \Panopto\AccessManagement\UserAccessDetails
     */
    public function setFoldersWithPublisherAccess($FoldersWithPublisherAccess)
    {
      $this->FoldersWithPublisherAccess = $FoldersWithPublisherAccess;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getFoldersWithViewerAccess()
    {
      return $this->FoldersWithViewerAccess;
    }

    /**
     * @param ArrayOfguid $FoldersWithViewerAccess
     * @return \Panopto\AccessManagement\UserAccessDetails
     */
    public function setFoldersWithViewerAccess($FoldersWithViewerAccess)
    {
      $this->FoldersWithViewerAccess = $FoldersWithViewerAccess;
      return $this;
    }

    /**
     * @return ArrayOfGroupAccessDetails
     */
    public function getGroupMembershipAccess()
    {
      return $this->GroupMembershipAccess;
    }

    /**
     * @param ArrayOfGroupAccessDetails $GroupMembershipAccess
     * @return \Panopto\AccessManagement\UserAccessDetails
     */
    public function setGroupMembershipAccess($GroupMembershipAccess)
    {
      $this->GroupMembershipAccess = $GroupMembershipAccess;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessionsWithViewerAccess()
    {
      return $this->SessionsWithViewerAccess;
    }

    /**
     * @param ArrayOfguid $SessionsWithViewerAccess
     * @return \Panopto\AccessManagement\UserAccessDetails
     */
    public function setSessionsWithViewerAccess($SessionsWithViewerAccess)
    {
      $this->SessionsWithViewerAccess = $SessionsWithViewerAccess;
      return $this;
    }

    /**
     * @return SystemRole
     */
    public function getSystemRole()
    {
      return $this->SystemRole;
    }

    /**
     * @param SystemRole $SystemRole
     * @return \Panopto\AccessManagement\UserAccessDetails
     */
    public function setSystemRole($SystemRole)
    {
      $this->SystemRole = $SystemRole;
      return $this;
    }

    /**
     * @return guid
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param guid $UserId
     * @return \Panopto\AccessManagement\UserAccessDetails
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

}
