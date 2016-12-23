<?php

namespace Panopto\SessionManagement;

class GetAllFoldersByExternalIdResponse
{

    /**
     * @var ArrayOfFolder $GetAllFoldersByExternalIdResult
     */
    protected $GetAllFoldersByExternalIdResult = null;

    /**
     * @param ArrayOfFolder $GetAllFoldersByExternalIdResult
     */
    public function __construct($GetAllFoldersByExternalIdResult)
    {
      $this->GetAllFoldersByExternalIdResult = $GetAllFoldersByExternalIdResult;
    }

    /**
     * @return ArrayOfFolder
     */
    public function getGetAllFoldersByExternalIdResult()
    {
      return $this->GetAllFoldersByExternalIdResult;
    }

    /**
     * @param ArrayOfFolder $GetAllFoldersByExternalIdResult
     * @return \Panopto\SessionManagement\GetAllFoldersByExternalIdResponse
     */
    public function setGetAllFoldersByExternalIdResult($GetAllFoldersByExternalIdResult)
    {
      $this->GetAllFoldersByExternalIdResult = $GetAllFoldersByExternalIdResult;
      return $this;
    }

}
