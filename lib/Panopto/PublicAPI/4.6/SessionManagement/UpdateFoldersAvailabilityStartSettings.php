<?php

namespace Panopto\SessionManagement;

class UpdateFoldersAvailabilityStartSettings
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $folderIds
     */
    protected $folderIds = null;

    /**
     * @var FolderStartSettingType $settingType
     */
    protected $settingType = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var boolean $overrideSessionsSettings
     */
    protected $overrideSessionsSettings = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $folderIds
     * @param FolderStartSettingType $settingType
     * @param \DateTime $startDate
     * @param boolean $overrideSessionsSettings
     */
    public function __construct($auth, $folderIds, $settingType, \DateTime $startDate, $overrideSessionsSettings)
    {
      $this->auth = $auth;
      $this->folderIds = $folderIds;
      $this->settingType = $settingType;
      $this->startDate = $startDate->format(\DateTime::ATOM);
      $this->overrideSessionsSettings = $overrideSessionsSettings;
    }

    /**
     * @return AuthenticationInfo
     */
    public function getAuth()
    {
      return $this->auth;
    }

    /**
     * @param AuthenticationInfo $auth
     * @return \Panopto\SessionManagement\UpdateFoldersAvailabilityStartSettings
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getFolderIds()
    {
      return $this->folderIds;
    }

    /**
     * @param ArrayOfguid $folderIds
     * @return \Panopto\SessionManagement\UpdateFoldersAvailabilityStartSettings
     */
    public function setFolderIds($folderIds)
    {
      $this->folderIds = $folderIds;
      return $this;
    }

    /**
     * @return FolderStartSettingType
     */
    public function getSettingType()
    {
      return $this->settingType;
    }

    /**
     * @param FolderStartSettingType $settingType
     * @return \Panopto\SessionManagement\UpdateFoldersAvailabilityStartSettings
     */
    public function setSettingType($settingType)
    {
      $this->settingType = $settingType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Panopto\SessionManagement\UpdateFoldersAvailabilityStartSettings
     */
    public function setStartDate(\DateTime $startDate)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideSessionsSettings()
    {
      return $this->overrideSessionsSettings;
    }

    /**
     * @param boolean $overrideSessionsSettings
     * @return \Panopto\SessionManagement\UpdateFoldersAvailabilityStartSettings
     */
    public function setOverrideSessionsSettings($overrideSessionsSettings)
    {
      $this->overrideSessionsSettings = $overrideSessionsSettings;
      return $this;
    }

}
