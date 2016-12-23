<?php

namespace Panopto\UserManagement;

class GetGroupsByNameResponse
{

    /**
     * @var ArrayOfGroup $GetGroupsByNameResult
     */
    protected $GetGroupsByNameResult = null;

    /**
     * @param ArrayOfGroup $GetGroupsByNameResult
     */
    public function __construct($GetGroupsByNameResult)
    {
      $this->GetGroupsByNameResult = $GetGroupsByNameResult;
    }

    /**
     * @return ArrayOfGroup
     */
    public function getGetGroupsByNameResult()
    {
      return $this->GetGroupsByNameResult;
    }

    /**
     * @param ArrayOfGroup $GetGroupsByNameResult
     * @return \Panopto\UserManagement\GetGroupsByNameResponse
     */
    public function setGetGroupsByNameResult($GetGroupsByNameResult)
    {
      $this->GetGroupsByNameResult = $GetGroupsByNameResult;
      return $this;
    }

}
