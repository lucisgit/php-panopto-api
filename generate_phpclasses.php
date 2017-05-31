<?php

/*
 * Panopto PHP classes generator.
 * 
 * This script is using WSDL to PHP classes converter tool
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

// Set defaults.
$server = 'demo.hosted.panopto.com';
$version = '4.6';

// CLI options.
$options = getopt("h", array('host:', 'apiversion:', 'help'));

// Checking util.php CLI script usage.
$help = <<<HELP

Panopto PHP classes generator.

This script is generating PHP classess for Panopto API web services using WSDL interface.

Usage:
  php generate_phpclasses.php [-h|--help] [--host=value] [--apiversion=value]

Options:
--host       Hostname to use for WSDL endpoints (default: $server).
--apiversion API version to use (default: $version).

-h, --help       Print out this help

Example usage:
\$ php generate_phpclasses.php --host=panopto.host.org --apiversion=4.6

The above command will generate PHP classes in ./lib/Panopto/PublicAPI/4.6/ directory.

HELP;

// Read CLI options.
if (isset($options['help']) || isset($options['h'])) {
    echo $help;
    exit(0);
}

if (!empty($options['host'])) {
    $server = $options['host'];
}

if (!empty($options['apiversion'])) {
    $version = $options['apiversion'];
}

// Generate classes.
$destination = __DIR__.'/lib/Panopto/PublicAPI/' . $version;

$webservices = array(
    'AccessManagement',
    'Auth',
    'RemoteRecorderManagement',
    'SessionManagement',
    'UsageReporting',
    'UserManagement',
);

echo 'Using https://' . $server . '/Panopto/PublicAPI/' . $version . "/ for webservices interface.\n";

foreach ($webservices as $webservice) {
    echo "Generating \Panopto\\" . $webservice . " classes...\n";
    $generatorconfig = array(
        'inputFile' => 'https://' . $server . '/Panopto/PublicAPI/' . $version . '/' . $webservice . '.svc?wsdl',
        'outputDir' => $destination . '/' . $webservice,
        'namespaceName' => 'Panopto\\' . $webservice,
    );

    $generator->generate(new \Wsdl2PhpGenerator\Config($generatorconfig));
}

// Display version of the server.
require_once($destination . '/Auth/autoload.php');
$wsdl = 'https://' . $server . '/Panopto/PublicAPI/' . $version . '/Auth.svc?wsdl';
$authclient = new \Panopto\Auth\Auth(array(), $wsdl);
$param = new \Panopto\Auth\GetServerVersion();
$version = $authclient->GetServerVersion($param)->getGetServerVersionResult();

echo "\nServer $server is running Panopto version ${version}\n";

echo "\nPHP classess have been sucessfully generated using Panopto API WSDL. Use " . $destination . "/<webservice>/autoload.php in your project. Check Readme file for more information on usage.\n";
exit(0);

