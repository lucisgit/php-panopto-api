<?php

namespace Panopto\SessionManagement;

class SetCopiedExternalCourseAccessForRoles
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
     * @var ArrayOfAccessRole $roles
     */
    protected $roles = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $name
     * @param string $externalId
     * @param ArrayOfguid $folderIds
     * @param ArrayOfAccessRole $roles
     */
    public function __construct($auth, $name, $externalId, $folderIds, $roles)
    {
      $this->auth = $auth;
      $this->name = $name;
      $this->externalId = $externalId;
      $this->folderIds = $folderIds;
      $this->roles = $roles;
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
     * @return \Panopto\SessionManagement\SetCopiedExternalCourseAccessForRoles
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
     * @return \Panopto\SessionManagement\SetCopiedExternalCourseAccessForRoles
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
     * @return \Panopto\SessionManagement\SetCopiedExternalCourseAccessForRoles
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
     * @return \Panopto\SessionManagement\SetCopiedExternalCourseAccessForRoles
     */
    public function setFolderIds($folderIds)
    {
      $this->folderIds = $folderIds;
      return $this;
    }

    /**
     * @return ArrayOfAccessRole
     */
    public function getRoles()
    {
      return $this->roles;
    }

    /**
     * @param ArrayOfAccessRole $roles
     * @return \Panopto\SessionManagement\SetCopiedExternalCourseAccessForRoles
     */
    public function setRoles($roles)
    {
      $this->roles = $roles;
      return $this;
    }

}
