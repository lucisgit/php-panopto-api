<?php

namespace Panopto\SessionManagement;

class FolderWithExternalContext extends FolderBase
{

    /**
     * @var ArrayOfstring $ExternalIds
     */
    protected $ExternalIds = null;


    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfstring
     */
    public function getExternalIds()
    {
      return $this->ExternalIds;
    }

    /**
     * @param ArrayOfstring $ExternalIds
     * @return \Panopto\SessionManagement\FolderWithExternalContext
     */
    public function setExternalIds($ExternalIds)
    {
      $this->ExternalIds = $ExternalIds;
      return $this;
    }

}
