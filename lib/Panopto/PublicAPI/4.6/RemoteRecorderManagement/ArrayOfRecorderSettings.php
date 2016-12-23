<?php

namespace Panopto\RemoteRecorderManagement;

class ArrayOfRecorderSettings implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RecorderSettings[] $RecorderSettings
     */
    protected $RecorderSettings = null;


    public function __construct()
    {

    }

    /**
     * @return RecorderSettings[]
     */
    public function getRecorderSettings()
    {
      return $this->RecorderSettings;
    }

    /**
     * @param RecorderSettings[] $RecorderSettings
     * @return \Panopto\RemoteRecorderManagement\ArrayOfRecorderSettings
     */
    public function setRecorderSettings(array $RecorderSettings = null)
    {
      $this->RecorderSettings = $RecorderSettings;
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
      return isset($this->RecorderSettings[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RecorderSettings
     */
    public function offsetGet($offset)
    {
      return $this->RecorderSettings[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RecorderSettings $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RecorderSettings[] = $value;
      } else {
        $this->RecorderSettings[$offset] = $value;
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
      unset($this->RecorderSettings[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RecorderSettings Return the current element
     */
    public function current()
    {
      return current($this->RecorderSettings);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RecorderSettings);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RecorderSettings);
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
      reset($this->RecorderSettings);
    }

    /**
     * Countable implementation
     *
     * @return RecorderSettings Return count of elements
     */
    public function count()
    {
      return count($this->RecorderSettings);
    }

}
