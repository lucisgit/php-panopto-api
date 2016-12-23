<?php

namespace Panopto\UsageReporting;

class ArrayOfSummaryUsageResponseItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SummaryUsageResponseItem[] $SummaryUsageResponseItem
     */
    protected $SummaryUsageResponseItem = null;


    public function __construct()
    {

    }

    /**
     * @return SummaryUsageResponseItem[]
     */
    public function getSummaryUsageResponseItem()
    {
      return $this->SummaryUsageResponseItem;
    }

    /**
     * @param SummaryUsageResponseItem[] $SummaryUsageResponseItem
     * @return \Panopto\UsageReporting\ArrayOfSummaryUsageResponseItem
     */
    public function setSummaryUsageResponseItem(array $SummaryUsageResponseItem = null)
    {
      $this->SummaryUsageResponseItem = $SummaryUsageResponseItem;
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
      return isset($this->SummaryUsageResponseItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SummaryUsageResponseItem
     */
    public function offsetGet($offset)
    {
      return $this->SummaryUsageResponseItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SummaryUsageResponseItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SummaryUsageResponseItem[] = $value;
      } else {
        $this->SummaryUsageResponseItem[$offset] = $value;
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
      unset($this->SummaryUsageResponseItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SummaryUsageResponseItem Return the current element
     */
    public function current()
    {
      return current($this->SummaryUsageResponseItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SummaryUsageResponseItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SummaryUsageResponseItem);
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
      reset($this->SummaryUsageResponseItem);
    }

    /**
     * Countable implementation
     *
     * @return SummaryUsageResponseItem Return count of elements
     */
    public function count()
    {
      return count($this->SummaryUsageResponseItem);
    }

}
