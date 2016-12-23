<?php

namespace Panopto\RemoteRecorderManagement;

class ArrayOfScheduledRecordingInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ScheduledRecordingInfo[] $ScheduledRecordingInfo
     */
    protected $ScheduledRecordingInfo = null;


    public function __construct()
    {

    }

    /**
     * @return ScheduledRecordingInfo[]
     */
    public function getScheduledRecordingInfo()
    {
      return $this->ScheduledRecordingInfo;
    }

    /**
     * @param ScheduledRecordingInfo[] $ScheduledRecordingInfo
     * @return \Panopto\RemoteRecorderManagement\ArrayOfScheduledRecordingInfo
     */
    public function setScheduledRecordingInfo(array $ScheduledRecordingInfo = null)
    {
      $this->ScheduledRecordingInfo = $ScheduledRecordingInfo;
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
      return isset($this->ScheduledRecordingInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ScheduledRecordingInfo
     */
    public function offsetGet($offset)
    {
      return $this->ScheduledRecordingInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ScheduledRecordingInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ScheduledRecordingInfo[] = $value;
      } else {
        $this->ScheduledRecordingInfo[$offset] = $value;
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
      unset($this->ScheduledRecordingInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ScheduledRecordingInfo Return the current element
     */
    public function current()
    {
      return current($this->ScheduledRecordingInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ScheduledRecordingInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ScheduledRecordingInfo);
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
      reset($this->ScheduledRecordingInfo);
    }

    /**
     * Countable implementation
     *
     * @return ScheduledRecordingInfo Return count of elements
     */
    public function count()
    {
      return count($this->ScheduledRecordingInfo);
    }

}
