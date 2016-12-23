<?php

namespace Panopto\UsageReporting;

class GetFolderSummaryUsage
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $folderId
     */
    protected $folderId = null;

    /**
     * @var \DateTime $beginRange
     */
    protected $beginRange = null;

    /**
     * @var \DateTime $endRange
     */
    protected $endRange = null;

    /**
     * @var UsageGranularity $granularity
     */
    protected $granularity = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $folderId
     * @param \DateTime $beginRange
     * @param \DateTime $endRange
     * @param UsageGranularity $granularity
     */
    public function __construct($auth, $folderId, \DateTime $beginRange, \DateTime $endRange, $granularity)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->beginRange = $beginRange->format(\DateTime::ATOM);
      $this->endRange = $endRange->format(\DateTime::ATOM);
      $this->granularity = $granularity;
    }

    /**
     * @return AuthenticationInfo
     */
    public function getAuth()
    {
      return $this->auth;
    }

    /**
     * @param AuthenticationInfo $auth
     * @return \Panopto\UsageReporting\GetFolderSummaryUsage
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getFolderId()
    {
      return $this->folderId;
    }

    /**
     * @param guid $folderId
     * @return \Panopto\UsageReporting\GetFolderSummaryUsage
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginRange()
    {
      if ($this->beginRange == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->beginRange);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $beginRange
     * @return \Panopto\UsageReporting\GetFolderSummaryUsage
     */
    public function setBeginRange(\DateTime $beginRange)
    {
      $this->beginRange = $beginRange->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndRange()
    {
      if ($this->endRange == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endRange);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endRange
     * @return \Panopto\UsageReporting\GetFolderSummaryUsage
     */
    public function setEndRange(\DateTime $endRange)
    {
      $this->endRange = $endRange->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return UsageGranularity
     */
    public function getGranularity()
    {
      return $this->granularity;
    }

    /**
     * @param UsageGranularity $granularity
     * @return \Panopto\UsageReporting\GetFolderSummaryUsage
     */
    public function setGranularity($granularity)
    {
      $this->granularity = $granularity;
      return $this;
    }

}
