<?php

namespace Panopto\SessionManagement;

class FolderAvailabilitySettings
{

    /**
     * @var DateTimeOffset $EndSettingDate
     */
    protected $EndSettingDate = null;

    /**
     * @var FolderEndSettingType $EndSettingType
     */
    protected $EndSettingType = null;

    /**
     * @var guid $FolderId
     */
    protected $FolderId = null;

    /**
     * @var DateTimeOffset $StartSettingDate
     */
    protected $StartSettingDate = null;

    /**
     * @var FolderStartSettingType $StartSettingType
     */
    protected $StartSettingType = null;


    public function __construct()
    {

    }

    /**
     * @return DateTimeOffset
     */
    public function getEndSettingDate()
    {
      return $this->EndSettingDate;
    }

    /**
     * @param DateTimeOffset $EndSettingDate
     * @return \Panopto\SessionManagement\FolderAvailabilitySettings
     */
    public function setEndSettingDate($EndSettingDate)
    {
      $this->EndSettingDate = $EndSettingDate;
      return $this;
    }

    /**
     * @return FolderEndSettingType
     */
    public function getEndSettingType()
    {
      return $this->EndSettingType;
    }

    /**
     * @param FolderEndSettingType $EndSettingType
     * @return \Panopto\SessionManagement\FolderAvailabilitySettings
     */
    public function setEndSettingType($EndSettingType)
    {
      $this->EndSettingType = $EndSettingType;
      return $this;
    }

    /**
     * @return guid
     */
    public function getFolderId()
    {
      return $this->FolderId;
    }

    /**
     * @param guid $FolderId
     * @return \Panopto\SessionManagement\FolderAvailabilitySettings
     */
    public function setFolderId($FolderId)
    {
      $this->FolderId = $FolderId;
      return $this;
    }

    /**
     * @return DateTimeOffset
     */
    public function getStartSettingDate()
    {
      return $this->StartSettingDate;
    }

    /**
     * @param DateTimeOffset $StartSettingDate
     * @return \Panopto\SessionManagement\FolderAvailabilitySettings
     */
    public function setStartSettingDate($StartSettingDate)
    {
      $this->StartSettingDate = $StartSettingDate;
      return $this;
    }

    /**
     * @return FolderStartSettingType
     */
    public function getStartSettingType()
    {
      return $this->StartSettingType;
    }

    /**
     * @param FolderStartSettingType $StartSettingType
     * @return \Panopto\SessionManagement\FolderAvailabilitySettings
     */
    public function setStartSettingType($StartSettingType)
    {
      $this->StartSettingType = $StartSettingType;
      return $this;
    }

}
