<?php

namespace Panopto\UsageReporting;

class GetSessionDetailedUsage
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var guid $sessionId
     */
    protected $sessionId = null;

    /**
     * @var Pagination $pagination
     */
    protected $pagination = null;

    /**
     * @var \DateTime $beginRange
     */
    protected $beginRange = null;

    /**
     * @var \DateTime $endRange
     */
    protected $endRange = null;

    /**
     * @param AuthenticationInfo $auth
     * @param guid $sessionId
     * @param Pagination $pagination
     * @param \DateTime $beginRange
     * @param \DateTime $endRange
     */
    public function __construct($auth, $sessionId, $pagination, \DateTime $beginRange, \DateTime $endRange)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->pagination = $pagination;
      $this->beginRange = $beginRange->format(\DateTime::ATOM);
      $this->endRange = $endRange->format(\DateTime::ATOM);
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
     * @return \Panopto\UsageReporting\GetSessionDetailedUsage
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param guid $sessionId
     * @return \Panopto\UsageReporting\GetSessionDetailedUsage
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
      return $this->pagination;
    }

    /**
     * @param Pagination $pagination
     * @return \Panopto\UsageReporting\GetSessionDetailedUsage
     */
    public function setPagination($pagination)
    {
      $this->pagination = $pagination;
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
     * @return \Panopto\UsageReporting\GetSessionDetailedUsage
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
     * @return \Panopto\UsageReporting\GetSessionDetailedUsage
     */
    public function setEndRange(\DateTime $endRange)
    {
      $this->endRange = $endRange->format(\DateTime::ATOM);
      return $this;
    }

}
