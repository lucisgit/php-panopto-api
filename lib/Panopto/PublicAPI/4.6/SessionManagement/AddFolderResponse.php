<?php

namespace Panopto\SessionManagement;

class AddFolderResponse
{

    /**
     * @var Folder $AddFolderResult
     */
    protected $AddFolderResult = null;

    /**
     * @param Folder $AddFolderResult
     */
    public function __construct($AddFolderResult)
    {
      $this->AddFolderResult = $AddFolderResult;
    }

    /**
     * @return Folder
     */
    public function getAddFolderResult()
    {
      return $this->AddFolderResult;
    }

    /**
     * @param Folder $AddFolderResult
     * @return \Panopto\SessionManagement\AddFolderResponse
     */
    public function setAddFolderResult($AddFolderResult)
    {
      $this->AddFolderResult = $AddFolderResult;
      return $this;
    }

}
