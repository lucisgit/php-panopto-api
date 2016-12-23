<?php

/*
 * Panopto PHP classes generator.
 *
 * This tool is using WSDL to PHP classes converter tool
 * (https://github.com/wsdl2phpgenerator/wsdl2phpgenerator) to
 * generate PHP classess for Panopto API web services use.
 */


if (isset($_SERVER['REMOTE_ADDR'])) {
    die; // no access from web!
}

if (file_exists(__DIR__.'/vendor/autoload.php')) {
    require_once(__DIR__.'/vendor/autoload.php');
    $generator = new \Wsdl2PhpGenerator\Generator();
} else {
    echo "Composer dependencies seem missing, run 'php composer.phar install' in the current directory.\n";
    die;
}

$server = 'demo.hosted.panopto.com';
$version = '4.6';

$webservices = array(
    'AccessManagement',
    'Auth',
    'RemoteRecorderManagement',
    'SessionManagement',
    'UsageReporting',
    'UserManagement',
);

echo 'Using https://' . $server . '/Panopto/PublicAPI/' . $version . "/ for WSDL endpoints.\n";
foreach ($webservices as $webservice) {
    echo "Generating \Panopto\\" . $webservice . " classes...\n";
    $generatorconfig = array(
        'inputFile' => 'https://' . $server . '/Panopto/PublicAPI/' . $version . '/' . $webservice . '.svc?wsdl',
        'outputDir' => __DIR__.'/lib/Panopto/PublicAPI/' . $version . '/' . $webservice,
        'namespaceName' => 'Panopto\\' . $webservice,
    );

    $generator->generate(new \Wsdl2PhpGenerator\Config($generatorconfig));
}

echo "\nPHP classess have been generated from Panopto API. Use lib/Panopto/PublicAPI/" . $version . "/<webservice>/autoload.php in your project.\n";
exit(0);
