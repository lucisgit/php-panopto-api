<?php

namespace Panopto\SessionManagement;

class GetCreatorFoldersListResponse
{

    /**
     * @var ListFoldersResponse $GetCreatorFoldersListResult
     */
    protected $GetCreatorFoldersListResult = null;

    /**
     * @param ListFoldersResponse $GetCreatorFoldersListResult
     */
    public function __construct($GetCreatorFoldersListResult)
    {
      $this->GetCreatorFoldersListResult = $GetCreatorFoldersListResult;
    }

    /**
     * @return ListFoldersResponse
     */
    public function getGetCreatorFoldersListResult()
    {
      return $this->GetCreatorFoldersListResult;
    }

    /**
     * @param ListFoldersResponse $GetCreatorFoldersListResult
     * @return \Panopto\SessionManagement\GetCreatorFoldersListResponse
     */
    public function setGetCreatorFoldersListResult($GetCreatorFoldersListResult)
    {
      $this->GetCreatorFoldersListResult = $GetCreatorFoldersListResult;
      return $this;
    }

}
