<?php

namespace Panopto\UsageReporting;

class ArrayOfDetailedUsageResponseItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DetailedUsageResponseItem[] $DetailedUsageResponseItem
     */
    protected $DetailedUsageResponseItem = null;


    public function __construct()
    {

    }

    /**
     * @return DetailedUsageResponseItem[]
     */
    public function getDetailedUsageResponseItem()
    {
      return $this->DetailedUsageResponseItem;
    }

    /**
     * @param DetailedUsageResponseItem[] $DetailedUsageResponseItem
     * @return \Panopto\UsageReporting\ArrayOfDetailedUsageResponseItem
     */
    public function setDetailedUsageResponseItem(array $DetailedUsageResponseItem = null)
    {
      $this->DetailedUsageResponseItem = $DetailedUsageResponseItem;
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
      return isset($this->DetailedUsageResponseItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DetailedUsageResponseItem
     */
    public function offsetGet($offset)
    {
      return $this->DetailedUsageResponseItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DetailedUsageResponseItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DetailedUsageResponseItem[] = $value;
      } else {
        $this->DetailedUsageResponseItem[$offset] = $value;
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
      unset($this->DetailedUsageResponseItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DetailedUsageResponseItem Return the current element
     */
    public function current()
    {
      return current($this->DetailedUsageResponseItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DetailedUsageResponseItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DetailedUsageResponseItem);
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
      reset($this->DetailedUsageResponseItem);
    }

    /**
     * Countable implementation
     *
     * @return DetailedUsageResponseItem Return count of elements
     */
    public function count()
    {
      return count($this->DetailedUsageResponseItem);
    }

}
