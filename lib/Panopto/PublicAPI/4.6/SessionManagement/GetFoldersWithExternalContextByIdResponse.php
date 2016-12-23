<?php

namespace Panopto\SessionManagement;

class GetFoldersWithExternalContextByIdResponse
{

    /**
     * @var ArrayOfFolderWithExternalContext $GetFoldersWithExternalContextByIdResult
     */
    protected $GetFoldersWithExternalContextByIdResult = null;

    /**
     * @param ArrayOfFolderWithExternalContext $GetFoldersWithExternalContextByIdResult
     */
    public function __construct($GetFoldersWithExternalContextByIdResult)
    {
      $this->GetFoldersWithExternalContextByIdResult = $GetFoldersWithExternalContextByIdResult;
    }

    /**
     * @return ArrayOfFolderWithExternalContext
     */
    public function getGetFoldersWithExternalContextByIdResult()
    {
      return $this->GetFoldersWithExternalContextByIdResult;
    }

    /**
     * @param ArrayOfFolderWithExternalContext $GetFoldersWithExternalContextByIdResult
     * @return \Panopto\SessionManagement\GetFoldersWithExternalContextByIdResponse
     */
    public function setGetFoldersWithExternalContextByIdResult($GetFoldersWithExternalContextByIdResult)
    {
      $this->GetFoldersWithExternalContextByIdResult = $GetFoldersWithExternalContextByIdResult;
      return $this;
    }

}
