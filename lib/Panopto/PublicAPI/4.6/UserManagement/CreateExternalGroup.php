<?php

namespace Panopto\UserManagement;

class CreateExternalGroup
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @var string $externalProvider
     */
    protected $externalProvider = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var ArrayOfguid $memberIds
     */
    protected $memberIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $groupName
     * @param string $externalProvider
     * @param string $externalId
     * @param ArrayOfguid $memberIds
     */
    public function __construct($auth, $groupName, $externalProvider, $externalId, $memberIds)
    {
      $this->auth = $auth;
      $this->groupName = $groupName;
      $this->externalProvider = $externalProvider;
      $this->externalId = $externalId;
      $this->memberIds = $memberIds;
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
     * @return \Panopto\UserManagement\CreateExternalGroup
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->groupName;
    }

    /**
     * @param string $groupName
     * @return \Panopto\UserManagement\CreateExternalGroup
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalProvider()
    {
      return $this->externalProvider;
    }

    /**
     * @param string $externalProvider
     * @return \Panopto\UserManagement\CreateExternalGroup
     */
    public function setExternalProvider($externalProvider)
    {
      $this->externalProvider = $externalProvider;
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
     * @return \Panopto\UserManagement\CreateExternalGroup
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getMemberIds()
    {
      return $this->memberIds;
    }

    /**
     * @param ArrayOfguid $memberIds
     * @return \Panopto\UserManagement\CreateExternalGroup
     */
    public function setMemberIds($memberIds)
    {
      $this->memberIds = $memberIds;
      return $this;
    }

}
