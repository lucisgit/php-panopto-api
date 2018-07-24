<?php


 function autoload_d2d5248853c5b185d5a650a0dcdc77a7($class)
{
    $classes = array(
        'Panopto\UsageReporting\UsageReporting' => __DIR__ .'/UsageReporting.php',
        'Panopto\UsageReporting\AuthenticationInfo' => __DIR__ .'/AuthenticationInfo.php',
        'Panopto\UsageReporting\UsageGranularity' => __DIR__ .'/UsageGranularity.php',
        'Panopto\UsageReporting\ArrayOfSummaryUsageResponseItem' => __DIR__ .'/ArrayOfSummaryUsageResponseItem.php',
        'Panopto\UsageReporting\SummaryUsageResponseItem' => __DIR__ .'/SummaryUsageResponseItem.php',
        'Panopto\UsageReporting\Pagination' => __DIR__ .'/Pagination.php',
        'Panopto\UsageReporting\DetailedUsageResponse' => __DIR__ .'/DetailedUsageResponse.php',
        'Panopto\UsageReporting\ArrayOfDetailedUsageResponseItem' => __DIR__ .'/ArrayOfDetailedUsageResponseItem.php',
        'Panopto\UsageReporting\DetailedUsageResponseItem' => __DIR__ .'/DetailedUsageResponseItem.php',
        'Panopto\UsageReporting\ArrayOfStatsReportType' => __DIR__ .'/ArrayOfStatsReportType.php',
        'Panopto\UsageReporting\StatsReportType' => __DIR__ .'/StatsReportType.php',
        'Panopto\UsageReporting\ArrayOfStatsReportStatus' => __DIR__ .'/ArrayOfStatsReportStatus.php',
        'Panopto\UsageReporting\StatsReportStatus' => __DIR__ .'/StatsReportStatus.php',
        'Panopto\UsageReporting\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'Panopto\UsageReporting\GetSystemSummaryUsage' => __DIR__ .'/GetSystemSummaryUsage.php',
        'Panopto\UsageReporting\GetSystemSummaryUsageResponse' => __DIR__ .'/GetSystemSummaryUsageResponse.php',
        'Panopto\UsageReporting\GetFolderSummaryUsage' => __DIR__ .'/GetFolderSummaryUsage.php',
        'Panopto\UsageReporting\GetFolderSummaryUsageResponse' => __DIR__ .'/GetFolderSummaryUsageResponse.php',
        'Panopto\UsageReporting\GetSessionSummaryUsage' => __DIR__ .'/GetSessionSummaryUsage.php',
        'Panopto\UsageReporting\GetSessionSummaryUsageResponse' => __DIR__ .'/GetSessionSummaryUsageResponse.php',
        'Panopto\UsageReporting\GetSessionDetailedUsage' => __DIR__ .'/GetSessionDetailedUsage.php',
        'Panopto\UsageReporting\GetSessionDetailedUsageResponse' => __DIR__ .'/GetSessionDetailedUsageResponse.php',
        'Panopto\UsageReporting\GetUserDetailedUsage' => __DIR__ .'/GetUserDetailedUsage.php',
        'Panopto\UsageReporting\GetUserDetailedUsageResponse' => __DIR__ .'/GetUserDetailedUsageResponse.php',
        'Panopto\UsageReporting\GetSessionUserDetailedUsage' => __DIR__ .'/GetSessionUserDetailedUsage.php',
        'Panopto\UsageReporting\GetSessionUserDetailedUsageResponse' => __DIR__ .'/GetSessionUserDetailedUsageResponse.php',
        'Panopto\UsageReporting\DescribeReportTypes' => __DIR__ .'/DescribeReportTypes.php',
        'Panopto\UsageReporting\DescribeReportTypesResponse' => __DIR__ .'/DescribeReportTypesResponse.php',
        'Panopto\UsageReporting\DescribeReportType' => __DIR__ .'/DescribeReportType.php',
        'Panopto\UsageReporting\DescribeReportTypeResponse' => __DIR__ .'/DescribeReportTypeResponse.php',
        'Panopto\UsageReporting\GetRecentReports' => __DIR__ .'/GetRecentReports.php',
        'Panopto\UsageReporting\GetRecentReportsResponse' => __DIR__ .'/GetRecentReportsResponse.php',
        'Panopto\UsageReporting\QueueReport' => __DIR__ .'/QueueReport.php',
        'Panopto\UsageReporting\QueueReportResponse' => __DIR__ .'/QueueReportResponse.php',
        'Panopto\UsageReporting\GetReport' => __DIR__ .'/GetReport.php',
        'Panopto\UsageReporting\GetReportResponse' => __DIR__ .'/GetReportResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d2d5248853c5b185d5a650a0dcdc77a7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
