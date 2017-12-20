<?php

namespace Panopto\SessionManagement;

class SetExternalCourseAccessForRolesResponse
{

    /**
     * @var ArrayOfFolder $SetExternalCourseAccessForRolesResult
     */
    protected $SetExternalCourseAccessForRolesResult = null;

    /**
     * @param ArrayOfFolder $SetExternalCourseAccessForRolesResult
     */
    public function __construct($SetExternalCourseAccessForRolesResult)
    {
      $this->SetExternalCourseAccessForRolesResult = $SetExternalCourseAccessForRolesResult;
    }

    /**
     * @return ArrayOfFolder
     */
    public function getSetExternalCourseAccessForRolesResult()
    {
      return $this->SetExternalCourseAccessForRolesResult;
    }

    /**
     * @param ArrayOfFolder $SetExternalCourseAccessForRolesResult
     * @return \Panopto\SessionManagement\SetExternalCourseAccessForRolesResponse
     */
    public function setSetExternalCourseAccessForRolesResult($SetExternalCourseAccessForRolesResult)
    {
      $this->SetExternalCourseAccessForRolesResult = $SetExternalCourseAccessForRolesResult;
      return $this;
    }

}
