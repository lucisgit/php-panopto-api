<?php

namespace Panopto\SessionManagement;

class ProvisionExternalCourse
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
     * @param AuthenticationInfo $auth
     * @param string $name
     * @param string $externalId
     */
    public function __construct($auth, $name, $externalId)
    {
      $this->auth = $auth;
      $this->name = $name;
      $this->externalId = $externalId;
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
     * @return \Panopto\SessionManagement\ProvisionExternalCourse
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
     * @return \Panopto\SessionManagement\ProvisionExternalCourse
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
     * @return \Panopto\SessionManagement\ProvisionExternalCourse
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
