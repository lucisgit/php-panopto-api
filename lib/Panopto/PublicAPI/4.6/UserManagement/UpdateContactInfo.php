<?php

namespace Panopto\UserManagement;

class UpdateContactInfo
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $userId
     */
    protected $userId = null;

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
     * @var boolean $sendNotifications
     */
    protected $sendNotifications = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $userId
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param boolean $sendNotifications
     */
    public function __construct($auth, $userId, $firstName, $lastName, $email, $sendNotifications)
    {
      $this->auth = $auth;
      $this->userId = $userId;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->sendNotifications = $sendNotifications;
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
     * @return \Panopto\UserManagement\UpdateContactInfo
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param guid $userId
     * @return \Panopto\UserManagement\UpdateContactInfo
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
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
     * @return \Panopto\UserManagement\UpdateContactInfo
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
     * @return \Panopto\UserManagement\UpdateContactInfo
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
     * @return \Panopto\UserManagement\UpdateContactInfo
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSendNotifications()
    {
      return $this->sendNotifications;
    }

    /**
     * @param boolean $sendNotifications
     * @return \Panopto\UserManagement\UpdateContactInfo
     */
    public function setSendNotifications($sendNotifications)
    {
      $this->sendNotifications = $sendNotifications;
      return $this;
    }

}
