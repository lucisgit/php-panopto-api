<?php

namespace Panopto\AccessManagement;

class GetFolderAccessDetailsResponse
{

    /**
     * @var FolderAccessDetails $GetFolderAccessDetailsResult
     */
    protected $GetFolderAccessDetailsResult = null;

    /**
     * @param FolderAccessDetails $GetFolderAccessDetailsResult
     */
    public function __construct($GetFolderAccessDetailsResult)
    {
      $this->GetFolderAccessDetailsResult = $GetFolderAccessDetailsResult;
    }

    /**
     * @return FolderAccessDetails
     */
    public function getGetFolderAccessDetailsResult()
    {
      return $this->GetFolderAccessDetailsResult;
    }

    /**
     * @param FolderAccessDetails $GetFolderAccessDetailsResult
     * @return \Panopto\AccessManagement\GetFolderAccessDetailsResponse
     */
    public function setGetFolderAccessDetailsResult($GetFolderAccessDetailsResult)
    {
      $this->GetFolderAccessDetailsResult = $GetFolderAccessDetailsResult;
      return $this;
    }

}
