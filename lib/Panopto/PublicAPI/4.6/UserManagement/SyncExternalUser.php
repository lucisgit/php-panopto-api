<?php

namespace Panopto\UserManagement;

class SyncExternalUser
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var boolean $EmailSessionNotifications
     */
    protected $EmailSessionNotifications = null;

    /**
     * @var ArrayOfstring $externalGroupIds
     */
    protected $externalGroupIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param boolean $EmailSessionNotifications
     * @param ArrayOfstring $externalGroupIds
     */
    public function __construct($auth, $firstName, $lastName, $email, $EmailSessionNotifications, $externalGroupIds)
    {
      $this->auth = $auth;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->EmailSessionNotifications = $EmailSessionNotifications;
      $this->externalGroupIds = $externalGroupIds;
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
     * @return \Panopto\UserManagement\SyncExternalUser
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \Panopto\UserManagement\SyncExternalUser
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \Panopto\UserManagement\SyncExternalUser
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Panopto\UserManagement\SyncExternalUser
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Panopto\UserManagement\SyncExternalUser
     */
    public function setEmailSessionNotifications($EmailSessionNotifications)
    {
      $this->EmailSessionNotifications = $EmailSessionNotifications;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getExternalGroupIds()
    {
      return $this->externalGroupIds;
    }

    /**
     * @param ArrayOfstring $externalGroupIds
     * @return \Panopto\UserManagement\SyncExternalUser
     */
    public function setExternalGroupIds($externalGroupIds)
    {
      $this->externalGroupIds = $externalGroupIds;
      return $this;
    }

}
