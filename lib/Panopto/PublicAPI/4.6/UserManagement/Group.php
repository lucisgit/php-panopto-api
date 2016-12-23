<?php

namespace Panopto\UserManagement;

class Group
{

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var GroupType $GroupType
     */
    protected $GroupType = null;

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @var string $MembershipProviderName
     */
    protected $MembershipProviderName = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var SystemRole $SystemRole
     */
    protected $SystemRole = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return \Panopto\UserManagement\Group
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

    /**
     * @return GroupType
     */
    public function getGroupType()
    {
      return $this->GroupType;
    }

    /**
     * @param GroupType $GroupType
     * @return \Panopto\UserManagement\Group
     */
    public function setGroupType($GroupType)
    {
      $this->GroupType = $GroupType;
      return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param guid $Id
     * @return \Panopto\UserManagement\Group
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMembershipProviderName()
    {
      return $this->MembershipProviderName;
    }

    /**
     * @param string $MembershipProviderName
     * @return \Panopto\UserManagement\Group
     */
    public function setMembershipProviderName($MembershipProviderName)
    {
      $this->MembershipProviderName = $MembershipProviderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Panopto\UserManagement\Group
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Panopto\UserManagement\Group
     */
    public function setSystemRole($SystemRole)
    {
      $this->SystemRole = $SystemRole;
      return $this;
    }

}
