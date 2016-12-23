<?php

namespace Panopto\RemoteRecorderManagement;

class ArrayOfRemoteRecorder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RemoteRecorder[] $RemoteRecorder
     */
    protected $RemoteRecorder = null;


    public function __construct()
    {

    }

    /**
     * @return RemoteRecorder[]
     */
    public function getRemoteRecorder()
    {
      return $this->RemoteRecorder;
    }

    /**
     * @param RemoteRecorder[] $RemoteRecorder
     * @return \Panopto\RemoteRecorderManagement\ArrayOfRemoteRecorder
     */
    public function setRemoteRecorder(array $RemoteRecorder = null)
    {
      $this->RemoteRecorder = $RemoteRecorder;
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
      return isset($this->RemoteRecorder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RemoteRecorder
     */
    public function offsetGet($offset)
    {
      return $this->RemoteRecorder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RemoteRecorder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RemoteRecorder[] = $value;
      } else {
        $this->RemoteRecorder[$offset] = $value;
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
      unset($this->RemoteRecorder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RemoteRecorder Return the current element
     */
    public function current()
    {
      return current($this->RemoteRecorder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RemoteRecorder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RemoteRecorder);
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
      reset($this->RemoteRecorder);
    }

    /**
     * Countable implementation
     *
     * @return RemoteRecorder Return count of elements
     */
    public function count()
    {
      return count($this->RemoteRecorder);
    }

}
