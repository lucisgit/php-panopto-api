<?php

namespace Panopto\SessionManagement;

class GetPersonalFolderForUserResponse
{

    /**
     * @var Folder $GetPersonalFolderForUserResult
     */
    protected $GetPersonalFolderForUserResult = null;

    /**
     * @param Folder $GetPersonalFolderForUserResult
     */
    public function __construct($GetPersonalFolderForUserResult)
    {
      $this->GetPersonalFolderForUserResult = $GetPersonalFolderForUserResult;
    }

    /**
     * @return Folder
     */
    public function getGetPersonalFolderForUserResult()
    {
      return $this->GetPersonalFolderForUserResult;
    }

    /**
     * @param Folder $GetPersonalFolderForUserResult
     * @return \Panopto\SessionManagement\GetPersonalFolderForUserResponse
     */
    public function setGetPersonalFolderForUserResult($GetPersonalFolderForUserResult)
    {
      $this->GetPersonalFolderForUserResult = $GetPersonalFolderForUserResult;
      return $this;
    }

}
