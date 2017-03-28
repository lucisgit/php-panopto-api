<?php
/* PHP Panopto client.
 *
 * Copyright (C) 2017 Lancaster University (http://www.lancaster.ac.uk/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * PHP Panopto API client.
 *
 * @copyright  2017 Lancaster University (http://www.lancaster.ac.uk/)
 * @author     Ruslan Kabalin (https://github.com/kabalin)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once 'vendor/autoload.php';

/**
 * Sample Panopto interface class.
 *
 * @copyright  2017 Lancaster University (http://www.lancaster.ac.uk/)
 * @author     Ruslan Kabalin (https://github.com/kabalin)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class panopto_interface {

    /** @var stdClass Access Management client */
    private $amclient;

    /** @var stdClass Remote Recorder Management client */
    private $rrmclient;

    /** @var stdClass Session Management client */
    private $smclient;

    /** @var stdClass User Management client */
    private $umclient;

    /** @var stdClass AuthenticationInfo object */
    private $auth;

    /**
     * Constructor for the panopto interface.
     *
     * Expects config object of the format:
     * $config = new stdClass(); 
     * $config->serverhostname = 'my.panopto.host';
     * $config->serverusername = 'username';
     * $config->serverpassword = 'userpassword';
     * 
     * @param stdClass $config
     */
    function __construct($config) {
        // Some SOAP options for demo.
        $soapoptions = array('keep_alive' => 0);

        $panoptoclient = new \Panopto\Client($config->serverhostname, $soapoptions);
        $panoptoclient->setAuthenticationInfo($config->serverusername, $config->serverpassword);
        $this->auth = $panoptoclient->getAuthenticationInfo();

        // Creating webservice client instances.
        $this->amclient = $panoptoclient->AccessManagement();
        $this->rrmclient = $panoptoclient->RemoteRecorderManagement();
        $this->smclient = $panoptoclient->SessionManagement();
        $this->umclient = $panoptoclient->UserManagement();
    }

    /**
     * Get the list of remote recorders.
     *
     * @param int $page The number of page for pagination.
     * @param int $perpage The number of items per page for pagination.
     * @return array of the structure ('count' => int total number of records, 'recorders' => array of RemoteRecorder instances).
     */
    function get_recorders($page, $perpage) {
        try {
            $pagination = new \Panopto\RemoteRecorderManagement\Pagination();
            $pagination->setPageNumber($page);
            $pagination->setMaxNumberResults($perpage);
            $param = new \Panopto\RemoteRecorderManagement\ListRecorders($this->auth, $pagination, 'Name');
            $recorderslist = $this->rrmclient->ListRecorders($param)->getListRecordersResult();
        } catch(Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }
        return array('count' => $recorderslist->TotalResultCount, 'recorders' => $recorderslist->PagedResults->getRemoteRecorder());
    }

    /**
     * Get the single remote recorder instance.
     *
     * @param string $id The Id of remote recorder.
     * @return stdClass RemoteRecorder instance.
     */
    function get_recorder($id) {
        try {
            $param = new \Panopto\RemoteRecorderManagement\GetRemoteRecordersById($this->auth, array($id));
            $recorder = $this->rrmclient->GetRemoteRecordersById($param)->getGetRemoteRecordersByIdResult();
        } catch(Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }
        return $recorder->getRemoteRecorder()[0];
    }

    /**
     * Get the remote recorders instances by ExternalID.
     *
     * @param string $externalid External Id of remote recorder.
     * @return stdClass ArrayOfRemoteRecorder instance.
     */
    function get_recorders_by_external_id($externalid) {
        try {
            $param = new \Panopto\RemoteRecorderManagement\GetRemoteRecordersByExternalId($this->auth, array($externalid));
            $recorders = $this->rrmclient->GetRemoteRecordersByExternalId($param)->getGetRemoteRecordersByExternalIdResult();
        } catch(Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }
        if (count($recorders)) {
            return $recorders;
        }
        return false;
    }


    /**
     * Set ExternalID for remote recorder.
     *
     * @param string $id Remote recorder id.
     * @param string $externalid External Id of remote recorder.
     * @return stdClass RemoteRecorder instance.
     */
    function set_recorder_externalid($id, $externalid) {
        if ($externalid === 'NULL') {
            $externalid = null;
        }
        try {
            $param = new \Panopto\RemoteRecorderManagement\UpdateRemoteRecorderExternalId($this->auth, $id, $externalid);
            $result = $this->rrmclient->UpdateRemoteRecorderExternalId($param);
        } catch (Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }
        return $result;
    }

    /**
     * Schedule a new recording.
     *
     * @param string $name Session name
     * @param string $folderid Remote folder id.
     * @param string $start Session start time.
     * @param string $end Session end time.
     * @param string $primaryrecorderid Remote recorder id to be used as primary.
     * @param string $secondaryrecorderid Remote recorder id to be used as secondary.
     * @param bool $isbroadcast.
     * @return stdClass ScheduleRecordingResponse instance.
     */
    function schedule_recording($name, $folderid, $start, $end, $primaryrecorderid, $secondaryrecorderid = '', $isbroadcast = false) {
        $recordersettings = array();

        $primaryrecorder = $this->get_recorder($primaryrecorderid);
        $recordersetting = new \Panopto\RemoteRecorderManagement\RecorderSettings();
        $recordersetting->setRecorderId($primaryrecorder->getId());
        $recordersetting->setSuppressPrimary(false);
        $recordersetting->setSuppressSecondary(false);
        $recordersettings[] = $recordersetting;

        if ($secondaryrecorderid) {
            $secondaryrecorder = $this->get_recorder($secondaryrecorderid);
            $recordersetting = new \Panopto\RemoteRecorderManagement\RecorderSettings();
            $recordersetting->setRecorderId($secondaryrecorder->getId());
            $recordersetting->setSuppressPrimary(true);
            $recordersetting->setSuppressSecondary(false);
            $recordersettings[] = $recordersetting;
        }

        $params = new \Panopto\RemoteRecorderManagement\ScheduleRecording($this->auth, $name, $folderid, $isbroadcast, $start, $end, $recordersettings);
        $response = $this->rrmclient->ScheduleRecording($params)->getScheduleRecordingResult();
        return $response;
    }

    /**
     * Create a new folder and assign it an external id.
     *
     * @param str $name Folder name.
     * @param str $externalid External ID of the folder.
     * @param str $parentfolderid Parent folder internal id.
     * @return str $folderid Folder id.
     */
    function add_folder($name, $externalid, $parentfolderid = '') {
        // Check parent folder existense first.
        if (empty($parentfolderid)) {
            $parentfolderid = null;
        } else {
            $param = new \Panopto\SessionManagement\GetFoldersById($this->auth, array($parentfolderid));
            $folders = $this->smclient->GetFoldersById($param)->getGetFoldersByIdResult();
            if (!count($folders)) {
                throw new SoapFault('client', "Folder $parentfolderid does not exist.");
            }
        }

        // Add new folder.
        try {
            $param = new \Panopto\SessionManagement\AddFolder($this->auth, $name, $parentfolderid, false);
            $folderid = $this->smclient->AddFolder($param)->getAddFolderResult()->getId();
        } catch(Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }

        // Update folder external ID.
        try {
            $param = new \Panopto\SessionManagement\UpdateFolderExternalId($this->auth, $folderid, $externalid);
            $this->smclient->UpdateFolderExternalId($param);
        } catch(Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }

        return $folderid;
    }

    /**
     * Get the single folderid by external id.
     *
     * @param string $externalid Folder external id.
     * @return mixed $folderid Folder id or false if no folder is found.
     */
    function get_folderid_by_externalid($externalid) {
        try {
            $param = new \Panopto\SessionManagement\GetFoldersByExternalId($this->auth, array($externalid));
            $folders = $this->smclient->GetFoldersByExternalId($param)->getGetFoldersByExternalIdResult();
        } catch(Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }
        if (count($folders)) {
            return $folders[0]->getId();
        }
        return false;
    }

    /**
     * Grant access to folder to certain users.
     *
     * @param string $folderid Folder id.
     * @param array $users Users to grant given role (userkeys).
     * @param string $role 'creator' or 'viewer'.
     * @return void.
     */
    function grant_users_access_to_folder($folderid, $users, $role) {
        // TODO: implement $role parameter use, currently only grants
        // 'Creator' rights.

        // Convert usernames to Panopto guids.
        $userguids = array();
        $viewerstoremove = array();
        $creatorstoremove = array();

        foreach ($users as $user) {
            // Fetch user from Panopto.
            $param = new \Panopto\UserManagement\GetUserByKey($this->auth, $user);
            $user = $this->umclient->GetUserByKey($param)->getGetUserByKeyResult();
            // Use only those users that exists.
            if ($user->getUserId() !== '00000000-0000-0000-0000-000000000000') {
                $userguids[$user->getUserId()] = $user->getUserId();
            }
        }

        // Fetch folder access data.
        try {
            $param = new \Panopto\AccessManagement\GetFolderAccessDetails($this->auth, $folderid);
            $accessdetails = $this->amclient->getFolderAccessDetails($param)->getGetFolderAccessDetailsResult();
        } catch(Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }

        // Make necessary preparations.
        if (!empty($accessdetails->getUsersWithCreatorAccess()->getGuid())) {
            $creatoraccessguids = $accessdetails->getUsersWithCreatorAccess()->getGuid();
            if (is_array($creatoraccessguids)) {
                $creatoraccessguids = array_flip($creatoraccessguids);
            } else {
                $creatoraccessguids = array($creatoraccessguids => 0);
            }
        }
        if (!empty($accessdetails->getUsersWithViewerAccess()->getGuid())) {
            $vieweraccessguids = $accessdetails->getUsersWithViewerAccess()->getGuid();
            if (is_array($vieweraccessguids)) {
                $vieweraccessguids = array_flip($vieweraccessguids);
            } else {
                $vieweraccessguids = array($vieweraccessguids => 0);
            }
        }

        foreach ($userguids as $userguid) {
            // If already has create access, remove guid from list.
            if (isset($creatoraccessguids)) {
                if (array_key_exists($userguid, $creatoraccessguids)) {
                    unset($userguids[$userguid]);
                }
            }
            // If already has view access, remove view access from folder.
            if (isset($vieweraccessguids)) {
                if (array_key_exists($userguid, $vieweraccessguids)) {
                    $viewerstoremove[$userguid] = $userguid;
                }
            }
        }

        // Removing those with viewer access that will now become creators.
        if (count($viewerstoremove)) {
            try {
                $param = new \Panopto\AccessManagement\RevokeUsersAccessFromFolder($this->auth, $folderid, array_values($viewerstoremove), 'Viewer');
                $this->amclient->RevokeUsersAccessFromFolder($param);
            } catch(Exception $e) {
                throw new SoapFault('client', $e->getMessage());
            }
        }

        // Note: We do not remove creator rights at the moment, as there could be
        // manually enrolled users in Panopto that need to retain access.

        // Grant access.
        try {
            $param = new \Panopto\AccessManagement\GrantUsersAccessToFolder($this->auth, $folderid, array_values($userguids), 'Creator');
            $this->amclient->GrantUsersAccessToFolder($param);
        } catch(Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }
    }

    /**
     * Delete session.
     *
     * @param string $sessionid Remote session id.
     * @param string $externalid External Id of remote recorder.
     * @return bool true.
     */
    function delete_session($sessionid) {
        try {
            $param = new \Panopto\SessionManagement\DeleteSessions($this->auth, array($sessionid));
            $this->smclient->DeleteSessions($param);
        } catch (Exception $e) {
            throw new SoapFault('client', $e->getMessage());
        }
        return true;
    }

    /**
     * Get session by id.
     *
     * @param string $sessionid Remote session id.
     * @return mixed Session object on success, false on failure.
     */
    function get_session_by_id($sessionid) {
        try {
            $param = new \Panopto\SessionManagement\GetSessionsById($this->auth, array($sessionid));
            $sessions = $this->smclient->GetSessionsById($param)->getGetSessionsByIdResult()->getSession();
        } catch (Exception $e) {
            return false;
        }
        if (count($sessions)) {
            return $sessions[0];
        }
        return false;
    }
}
