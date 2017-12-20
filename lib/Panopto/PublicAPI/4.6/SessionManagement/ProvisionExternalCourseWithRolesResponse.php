<?php

namespace Panopto\SessionManagement;

class ProvisionExternalCourseWithRolesResponse
{

    /**
     * @var Folder $ProvisionExternalCourseWithRolesResult
     */
    protected $ProvisionExternalCourseWithRolesResult = null;

    /**
     * @param Folder $ProvisionExternalCourseWithRolesResult
     */
    public function __construct($ProvisionExternalCourseWithRolesResult)
    {
      $this->ProvisionExternalCourseWithRolesResult = $ProvisionExternalCourseWithRolesResult;
    }

    /**
     * @return Folder
     */
    public function getProvisionExternalCourseWithRolesResult()
    {
      return $this->ProvisionExternalCourseWithRolesResult;
    }

    /**
     * @param Folder $ProvisionExternalCourseWithRolesResult
     * @return \Panopto\SessionManagement\ProvisionExternalCourseWithRolesResponse
     */
    public function setProvisionExternalCourseWithRolesResult($ProvisionExternalCourseWithRolesResult)
    {
      $this->ProvisionExternalCourseWithRolesResult = $ProvisionExternalCourseWithRolesResult;
      return $this;
    }

}
