<?php

namespace Panopto\SessionManagement;

class DeleteFolders
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $folderIds
     */
    protected $folderIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $folderIds
     */
    public function __construct($auth, $folderIds)
    {
      $this->auth = $auth;
      $this->folderIds = $folderIds;
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
     * @return \Panopto\SessionManagement\DeleteFolders
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getFolderIds()
    {
      return $this->folderIds;
    }

    /**
     * @param ArrayOfguid $folderIds
     * @return \Panopto\SessionManagement\DeleteFolders
     */
    public function setFolderIds($folderIds)
    {
      $this->folderIds = $folderIds;
      return $this;
    }

}
