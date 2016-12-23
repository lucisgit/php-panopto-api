<?php

namespace Panopto\SessionManagement;

class AddFolder
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
     * @var guid $parentFolder
     */
    protected $parentFolder = null;

    /**
     * @var boolean $isPublic
     */
    protected $isPublic = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $name
     * @param guid $parentFolder
     * @param boolean $isPublic
     */
    public function __construct($auth, $name, $parentFolder, $isPublic)
    {
      $this->auth = $auth;
      $this->name = $name;
      $this->parentFolder = $parentFolder;
      $this->isPublic = $isPublic;
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
     * @return \Panopto\SessionManagement\AddFolder
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
     * @return \Panopto\SessionManagement\AddFolder
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return guid
     */
    public function getParentFolder()
    {
      return $this->parentFolder;
    }

    /**
     * @param guid $parentFolder
     * @return \Panopto\SessionManagement\AddFolder
     */
    public function setParentFolder($parentFolder)
    {
      $this->parentFolder = $parentFolder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param boolean $isPublic
     * @return \Panopto\SessionManagement\AddFolder
     */
    public function setIsPublic($isPublic)
    {
      $this->isPublic = $isPublic;
      return $this;
    }

}
