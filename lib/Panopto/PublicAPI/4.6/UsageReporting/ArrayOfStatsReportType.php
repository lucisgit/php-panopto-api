<?php

namespace Panopto\UsageReporting;

class ArrayOfStatsReportType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StatsReportType[] $StatsReportType
     */
    protected $StatsReportType = null;


    public function __construct()
    {

    }

    /**
     * @return StatsReportType[]
     */
    public function getStatsReportType()
    {
      return $this->StatsReportType;
    }

    /**
     * @param StatsReportType[] $StatsReportType
     * @return \Panopto\UsageReporting\ArrayOfStatsReportType
     */
    public function setStatsReportType(array $StatsReportType = null)
    {
      $this->StatsReportType = $StatsReportType;
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
      return isset($this->StatsReportType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StatsReportType
     */
    public function offsetGet($offset)
    {
      return $this->StatsReportType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StatsReportType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->StatsReportType[] = $value;
      } else {
        $this->StatsReportType[$offset] = $value;
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
      unset($this->StatsReportType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StatsReportType Return the current element
     */
    public function current()
    {
      return current($this->StatsReportType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StatsReportType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StatsReportType);
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
      reset($this->StatsReportType);
    }

    /**
     * Countable implementation
     *
     * @return StatsReportType Return count of elements
     */
    public function count()
    {
      return count($this->StatsReportType);
    }

}
