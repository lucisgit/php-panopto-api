<?php

namespace Panopto\UsageReporting;

class UsageReporting extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationInfo' => 'Panopto\\UsageReporting\\AuthenticationInfo',
      'ArrayOfSummaryUsageResponseItem' => 'Panopto\\UsageReporting\\ArrayOfSummaryUsageResponseItem',
      'SummaryUsageResponseItem' => 'Panopto\\UsageReporting\\SummaryUsageResponseItem',
      'Pagination' => 'Panopto\\UsageReporting\\Pagination',
      'DetailedUsageResponse' => 'Panopto\\UsageReporting\\DetailedUsageResponse',
      'ArrayOfDetailedUsageResponseItem' => 'Panopto\\UsageReporting\\ArrayOfDetailedUsageResponseItem',
      'DetailedUsageResponseItem' => 'Panopto\\UsageReporting\\DetailedUsageResponseItem',
      'ArrayOfStatsReportType' => 'Panopto\\UsageReporting\\ArrayOfStatsReportType',
      'ArrayOfStatsReportStatus' => 'Panopto\\UsageReporting\\ArrayOfStatsReportStatus',
      'StatsReportStatus' => 'Panopto\\UsageReporting\\StatsReportStatus',
      'ArrayOfstring' => 'Panopto\\UsageReporting\\ArrayOfstring',
      'GetSystemSummaryUsage' => 'Panopto\\UsageReporting\\GetSystemSummaryUsage',
      'GetSystemSummaryUsageResponse' => 'Panopto\\UsageReporting\\GetSystemSummaryUsageResponse',
      'GetFolderSummaryUsage' => 'Panopto\\UsageReporting\\GetFolderSummaryUsage',
      'GetFolderSummaryUsageResponse' => 'Panopto\\UsageReporting\\GetFolderSummaryUsageResponse',
      'GetSessionSummaryUsage' => 'Panopto\\UsageReporting\\GetSessionSummaryUsage',
      'GetSessionSummaryUsageResponse' => 'Panopto\\UsageReporting\\GetSessionSummaryUsageResponse',
      'GetSessionDetailedUsage' => 'Panopto\\UsageReporting\\GetSessionDetailedUsage',
      'GetSessionDetailedUsageResponse' => 'Panopto\\UsageReporting\\GetSessionDetailedUsageResponse',
      'GetUserDetailedUsage' => 'Panopto\\UsageReporting\\GetUserDetailedUsage',
      'GetUserDetailedUsageResponse' => 'Panopto\\UsageReporting\\GetUserDetailedUsageResponse',
      'GetSessionUserDetailedUsage' => 'Panopto\\UsageReporting\\GetSessionUserDetailedUsage',
      'GetSessionUserDetailedUsageResponse' => 'Panopto\\UsageReporting\\GetSessionUserDetailedUsageResponse',
      'DescribeReportTypes' => 'Panopto\\UsageReporting\\DescribeReportTypes',
      'DescribeReportTypesResponse' => 'Panopto\\UsageReporting\\DescribeReportTypesResponse',
      'DescribeReportType' => 'Panopto\\UsageReporting\\DescribeReportType',
      'DescribeReportTypeResponse' => 'Panopto\\UsageReporting\\DescribeReportTypeResponse',
      'GetRecentReports' => 'Panopto\\UsageReporting\\GetRecentReports',
      'GetRecentReportsResponse' => 'Panopto\\UsageReporting\\GetRecentReportsResponse',
      'QueueReport' => 'Panopto\\UsageReporting\\QueueReport',
      'QueueReportResponse' => 'Panopto\\UsageReporting\\QueueReportResponse',
      'GetReport' => 'Panopto\\UsageReporting\\GetReport',
      'GetReportResponse' => 'Panopto\\UsageReporting\\GetReportResponse',
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
        $wsdl = 'https://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/UsageReporting.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetSystemSummaryUsage $parameters
     * @return GetSystemSummaryUsageResponse
     */
    public function GetSystemSummaryUsage(GetSystemSummaryUsage $parameters)
    {
      return $this->__soapCall('GetSystemSummaryUsage', array($parameters));
    }

    /**
     * @param GetFolderSummaryUsage $parameters
     * @return GetFolderSummaryUsageResponse
     */
    public function GetFolderSummaryUsage(GetFolderSummaryUsage $parameters)
    {
      return $this->__soapCall('GetFolderSummaryUsage', array($parameters));
    }

    /**
     * @param GetSessionSummaryUsage $parameters
     * @return GetSessionSummaryUsageResponse
     */
    public function GetSessionSummaryUsage(GetSessionSummaryUsage $parameters)
    {
      return $this->__soapCall('GetSessionSummaryUsage', array($parameters));
    }

    /**
     * @param GetSessionDetailedUsage $parameters
     * @return GetSessionDetailedUsageResponse
     */
    public function GetSessionDetailedUsage(GetSessionDetailedUsage $parameters)
    {
      return $this->__soapCall('GetSessionDetailedUsage', array($parameters));
    }

    /**
     * @param GetUserDetailedUsage $parameters
     * @return GetUserDetailedUsageResponse
     */
    public function GetUserDetailedUsage(GetUserDetailedUsage $parameters)
    {
      return $this->__soapCall('GetUserDetailedUsage', array($parameters));
    }

    /**
     * @param GetSessionUserDetailedUsage $parameters
     * @return GetSessionUserDetailedUsageResponse
     */
    public function GetSessionUserDetailedUsage(GetSessionUserDetailedUsage $parameters)
    {
      return $this->__soapCall('GetSessionUserDetailedUsage', array($parameters));
    }

    /**
     * @param DescribeReportTypes $parameters
     * @return DescribeReportTypesResponse
     */
    public function DescribeReportTypes(DescribeReportTypes $parameters)
    {
      return $this->__soapCall('DescribeReportTypes', array($parameters));
    }

    /**
     * @param DescribeReportType $parameters
     * @return DescribeReportTypeResponse
     */
    public function DescribeReportType(DescribeReportType $parameters)
    {
      return $this->__soapCall('DescribeReportType', array($parameters));
    }

    /**
     * @param GetRecentReports $parameters
     * @return GetRecentReportsResponse
     */
    public function GetRecentReports(GetRecentReports $parameters)
    {
      return $this->__soapCall('GetRecentReports', array($parameters));
    }

    /**
     * @param QueueReport $parameters
     * @return QueueReportResponse
     */
    public function QueueReport(QueueReport $parameters)
    {
      return $this->__soapCall('QueueReport', array($parameters));
    }

    /**
     * @param GetReport $parameters
     * @return GetReportResponse
     */
    public function GetReport(GetReport $parameters)
    {
      return $this->__soapCall('GetReport', array($parameters));
    }

}
