<?php

namespace Panopto\SessionManagement;

class SetExternalCourseAccess
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var ArrayOfguid $folderIds
     */
    protected $folderIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $name
     * @param string $externalId
     * @param ArrayOfguid $folderIds
     */
    public function __construct($auth, $name, $externalId, $folderIds)
    {
      $this->auth = $auth;
      $this->name = $name;
      $this->externalId = $externalId;
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
     * @return \Panopto\SessionManagement\SetExternalCourseAccess
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Panopto\SessionManagement\SetExternalCourseAccess
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Panopto\SessionManagement\SetExternalCourseAccess
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
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
     * @return \Panopto\SessionManagement\SetExternalCourseAccess
     */
    public function setFolderIds($folderIds)
    {
      $this->folderIds = $folderIds;
      return $this;
    }

}
