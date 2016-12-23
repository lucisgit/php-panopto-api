<?php

namespace Panopto\SessionManagement;

class Note
{

    /**
     * @var string $Channel
     */
    protected $Channel = null;

    /**
     * @var guid $CreatorId
     */
    protected $CreatorId = null;

    /**
     * @var guid $ID
     */
    protected $ID = null;

    /**
     * @var guid $SessionID
     */
    protected $SessionID = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var float $Timestamp
     */
    protected $Timestamp = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->Channel;
    }

    /**
     * @param string $Channel
     * @return \Panopto\SessionManagement\Note
     */
    public function setChannel($Channel)
    {
      $this->Channel = $Channel;
      return $this;
    }

    /**
     * @return guid
     */
    public function getCreatorId()
    {
      return $this->CreatorId;
    }

    /**
     * @param guid $CreatorId
     * @return \Panopto\SessionManagement\Note
     */
    public function setCreatorId($CreatorId)
    {
      $this->CreatorId = $CreatorId;
      return $this;
    }

    /**
     * @return guid
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param guid $ID
     * @return \Panopto\SessionManagement\Note
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return guid
     */
    public function getSessionID()
    {
      return $this->SessionID;
    }

    /**
     * @param guid $SessionID
     * @return \Panopto\SessionManagement\Note
     */
    public function setSessionID($SessionID)
    {
      $this->SessionID = $SessionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Panopto\SessionManagement\Note
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimestamp()
    {
      return $this->Timestamp;
    }

    /**
     * @param float $Timestamp
     * @return \Panopto\SessionManagement\Note
     */
    public function setTimestamp($Timestamp)
    {
      $this->Timestamp = $Timestamp;
      return $this;
    }

}
