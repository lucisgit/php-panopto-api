<?php

namespace Panopto\SessionManagement;

class FolderBase
{

    /**
     * @var boolean $AllowPublicNotes
     */
    protected $AllowPublicNotes = null;

    /**
     * @var boolean $AllowSessionDownload
     */
    protected $AllowSessionDownload = null;

    /**
     * @var string $AudioPodcastITunesUrl
     */
    protected $AudioPodcastITunesUrl = null;

    /**
     * @var string $AudioRssUrl
     */
    protected $AudioRssUrl = null;

    /**
     * @var ArrayOfguid $ChildFolders
     */
    protected $ChildFolders = null;

    /**
     * @var boolean $DeliveriesHaveSpecifiedOrder
     */
    protected $DeliveriesHaveSpecifiedOrder = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $EmbedUploaderUrl
     */
    protected $EmbedUploaderUrl = null;

    /**
     * @var string $EmbedUrl
     */
    protected $EmbedUrl = null;

    /**
     * @var boolean $EnablePodcast
     */
    protected $EnablePodcast = null;

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IsPublic
     */
    protected $IsPublic = null;

    /**
     * @var string $ListUrl
     */
    protected $ListUrl = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var guid $ParentFolder
     */
    protected $ParentFolder = null;

    /**
     * @var ArrayOfstring $Presenters
     */
    protected $Presenters = null;

    /**
     * @var ArrayOfguid $Sessions
     */
    protected $Sessions = null;

    /**
     * @var string $SettingsUrl
     */
    protected $SettingsUrl = null;

    /**
     * @var string $VideoPodcastITunesUrl
     */
    protected $VideoPodcastITunesUrl = null;

    /**
     * @var string $VideoRssUrl
     */
    protected $VideoRssUrl = null;


    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getAllowPublicNotes()
    {
      return $this->AllowPublicNotes;
    }

    /**
     * @param boolean $AllowPublicNotes
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setAllowPublicNotes($AllowPublicNotes)
    {
      $this->AllowPublicNotes = $AllowPublicNotes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowSessionDownload()
    {
      return $this->AllowSessionDownload;
    }

    /**
     * @param boolean $AllowSessionDownload
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setAllowSessionDownload($AllowSessionDownload)
    {
      $this->AllowSessionDownload = $AllowSessionDownload;
      return $this;
    }

    /**
     * @return string
     */
    public function getAudioPodcastITunesUrl()
    {
      return $this->AudioPodcastITunesUrl;
    }

    /**
     * @param string $AudioPodcastITunesUrl
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setAudioPodcastITunesUrl($AudioPodcastITunesUrl)
    {
      $this->AudioPodcastITunesUrl = $AudioPodcastITunesUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getAudioRssUrl()
    {
      return $this->AudioRssUrl;
    }

    /**
     * @param string $AudioRssUrl
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setAudioRssUrl($AudioRssUrl)
    {
      $this->AudioRssUrl = $AudioRssUrl;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getChildFolders()
    {
      return $this->ChildFolders;
    }

    /**
     * @param ArrayOfguid $ChildFolders
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setChildFolders($ChildFolders)
    {
      $this->ChildFolders = $ChildFolders;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeliveriesHaveSpecifiedOrder()
    {
      return $this->DeliveriesHaveSpecifiedOrder;
    }

    /**
     * @param boolean $DeliveriesHaveSpecifiedOrder
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setDeliveriesHaveSpecifiedOrder($DeliveriesHaveSpecifiedOrder)
    {
      $this->DeliveriesHaveSpecifiedOrder = $DeliveriesHaveSpecifiedOrder;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmbedUploaderUrl()
    {
      return $this->EmbedUploaderUrl;
    }

    /**
     * @param string $EmbedUploaderUrl
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setEmbedUploaderUrl($EmbedUploaderUrl)
    {
      $this->EmbedUploaderUrl = $EmbedUploaderUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmbedUrl()
    {
      return $this->EmbedUrl;
    }

    /**
     * @param string $EmbedUrl
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setEmbedUrl($EmbedUrl)
    {
      $this->EmbedUrl = $EmbedUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablePodcast()
    {
      return $this->EnablePodcast;
    }

    /**
     * @param boolean $EnablePodcast
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setEnablePodcast($EnablePodcast)
    {
      $this->EnablePodcast = $EnablePodcast;
      return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param guid $Id
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
      return $this->IsPublic;
    }

    /**
     * @param boolean $IsPublic
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setIsPublic($IsPublic)
    {
      $this->IsPublic = $IsPublic;
      return $this;
    }

    /**
     * @return string
     */
    public function getListUrl()
    {
      return $this->ListUrl;
    }

    /**
     * @param string $ListUrl
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setListUrl($ListUrl)
    {
      $this->ListUrl = $ListUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return guid
     */
    public function getParentFolder()
    {
      return $this->ParentFolder;
    }

    /**
     * @param guid $ParentFolder
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setParentFolder($ParentFolder)
    {
      $this->ParentFolder = $ParentFolder;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPresenters()
    {
      return $this->Presenters;
    }

    /**
     * @param ArrayOfstring $Presenters
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setPresenters($Presenters)
    {
      $this->Presenters = $Presenters;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessions()
    {
      return $this->Sessions;
    }

    /**
     * @param ArrayOfguid $Sessions
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setSessions($Sessions)
    {
      $this->Sessions = $Sessions;
      return $this;
    }

    /**
     * @return string
     */
    public function getSettingsUrl()
    {
      return $this->SettingsUrl;
    }

    /**
     * @param string $SettingsUrl
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setSettingsUrl($SettingsUrl)
    {
      $this->SettingsUrl = $SettingsUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoPodcastITunesUrl()
    {
      return $this->VideoPodcastITunesUrl;
    }

    /**
     * @param string $VideoPodcastITunesUrl
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setVideoPodcastITunesUrl($VideoPodcastITunesUrl)
    {
      $this->VideoPodcastITunesUrl = $VideoPodcastITunesUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoRssUrl()
    {
      return $this->VideoRssUrl;
    }

    /**
     * @param string $VideoRssUrl
     * @return \Panopto\SessionManagement\FolderBase
     */
    public function setVideoRssUrl($VideoRssUrl)
    {
      $this->VideoRssUrl = $VideoRssUrl;
      return $this;
    }

}
