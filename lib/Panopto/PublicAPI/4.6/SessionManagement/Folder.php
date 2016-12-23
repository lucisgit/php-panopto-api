<?php

namespace Panopto\SessionManagement;

class Folder extends FolderBase
{

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;


    public function __construct()
    {
      parent::__construct();
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
     * @return \Panopto\SessionManagement\Folder
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
      return $this;
    }

}
