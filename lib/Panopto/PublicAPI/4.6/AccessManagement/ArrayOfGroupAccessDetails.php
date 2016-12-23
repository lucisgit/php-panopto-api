<?php

namespace Panopto\AccessManagement;

class ArrayOfGroupAccessDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GroupAccessDetails[] $GroupAccessDetails
     */
    protected $GroupAccessDetails = null;


    public function __construct()
    {

    }

    /**
     * @return GroupAccessDetails[]
     */
    public function getGroupAccessDetails()
    {
      return $this->GroupAccessDetails;
    }

    /**
     * @param GroupAccessDetails[] $GroupAccessDetails
     * @return \Panopto\AccessManagement\ArrayOfGroupAccessDetails
     */
    public function setGroupAccessDetails(array $GroupAccessDetails = null)
    {
      $this->GroupAccessDetails = $GroupAccessDetails;
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
      return isset($this->GroupAccessDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GroupAccessDetails
     */
    public function offsetGet($offset)
    {
      return $this->GroupAccessDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GroupAccessDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->GroupAccessDetails[] = $value;
      } else {
        $this->GroupAccessDetails[$offset] = $value;
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
      unset($this->GroupAccessDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GroupAccessDetails Return the current element
     */
    public function current()
    {
      return current($this->GroupAccessDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GroupAccessDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GroupAccessDetails);
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
      reset($this->GroupAccessDetails);
    }

    /**
     * Countable implementation
     *
     * @return GroupAccessDetails Return count of elements
     */
    public function count()
    {
      return count($this->GroupAccessDetails);
    }

}
