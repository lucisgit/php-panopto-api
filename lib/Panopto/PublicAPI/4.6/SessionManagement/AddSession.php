<?php

namespace Panopto\SessionManagement;

class AddSession
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
     * @var guid $folderId
     */
    protected $folderId = null;

    /**
     * @var boolean $isBroadcast
     */
    protected $isBroadcast = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $name
     * @param guid $folderId
     * @param boolean $isBroadcast
     */
    public function __construct($auth, $name, $folderId, $isBroadcast)
    {
      $this->auth = $auth;
      $this->name = $name;
      $this->folderId = $folderId;
      $this->isBroadcast = $isBroadcast;
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
     * @return \Panopto\SessionManagement\AddSession
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
     * @return \Panopto\SessionManagement\AddSession
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return guid
     */
    public function getFolderId()
    {
      return $this->folderId;
    }

    /**
     * @param guid $folderId
     * @return \Panopto\SessionManagement\AddSession
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBroadcast()
    {
      return $this->isBroadcast;
    }

    /**
     * @param boolean $isBroadcast
     * @return \Panopto\SessionManagement\AddSession
     */
    public function setIsBroadcast($isBroadcast)
    {
      $this->isBroadcast = $isBroadcast;
      return $this;
    }

}
