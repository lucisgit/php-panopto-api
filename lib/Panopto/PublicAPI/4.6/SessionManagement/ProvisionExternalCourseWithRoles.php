<?php

namespace Panopto\SessionManagement;

class ProvisionExternalCourseWithRoles
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
     * @var ArrayOfAccessRole $roles
     */
    protected $roles = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $name
     * @param string $externalId
     * @param ArrayOfAccessRole $roles
     */
    public function __construct($auth, $name, $externalId, $roles)
    {
      $this->auth = $auth;
      $this->name = $name;
      $this->externalId = $externalId;
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
     * @return \Panopto\SessionManagement\ProvisionExternalCourseWithRoles
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
     * @return \Panopto\SessionManagement\ProvisionExternalCourseWithRoles
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
     * @return \Panopto\SessionManagement\ProvisionExternalCourseWithRoles
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
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
     * @return \Panopto\SessionManagement\ProvisionExternalCourseWithRoles
     */
    public function setRoles($roles)
    {
      $this->roles = $roles;
      return $this;
    }

}
