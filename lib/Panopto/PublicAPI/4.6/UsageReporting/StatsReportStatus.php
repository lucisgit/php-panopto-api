<?php

namespace Panopto\UsageReporting;

class StatsReportStatus
{

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var boolean $IsAvailable
     */
    protected $IsAvailable = null;

    /**
     * @var guid $ReportId
     */
    protected $ReportId = null;

    /**
     * @var \DateTime $ReportTime
     */
    protected $ReportTime = null;

    /**
     * @var StatsReportType $ReportType
     */
    protected $ReportType = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;


    public function __construct()
    {

    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \Panopto\UsageReporting\StatsReportStatus
     */
    public function setEndTime(\DateTime $EndTime = null)
    {
      if ($EndTime == null) {
       $this->EndTime = null;
      } else {
        $this->EndTime = $EndTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAvailable()
    {
      return $this->IsAvailable;
    }

    /**
     * @param boolean $IsAvailable
     * @return \Panopto\UsageReporting\StatsReportStatus
     */
    public function setIsAvailable($IsAvailable)
    {
      $this->IsAvailable = $IsAvailable;
      return $this;
    }

    /**
     * @return guid
     */
    public function getReportId()
    {
      return $this->ReportId;
    }

    /**
     * @param guid $ReportId
     * @return \Panopto\UsageReporting\StatsReportStatus
     */
    public function setReportId($ReportId)
    {
      $this->ReportId = $ReportId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReportTime()
    {
      if ($this->ReportTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReportTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReportTime
     * @return \Panopto\UsageReporting\StatsReportStatus
     */
    public function setReportTime(\DateTime $ReportTime = null)
    {
      if ($ReportTime == null) {
       $this->ReportTime = null;
      } else {
        $this->ReportTime = $ReportTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return StatsReportType
     */
    public function getReportType()
    {
      return $this->ReportType;
    }

    /**
     * @param StatsReportType $ReportType
     * @return \Panopto\UsageReporting\StatsReportStatus
     */
    public function setReportType($ReportType)
    {
      $this->ReportType = $ReportType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \Panopto\UsageReporting\StatsReportStatus
     */
    public function setStartTime(\DateTime $StartTime = null)
    {
      if ($StartTime == null) {
       $this->StartTime = null;
      } else {
        $this->StartTime = $StartTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
