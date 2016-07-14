<?php
//
// Configration file for non Web Interface
//

// Please set this hepler script URL and directory

if (!defined('ENV_HELPER_URL'))  define('ENV_HELPER_URL',  'http://opensim.tuis.ac.jp/helper_scripts/helper');
//if (!defined('ENV_HELPER_PATH')) define('ENV_HELPER_PATH', '/var/www/html/helper_scripts/helper');
if (!defined('ENV_HELPER_PATH')) define('ENV_HELPER_PATH', '/home/apache/htdocs/helper_scripts/helper');



//////////////////////////////////////////////////////////////////////////////////i
// Valiables for OpenSim

// Please set MySQL DB access information
define('OPENSIM_DB_HOST',  'localhost');
define('OPENSIM_DB_NAME',  'opensim');
define('OPENSIM_DB_USER',  'OpensimUser');
define('OPENSIM_DB_PASS',  'OpensimPass');
define('OPENSIM_DB_MYSQLI', 1);

// for Money Server
define('USE_CURRENCY_SERVER', 1);

// Money Server Access Key
// Please set same key with MoneyScriptAccessKey in MoneyServer.ini
define('CURRENCY_SCRIPT_KEY', '123456789');

// Group Module Access Keys
// Please set same keys with at [Groups] section in OpenSim.ini (case of Aurora-Sim, it is Groups.ini)
define('XMLGROUP_RKEY',  '1234');	// Read Key
define('XMLGROUP_WKEY',  '1234');	// Write key

//
define('OPENSIM_PG_ONLY', 0);

define('USE_UTC_TIME',	  0);
define('DATE_FORMAT', 'd.m.Y - H:i');



//////////////////////////////////////////////////////////////////////////////////
// System
 
define('SYSURL', ENV_HELPER_URL);
$GLOBALS['xmlrpc_internalencoding'] = 'UTF-8';

if (USE_UTC_TIME) date_default_timezone_set('UTC');



//
if (!defined('ENV_READ_CONFIG')) define('ENV_READ_CONFIG', 'YES');

