<?php

namespace Panopto\SessionManagement;

class AreUsersNotesPublicResponse
{

    /**
     * @var boolean $AreUsersNotesPublicResult
     */
    protected $AreUsersNotesPublicResult = null;

    /**
     * @param boolean $AreUsersNotesPublicResult
     */
    public function __construct($AreUsersNotesPublicResult)
    {
      $this->AreUsersNotesPublicResult = $AreUsersNotesPublicResult;
    }

    /**
     * @return boolean
     */
    public function getAreUsersNotesPublicResult()
    {
      return $this->AreUsersNotesPublicResult;
    }

    /**
     * @param boolean $AreUsersNotesPublicResult
     * @return \Panopto\SessionManagement\AreUsersNotesPublicResponse
     */
    public function setAreUsersNotesPublicResult($AreUsersNotesPublicResult)
    {
      $this->AreUsersNotesPublicResult = $AreUsersNotesPublicResult;
      return $this;
    }

}
