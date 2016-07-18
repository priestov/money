<?php
//
// Environment Library for non Web Interface
//							 				by Fumi.Iseki
//
//

if (!defined('ENV_READ_CONFIG')) require_once(realpath(dirname(__FILE__).'/config.php'));
if (!defined('ENV_READ_DEFINE')) require_once(realpath(ENV_HELPER_PATH.'/../include/env_define.php'));

require_once(realpath(ENV_HELPER_PATH.'/../include/tools.func.php'));
require_once(realpath(ENV_HELPER_PATH.'/../include/mysql.func.php'));
require_once(realpath(ENV_HELPER_PATH.'/../include/opensim.mysql.php'));


//
if (HELPER_DB_HOST!='') {
	define('CMS_DB_HOST',   HELPER_DB_HOST);
	define('CMS_DB_NAME',   HELPER_DB_NAME);
	define('CMS_DB_USER',   HELPER_DB_USER);
	define('CMS_DB_PASS',   HELPER_DB_PASS);
	define('CMS_DB_MYSQLI', HELPER_DB_MYSQLI);
}


/////////////////////////////////////////////////////////////////////////////////
// Functions
//
function  env_get_user_email($uid)
{
	return "";
}


//
// Config Value
//
$env_config["currency_script_key"] = CURRENCY_SCRIPT_KEY;


function  env_get_config($name)
{
	global $env_config;

	return $env_config[$name];
}



////////////////////////////////////////////////////////////
// for Login Page

if (isset($LOGINPAGE) and $LOGINPAGE)
{
	$LOGIN_SCREEN_CONTENT = 'Welcome to My Grid';

	$BOX_TITLE        = 'Attention';
	$BOX_COLOR        = 'red';
	$BOX_INFOTEXT     = 'please rewrite env_lib.php';

	$GRID_NAME        = 'My Grid';
	$REGION_TTL       = 'My Regions';

	$DB_STATUS_TTL    = 'DB Status';
	$ONLINE           = ' ONLINE ';
	$OFFLINE          = ' OFFLINE ';
	$TOTAL_USER_TTL   = 'Total Users';
	$TOTAL_REGION_TTL = 'Total Regions';
	$LAST_USERS_TTL   = 'Visitors last 30 days';
	$ONLINE_TTL       = 'Online Now';
	$HG_ONLINE_TTL    = 'Online HG';
}


