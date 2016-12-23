<?php

namespace Panopto\RemoteRecorderManagement;

class ArrayOfRemoteRecorderDevice implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RemoteRecorderDevice[] $RemoteRecorderDevice
     */
    protected $RemoteRecorderDevice = null;


    public function __construct()
    {

    }

    /**
     * @return RemoteRecorderDevice[]
     */
    public function getRemoteRecorderDevice()
    {
      return $this->RemoteRecorderDevice;
    }

    /**
     * @param RemoteRecorderDevice[] $RemoteRecorderDevice
     * @return \Panopto\RemoteRecorderManagement\ArrayOfRemoteRecorderDevice
     */
    public function setRemoteRecorderDevice(array $RemoteRecorderDevice = null)
    {
      $this->RemoteRecorderDevice = $RemoteRecorderDevice;
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
      return isset($this->RemoteRecorderDevice[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RemoteRecorderDevice
     */
    public function offsetGet($offset)
    {
      return $this->RemoteRecorderDevice[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RemoteRecorderDevice $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RemoteRecorderDevice[] = $value;
      } else {
        $this->RemoteRecorderDevice[$offset] = $value;
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
      unset($this->RemoteRecorderDevice[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RemoteRecorderDevice Return the current element
     */
    public function current()
    {
      return current($this->RemoteRecorderDevice);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RemoteRecorderDevice);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RemoteRecorderDevice);
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
      reset($this->RemoteRecorderDevice);
    }

    /**
     * Countable implementation
     *
     * @return RemoteRecorderDevice Return count of elements
     */
    public function count()
    {
      return count($this->RemoteRecorderDevice);
    }

}
