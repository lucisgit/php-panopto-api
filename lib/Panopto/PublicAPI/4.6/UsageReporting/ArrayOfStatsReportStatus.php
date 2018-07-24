<?php

namespace Panopto\UsageReporting;

class ArrayOfStatsReportStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StatsReportStatus[] $StatsReportStatus
     */
    protected $StatsReportStatus = null;


    public function __construct()
    {

    }

    /**
     * @return StatsReportStatus[]
     */
    public function getStatsReportStatus()
    {
      return $this->StatsReportStatus;
    }

    /**
     * @param StatsReportStatus[] $StatsReportStatus
     * @return \Panopto\UsageReporting\ArrayOfStatsReportStatus
     */
    public function setStatsReportStatus(array $StatsReportStatus = null)
    {
      $this->StatsReportStatus = $StatsReportStatus;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->StatsReportStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StatsReportStatus
     */
    public function offsetGet($offset)
    {
      return $this->StatsReportStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StatsReportStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->StatsReportStatus[] = $value;
      } else {
        $this->StatsReportStatus[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->StatsReportStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StatsReportStatus Return the current element
     */
    public function current()
    {
      return current($this->StatsReportStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StatsReportStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StatsReportStatus);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->StatsReportStatus);
    }

    /**
     * Countable implementation
     *
     * @return StatsReportStatus Return count of elements
     */
    public function count()
    {
      return count($this->StatsReportStatus);
    }

}
