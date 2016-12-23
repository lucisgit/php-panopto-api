<?php

namespace Panopto\SessionManagement;

class ArrayOfSessionState implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SessionState[] $SessionState
     */
    protected $SessionState = null;


    public function __construct()
    {

    }

    /**
     * @return SessionState[]
     */
    public function getSessionState()
    {
      return $this->SessionState;
    }

    /**
     * @param SessionState[] $SessionState
     * @return \Panopto\SessionManagement\ArrayOfSessionState
     */
    public function setSessionState(array $SessionState = null)
    {
      $this->SessionState = $SessionState;
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
      return isset($this->SessionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SessionState
     */
    public function offsetGet($offset)
    {
      return $this->SessionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SessionState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SessionState[] = $value;
      } else {
        $this->SessionState[$offset] = $value;
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
      unset($this->SessionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SessionState Return the current element
     */
    public function current()
    {
      return current($this->SessionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SessionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SessionState);
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
      reset($this->SessionState);
    }

    /**
     * Countable implementation
     *
     * @return SessionState Return count of elements
     */
    public function count()
    {
      return count($this->SessionState);
    }

}
