<?php

namespace Panopto\UserManagement;

class UserManagement extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfguid' => 'Panopto\\UserManagement\\ArrayOfguid',
      'ArrayOfstring' => 'Panopto\\UserManagement\\ArrayOfstring',
      'AuthenticationInfo' => 'Panopto\\UserManagement\\AuthenticationInfo',
      'User' => 'Panopto\\UserManagement\\User',
      'ArrayOfUser' => 'Panopto\\UserManagement\\ArrayOfUser',
      'ListUsersRequest' => 'Panopto\\UserManagement\\ListUsersRequest',
      'Pagination' => 'Panopto\\UserManagement\\Pagination',
      'ListUsersResponse' => 'Panopto\\UserManagement\\ListUsersResponse',
      'Group' => 'Panopto\\UserManagement\\Group',
      'ListGroupsResponse' => 'Panopto\\UserManagement\\ListGroupsResponse',
      'ArrayOfGroup' => 'Panopto\\UserManagement\\ArrayOfGroup',
      'CreateUser' => 'Panopto\\UserManagement\\CreateUser',
      'CreateUserResponse' => 'Panopto\\UserManagement\\CreateUserResponse',
      'CreateUsers' => 'Panopto\\UserManagement\\CreateUsers',
      'CreateUsersResponse' => 'Panopto\\UserManagement\\CreateUsersResponse',
      'GetUserByKey' => 'Panopto\\UserManagement\\GetUserByKey',
      'GetUserByKeyResponse' => 'Panopto\\UserManagement\\GetUserByKeyResponse',
      'GetUsers' => 'Panopto\\UserManagement\\GetUsers',
      'GetUsersResponse' => 'Panopto\\UserManagement\\GetUsersResponse',
      'ListUsers' => 'Panopto\\UserManagement\\ListUsers',
      'UpdateContactInfo' => 'Panopto\\UserManagement\\UpdateContactInfo',
      'UpdateContactInfoResponse' => 'Panopto\\UserManagement\\UpdateContactInfoResponse',
      'UpdateUserBio' => 'Panopto\\UserManagement\\UpdateUserBio',
      'UpdateUserBioResponse' => 'Panopto\\UserManagement\\UpdateUserBioResponse',
      'UpdatePassword' => 'Panopto\\UserManagement\\UpdatePassword',
      'UpdatePasswordResponse' => 'Panopto\\UserManagement\\UpdatePasswordResponse',
      'ResetPassword' => 'Panopto\\UserManagement\\ResetPassword',
      'ResetPasswordResponse' => 'Panopto\\UserManagement\\ResetPasswordResponse',
      'UnlockAccount' => 'Panopto\\UserManagement\\UnlockAccount',
      'UnlockAccountResponse' => 'Panopto\\UserManagement\\UnlockAccountResponse',
      'SetSystemRole' => 'Panopto\\UserManagement\\SetSystemRole',
      'SetSystemRoleResponse' => 'Panopto\\UserManagement\\SetSystemRoleResponse',
      'DeleteUsers' => 'Panopto\\UserManagement\\DeleteUsers',
      'DeleteUsersResponse' => 'Panopto\\UserManagement\\DeleteUsersResponse',
      'CreateInternalGroup' => 'Panopto\\UserManagement\\CreateInternalGroup',
      'CreateInternalGroupResponse' => 'Panopto\\UserManagement\\CreateInternalGroupResponse',
      'GetGroupIsPublic' => 'Panopto\\UserManagement\\GetGroupIsPublic',
      'GetGroupIsPublicResponse' => 'Panopto\\UserManagement\\GetGroupIsPublicResponse',
      'SetGroupIsPublic' => 'Panopto\\UserManagement\\SetGroupIsPublic',
      'SetGroupIsPublicResponse' => 'Panopto\\UserManagement\\SetGroupIsPublicResponse',
      'CreateExternalGroup' => 'Panopto\\UserManagement\\CreateExternalGroup',
      'CreateExternalGroupResponse' => 'Panopto\\UserManagement\\CreateExternalGroupResponse',
      'AddMembersToInternalGroup' => 'Panopto\\UserManagement\\AddMembersToInternalGroup',
      'AddMembersToInternalGroupResponse' => 'Panopto\\UserManagement\\AddMembersToInternalGroupResponse',
      'RemoveMembersFromInternalGroup' => 'Panopto\\UserManagement\\RemoveMembersFromInternalGroup',
      'RemoveMembersFromInternalGroupResponse' => 'Panopto\\UserManagement\\RemoveMembersFromInternalGroupResponse',
      'AddMembersToExternalGroup' => 'Panopto\\UserManagement\\AddMembersToExternalGroup',
      'AddMembersToExternalGroupResponse' => 'Panopto\\UserManagement\\AddMembersToExternalGroupResponse',
      'RemoveMembersFromExternalGroup' => 'Panopto\\UserManagement\\RemoveMembersFromExternalGroup',
      'RemoveMembersFromExternalGroupResponse' => 'Panopto\\UserManagement\\RemoveMembersFromExternalGroupResponse',
      'SyncExternalUser' => 'Panopto\\UserManagement\\SyncExternalUser',
      'SyncExternalUserResponse' => 'Panopto\\UserManagement\\SyncExternalUserResponse',
      'DeleteGroup' => 'Panopto\\UserManagement\\DeleteGroup',
      'DeleteGroupResponse' => 'Panopto\\UserManagement\\DeleteGroupResponse',
      'GetGroup' => 'Panopto\\UserManagement\\GetGroup',
      'GetGroupResponse' => 'Panopto\\UserManagement\\GetGroupResponse',
      'ListGroups' => 'Panopto\\UserManagement\\ListGroups',
      'GetGroupsByName' => 'Panopto\\UserManagement\\GetGroupsByName',
      'GetGroupsByNameResponse' => 'Panopto\\UserManagement\\GetGroupsByNameResponse',
      'GetUsersInGroup' => 'Panopto\\UserManagement\\GetUsersInGroup',
      'GetUsersInGroupResponse' => 'Panopto\\UserManagement\\GetUsersInGroupResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UserManagement.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param CreateUser $parameters
     * @return CreateUserResponse
     */
    public function CreateUser(CreateUser $parameters)
    {
      return $this->__soapCall('CreateUser', array($parameters));
    }

    /**
     * @param CreateUsers $parameters
     * @return CreateUsersResponse
     */
    public function CreateUsers(CreateUsers $parameters)
    {
      return $this->__soapCall('CreateUsers', array($parameters));
    }

    /**
     * @param GetUserByKey $parameters
     * @return GetUserByKeyResponse
     */
    public function GetUserByKey(GetUserByKey $parameters)
    {
      return $this->__soapCall('GetUserByKey', array($parameters));
    }

    /**
     * @param GetUsers $parameters
     * @return GetUsersResponse
     */
    public function GetUsers(GetUsers $parameters)
    {
      return $this->__soapCall('GetUsers', array($parameters));
    }

    /**
     * @param ListUsers $parameters
     * @return ListUsersResponse
     */
    public function ListUsers(ListUsers $parameters)
    {
      return $this->__soapCall('ListUsers', array($parameters));
    }

    /**
     * @param UpdateContactInfo $parameters
     * @return UpdateContactInfoResponse
     */
    public function UpdateContactInfo(UpdateContactInfo $parameters)
    {
      return $this->__soapCall('UpdateContactInfo', array($parameters));
    }

    /**
     * @param UpdateUserBio $parameters
     * @return UpdateUserBioResponse
     */
    public function UpdateUserBio(UpdateUserBio $parameters)
    {
      return $this->__soapCall('UpdateUserBio', array($parameters));
    }

    /**
     * @param UpdatePassword $parameters
     * @return UpdatePasswordResponse
     */
    public function UpdatePassword(UpdatePassword $parameters)
    {
      return $this->__soapCall('UpdatePassword', array($parameters));
    }

    /**
     * @param ResetPassword $parameters
     * @return ResetPasswordResponse
     */
    public function ResetPassword(ResetPassword $parameters)
    {
      return $this->__soapCall('ResetPassword', array($parameters));
    }

    /**
     * @param UnlockAccount $parameters
     * @return UnlockAccountResponse
     */
    public function UnlockAccount(UnlockAccount $parameters)
    {
      return $this->__soapCall('UnlockAccount', array($parameters));
    }

    /**
     * @param SetSystemRole $parameters
     * @return SetSystemRoleResponse
     */
    public function SetSystemRole(SetSystemRole $parameters)
    {
      return $this->__soapCall('SetSystemRole', array($parameters));
    }

    /**
     * @param DeleteUsers $parameters
     * @return DeleteUsersResponse
     */
    public function DeleteUsers(DeleteUsers $parameters)
    {
      return $this->__soapCall('DeleteUsers', array($parameters));
    }

    /**
     * @param CreateInternalGroup $parameters
     * @return CreateInternalGroupResponse
     */
    public function CreateInternalGroup(CreateInternalGroup $parameters)
    {
      return $this->__soapCall('CreateInternalGroup', array($parameters));
    }

    /**
     * @param GetGroupIsPublic $parameters
     * @return GetGroupIsPublicResponse
     */
    public function GetGroupIsPublic(GetGroupIsPublic $parameters)
    {
      return $this->__soapCall('GetGroupIsPublic', array($parameters));
    }

    /**
     * @param SetGroupIsPublic $parameters
     * @return SetGroupIsPublicResponse
     */
    public function SetGroupIsPublic(SetGroupIsPublic $parameters)
    {
      return $this->__soapCall('SetGroupIsPublic', array($parameters));
    }

    /**
     * @param CreateExternalGroup $parameters
     * @return CreateExternalGroupResponse
     */
    public function CreateExternalGroup(CreateExternalGroup $parameters)
    {
      return $this->__soapCall('CreateExternalGroup', array($parameters));
    }

    /**
     * @param AddMembersToInternalGroup $parameters
     * @return AddMembersToInternalGroupResponse
     */
    public function AddMembersToInternalGroup(AddMembersToInternalGroup $parameters)
    {
      return $this->__soapCall('AddMembersToInternalGroup', array($parameters));
    }

    /**
     * @param RemoveMembersFromInternalGroup $parameters
     * @return RemoveMembersFromInternalGroupResponse
     */
    public function RemoveMembersFromInternalGroup(RemoveMembersFromInternalGroup $parameters)
    {
      return $this->__soapCall('RemoveMembersFromInternalGroup', array($parameters));
    }

    /**
     * @param AddMembersToExternalGroup $parameters
     * @return AddMembersToExternalGroupResponse
     */
    public function AddMembersToExternalGroup(AddMembersToExternalGroup $parameters)
    {
      return $this->__soapCall('AddMembersToExternalGroup', array($parameters));
    }

    /**
     * @param RemoveMembersFromExternalGroup $parameters
     * @return RemoveMembersFromExternalGroupResponse
     */
    public function RemoveMembersFromExternalGroup(RemoveMembersFromExternalGroup $parameters)
    {
      return $this->__soapCall('RemoveMembersFromExternalGroup', array($parameters));
    }

    /**
     * @param SyncExternalUser $parameters
     * @return SyncExternalUserResponse
     */
    public function SyncExternalUser(SyncExternalUser $parameters)
    {
      return $this->__soapCall('SyncExternalUser', array($parameters));
    }

    /**
     * @param DeleteGroup $parameters
     * @return DeleteGroupResponse
     */
    public function DeleteGroup(DeleteGroup $parameters)
    {
      return $this->__soapCall('DeleteGroup', array($parameters));
    }

    /**
     * @param GetGroup $parameters
     * @return GetGroupResponse
     */
    public function GetGroup(GetGroup $parameters)
    {
      return $this->__soapCall('GetGroup', array($parameters));
    }

    /**
     * @param ListGroups $parameters
     * @return ListGroupsResponse
     */
    public function ListGroups(ListGroups $parameters)
    {
      return $this->__soapCall('ListGroups', array($parameters));
    }

    /**
     * @param GetGroupsByName $parameters
     * @return GetGroupsByNameResponse
     */
    public function GetGroupsByName(GetGroupsByName $parameters)
    {
      return $this->__soapCall('GetGroupsByName', array($parameters));
    }

    /**
     * @param GetUsersInGroup $parameters
     * @return GetUsersInGroupResponse
     */
    public function GetUsersInGroup(GetUsersInGroup $parameters)
    {
      return $this->__soapCall('GetUsersInGroup', array($parameters));
    }

}
