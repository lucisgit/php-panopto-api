<?php

namespace Panopto\AccessManagement;

class GroupAccessDetails
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
     * @var guid $GroupId
     */
    protected $GroupId = null;

    /**
     * @var ArrayOfguid $SessionsWithViewerAccess
     */
    protected $SessionsWithViewerAccess = null;

    /**
     * @var SystemRole $SystemRole
     */
    protected $SystemRole = null;


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
     * @return \Panopto\AccessManagement\GroupAccessDetails
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
     * @return \Panopto\AccessManagement\GroupAccessDetails
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
     * @return \Panopto\AccessManagement\GroupAccessDetails
     */
    public function setFoldersWithViewerAccess($FoldersWithViewerAccess)
    {
      $this->FoldersWithViewerAccess = $FoldersWithViewerAccess;
      return $this;
    }

    /**
     * @return guid
     */
    public function getGroupId()
    {
      return $this->GroupId;
    }

    /**
     * @param guid $GroupId
     * @return \Panopto\AccessManagement\GroupAccessDetails
     */
    public function setGroupId($GroupId)
    {
      $this->GroupId = $GroupId;
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
     * @return \Panopto\AccessManagement\GroupAccessDetails
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
     * @return \Panopto\AccessManagement\GroupAccessDetails
     */
    public function setSystemRole($SystemRole)
    {
      $this->SystemRole = $SystemRole;
      return $this;
    }

}
