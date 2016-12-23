<?php

namespace Panopto\SessionManagement;

class SetCopiedExternalCourseAccessResponse
{

    /**
     * @var ArrayOfFolder $SetCopiedExternalCourseAccessResult
     */
    protected $SetCopiedExternalCourseAccessResult = null;

    /**
     * @param ArrayOfFolder $SetCopiedExternalCourseAccessResult
     */
    public function __construct($SetCopiedExternalCourseAccessResult)
    {
      $this->SetCopiedExternalCourseAccessResult = $SetCopiedExternalCourseAccessResult;
    }

    /**
     * @return ArrayOfFolder
     */
    public function getSetCopiedExternalCourseAccessResult()
    {
      return $this->SetCopiedExternalCourseAccessResult;
    }

    /**
     * @param ArrayOfFolder $SetCopiedExternalCourseAccessResult
     * @return \Panopto\SessionManagement\SetCopiedExternalCourseAccessResponse
     */
    public function setSetCopiedExternalCourseAccessResult($SetCopiedExternalCourseAccessResult)
    {
      $this->SetCopiedExternalCourseAccessResult = $SetCopiedExternalCourseAccessResult;
      return $this;
    }

}
