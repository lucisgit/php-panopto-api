<?php

namespace Panopto\UsageReporting;

class DetailedUsageResponseItem
{

    /**
     * @var float $SecondsViewed
     */
    protected $SecondsViewed = null;

    /**
     * @var guid $SessionId
     */
    protected $SessionId = null;

    /**
     * @var float $StartPosition
     */
    protected $StartPosition = null;

    /**
     * @var \DateTime $Time
     */
    protected $Time = null;

    /**
     * @var guid $UserId
     */
    protected $UserId = null;


    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getSecondsViewed()
    {
      return $this->SecondsViewed;
    }

    /**
     * @param float $SecondsViewed
     * @return \Panopto\UsageReporting\DetailedUsageResponseItem
     */
    public function setSecondsViewed($SecondsViewed)
    {
      $this->SecondsViewed = $SecondsViewed;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param guid $SessionId
     * @return \Panopto\UsageReporting\DetailedUsageResponseItem
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return float
     */
    public function getStartPosition()
    {
      return $this->StartPosition;
    }

    /**
     * @param float $StartPosition
     * @return \Panopto\UsageReporting\DetailedUsageResponseItem
     */
    public function setStartPosition($StartPosition)
    {
      $this->StartPosition = $StartPosition;
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
     * @return \Panopto\UsageReporting\DetailedUsageResponseItem
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
     * @return guid
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param guid $UserId
     * @return \Panopto\UsageReporting\DetailedUsageResponseItem
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

}
