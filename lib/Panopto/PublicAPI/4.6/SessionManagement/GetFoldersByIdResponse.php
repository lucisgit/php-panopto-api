<?php

namespace Panopto\SessionManagement;

class GetFoldersByIdResponse
{

    /**
     * @var ArrayOfFolder $GetFoldersByIdResult
     */
    protected $GetFoldersByIdResult = null;

    /**
     * @param ArrayOfFolder $GetFoldersByIdResult
     */
    public function __construct($GetFoldersByIdResult)
    {
      $this->GetFoldersByIdResult = $GetFoldersByIdResult;
    }

    /**
     * @return ArrayOfFolder
     */
    public function getGetFoldersByIdResult()
    {
      return $this->GetFoldersByIdResult;
    }

    /**
     * @param ArrayOfFolder $GetFoldersByIdResult
     * @return \Panopto\SessionManagement\GetFoldersByIdResponse
     */
    public function setGetFoldersByIdResult($GetFoldersByIdResult)
    {
      $this->GetFoldersByIdResult = $GetFoldersByIdResult;
      return $this;
    }

}
