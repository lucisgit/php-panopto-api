<?php

namespace Panopto\UserManagement;

class RemoveMembersFromExternalGroup
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $externalProviderName
     */
    protected $externalProviderName = null;

    /**
     * @var string $externalGroupId
     */
    protected $externalGroupId = null;

    /**
     * @var ArrayOfguid $memberIds
     */
    protected $memberIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $externalProviderName
     * @param string $externalGroupId
     * @param ArrayOfguid $memberIds
     */
    public function __construct($auth, $externalProviderName, $externalGroupId, $memberIds)
    {
      $this->auth = $auth;
      $this->externalProviderName = $externalProviderName;
      $this->externalGroupId = $externalGroupId;
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
     * @return \Panopto\UserManagement\RemoveMembersFromExternalGroup
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalProviderName()
    {
      return $this->externalProviderName;
    }

    /**
     * @param string $externalProviderName
     * @return \Panopto\UserManagement\RemoveMembersFromExternalGroup
     */
    public function setExternalProviderName($externalProviderName)
    {
      $this->externalProviderName = $externalProviderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalGroupId()
    {
      return $this->externalGroupId;
    }

    /**
     * @param string $externalGroupId
     * @return \Panopto\UserManagement\RemoveMembersFromExternalGroup
     */
    public function setExternalGroupId($externalGroupId)
    {
      $this->externalGroupId = $externalGroupId;
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
     * @return \Panopto\UserManagement\RemoveMembersFromExternalGroup
     */
    public function setMemberIds($memberIds)
    {
      $this->memberIds = $memberIds;
      return $this;
    }

}
