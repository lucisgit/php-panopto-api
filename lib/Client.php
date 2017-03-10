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
namespace Panopto;

/**
 * PHP Panopto API client class.
 *
 * @copyright  2017 Lancaster University (http://www.lancaster.ac.uk/)
 * @author     Ruslan Kabalin (https://github.com/kabalin)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class Client {
    /** Current client version in use. */
    const CLIENT_VERSION = '4.6';

    /** @var stdClass Access Management client */
    private $accessmanagementclient = null;

    /** @var stdClass Auth client */
    private $authclient = null;

    /** @var stdClass Remote Recorder Management client */
    private $remoterecordermanagementclient = null;

    /** @var stdClass Session Management client */
    private $sessionmanagementclient = null;

    /** @var stdClass Usage Reporting client */
    private $usagereportingclient = null;

    /** @var stdClass User Management client */
    private $usermanagementclient = null;

    /** @var stdClass AuthenticationInfo object */
    private $authinfo = null;

    /** @var array SOAP options */
    private $soapoptions = array();

    /** @var string SOAP options */
    private $serverhostname = '';

    /** @var array The list of webservices classes */
    private static $classmap = array (
      'AccessManagement' => '\\Panopto\\AccessManagement\\AccessManagement',
      'Auth' => '\\Panopto\\Auth\\Auth',
      'RemoteRecorderManagement' => 'Panopto\\RemoteRecorderManagement\\RemoteRecorderManagement',
      'SessionManagement' => '\\Panopto\\SessionManagement\\SessionManagement',
      'UsageReporting' => '\\Panopto\\UsageReporting\\UsageReporting',
      'UserManagement' => '\\Panopto\\UserManagement\\UserManagement',
    );

    /**
     * Constructor for the Panopto client.
     *
     * @throws \UnexpectedValueException When API classes can't be loaded.
     *
     * @param  string $serverhostname FQDN of your Panopto server, e.g. demo.hosted.panopto.com
     * @param  array $soapoptions Custom SOAP client options to use.
     */
    public function __construct($serverhostname, array $soapoptions = array()) {
        // Define serverhostname.
        $this->serverhostname = $serverhostname;

        // Define SOAP options.
        $this->soapoptions = $soapoptions;

        // Load webservices.
        foreach (array_keys(self::$classmap) as $webservice) {
            $autoload = dirname(__FILE__).'/Panopto/PublicAPI/' . self::CLIENT_VERSION . '/' . $webservice . '/autoload.php';
            if (!is_readable($autoload)) {
                throw new UnexpectedValueException($autoload . ' is not readable, make sure that client for given version exist.');
            }
            require_once($autoload);
        }
    }

    /**
     * Returns AuthenticationInfo object for using in requests.
     *
     * This returns an instance of \Panopto\Auth\AuthenticationInfo that
     * has been pre-configured with provided credentials. You can use it in
     * $auth parameter in all API calls.
     *
     * @return stdClass \Panopto\Auth\AuthenticationInfo instance.
     */
    public function getAuthenticationInfo() {
        return $this->authinfo;
    }

    /**
     * Sets AuthenticationInfo object for using in requests.
     *
     * This creates an instance of \Panopto\Auth\AuthenticationInfo that
     * has been pre-configured with provided credentials.
     *
     * @param string $userkey User on the server to use for API calls. If used with Application Key from Identity Provider, user needs to be preceed with corresponding Instance Name, e.g. 'MyInstanceName\someuser'.
     * @param string $password Password for user authentication (not required if $applicationkey is specified).
     * @param string $applicationkey Application Key value from Identity Provider setting, e.g. '00000000-0000-0000-0000-000000000000'
     *
     */
    public function setAuthenticationInfo($userkey = '', $password = '', $applicationkey = '') {
        // Create AuthenticationInfo instance.
        $this->authinfo = new \Panopto\Auth\AuthenticationInfo();

        // Populate authentication settings.
        if (!empty($userkey)) {
            $this->authinfo->setUserKey($userkey);
        }

        if (!empty($password)) {
            $this->authinfo->setPassword($password);
        } else if (!empty($applicationkey)) {
            $authcode = $this->createAuthCode($userkey, $applicationkey);
            $this->authinfo->setAuthCode($authcode);
        }
    }

    /**
     * Generates authentication code.
     *
     * For using with \Panopto\Auth\AuthenticationInfo.
     *
     * @param string $userkey
     * @param string $applicationkey
     * @return string Authentication code.
     */
    protected function createAuthCode($userkey, $applicationkey) {
        $payload = $userkey . "@" . strtolower($this->serverhostname) . "|" . strtolower($applicationkey);
        return strtoupper(sha1($payload));
    }

    /**
     * Getter function for API interface instances.
     *
     * @throws BadMethodCallException
     * @throws UnexpectedValueException
     *
     * @param string $name webservice name to create interface instance for.
     * @return \Panopto\$name\$name API interface instance.
     */
    public function __call($name, $args)
    {
        $privatevar = strtolower($name) . 'client';

        // Check that requested webservice exist.
        if (!array_key_exists($name, self::$classmap)) {
            throw new BadMethodCallException(sprintf('Undefined method called: "%s"', $name));
        }

        $class = self::$classmap[$name];
        // If instance has been defined, just return it.
        if (isset($this->$privatevar) && ($this->$privatevar instanceof $class)) {
            return $this->$privatevar;
        }

        // If method used the same time, create requested client instance.
        $wsdl = 'https://' . $this->serverhostname . '/Panopto/PublicAPI/' . self::CLIENT_VERSION . '/' . $name . '.svc?wsdl';
        $this->$privatevar = new $class($this->soapoptions, $wsdl);
        return $this->$privatevar;
    }
}
