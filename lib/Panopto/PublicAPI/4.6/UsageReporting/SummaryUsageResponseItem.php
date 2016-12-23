<?php

namespace Panopto\UsageReporting;

class SummaryUsageResponseItem
{

    /**
     * @var float $MinutesViewed
     */
    protected $MinutesViewed = null;

    /**
     * @var \DateTime $Time
     */
    protected $Time = null;

    /**
     * @var int $UniqueUsers
     */
    protected $UniqueUsers = null;

    /**
     * @var int $Views
     */
    protected $Views = null;


    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getMinutesViewed()
    {
      return $this->MinutesViewed;
    }

    /**
     * @param float $MinutesViewed
     * @return \Panopto\UsageReporting\SummaryUsageResponseItem
     */
    public function setMinutesViewed($MinutesViewed)
    {
      $this->MinutesViewed = $MinutesViewed;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
      if ($this->Time == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Time);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Time
     * @return \Panopto\UsageReporting\SummaryUsageResponseItem
     */
    public function setTime(\DateTime $Time = null)
    {
      if ($Time == null) {
       $this->Time = null;
      } else {
        $this->Time = $Time->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueUsers()
    {
      return $this->UniqueUsers;
    }

    /**
     * @param int $UniqueUsers
     * @return \Panopto\UsageReporting\SummaryUsageResponseItem
     */
    public function setUniqueUsers($UniqueUsers)
    {
      $this->UniqueUsers = $UniqueUsers;
      return $this;
    }

    /**
     * @return int
     */
    public function getViews()
    {
      return $this->Views;
    }

    /**
     * @param int $Views
     * @return \Panopto\UsageReporting\SummaryUsageResponseItem
     */
    public function setViews($Views)
    {
      $this->Views = $Views;
      return $this;
    }

}
