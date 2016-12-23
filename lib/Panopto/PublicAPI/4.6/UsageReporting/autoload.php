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
        'Panopto\UsageReporting\GetSessionUserDetailedUsageResponse' => __DIR__ .'/GetSessionUserDetailedUsageResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d2d5248853c5b185d5a650a0dcdc77a7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
