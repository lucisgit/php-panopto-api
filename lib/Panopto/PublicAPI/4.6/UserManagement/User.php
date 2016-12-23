<?php

namespace Panopto\UserManagement;

class User
{

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var boolean $EmailSessionNotifications
     */
    protected $EmailSessionNotifications = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var ArrayOfguid $GroupMemberships
     */
    protected $GroupMemberships = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var SystemRole $SystemRole
     */
    protected $SystemRole = null;

    /**
     * @var string $UserBio
     */
    protected $UserBio = null;

    /**
     * @var guid $UserId
     */
    protected $UserId = null;

    /**
     * @var string $UserKey
     */
    protected $UserKey = null;

    /**
     * @var string $UserSettingsUrl
     */
    protected $UserSettingsUrl = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Panopto\UserManagement\User
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailSessionNotifications()
    {
      return $this->EmailSessionNotifications;
    }

    /**
     * @param boolean $EmailSessionNotifications
     * @return \Panopto\UserManagement\User
     */
    public function setEmailSessionNotifications($EmailSessionNotifications)
    {
      $this->EmailSessionNotifications = $EmailSessionNotifications;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Panopto\UserManagement\User
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getGroupMemberships()
    {
      return $this->GroupMemberships;
    }

    /**
     * @param ArrayOfguid $GroupMemberships
     * @return \Panopto\UserManagement\User
     */
    public function setGroupMemberships($GroupMemberships)
    {
      $this->GroupMemberships = $GroupMemberships;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Panopto\UserManagement\User
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return \Panopto\UserManagement\User
     */
    public function setSystemRole($SystemRole)
    {
      $this->SystemRole = $SystemRole;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserBio()
    {
      return $this->UserBio;
    }

    /**
     * @param string $UserBio
     * @return \Panopto\UserManagement\User
     */
    public function setUserBio($UserBio)
    {
      $this->UserBio = $UserBio;
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
     * @return \Panopto\UserManagement\User
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserKey()
    {
      return $this->UserKey;
    }

    /**
     * @param string $UserKey
     * @return \Panopto\UserManagement\User
     */
    public function setUserKey($UserKey)
    {
      $this->UserKey = $UserKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserSettingsUrl()
    {
      return $this->UserSettingsUrl;
    }

    /**
     * @param string $UserSettingsUrl
     * @return \Panopto\UserManagement\User
     */
    public function setUserSettingsUrl($UserSettingsUrl)
    {
      $this->UserSettingsUrl = $UserSettingsUrl;
      return $this;
    }

}
