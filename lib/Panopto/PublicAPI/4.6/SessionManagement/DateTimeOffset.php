<?php

namespace Panopto\SessionManagement;

class DateTimeOffset
{

    /**
     * @var \DateTime $DateTime
     */
    protected $DateTime = null;

    /**
     * @var int $OffsetMinutes
     */
    protected $OffsetMinutes = null;

    /**
     * @param \DateTime $DateTime
     * @param int $OffsetMinutes
     */
    public function __construct(\DateTime $DateTime, $OffsetMinutes)
    {
      $this->DateTime = $DateTime->format(\DateTime::ATOM);
      $this->OffsetMinutes = $OffsetMinutes;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
      if ($this->DateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateTime
     * @return \Panopto\SessionManagement\DateTimeOffset
     */
    public function setDateTime(\DateTime $DateTime)
    {
      $this->DateTime = $DateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getOffsetMinutes()
    {
      return $this->OffsetMinutes;
    }

    /**
     * @param int $OffsetMinutes
     * @return \Panopto\SessionManagement\DateTimeOffset
     */
    public function setOffsetMinutes($OffsetMinutes)
    {
      $this->OffsetMinutes = $OffsetMinutes;
      return $this;
    }

}
