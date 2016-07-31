<?php
//
// Environment Interface for non Web Interface
//								by Fumi.Iseki
//
//

if (!defined('ENV_READ_CONFIG')) require_once(realpath(dirname(__FILE__).'/../include/config.php'));
if ( defined('ENV_READ_DEFINE')) return;

$groups_config  = realpath(ENV_HELPER_PATH.'/../include/xmlgroups_config.php');
$profile_config = realpath(ENV_HELPER_PATH.'/../include/profile_config.php');
$search_sonfig  = realpath(ENV_HELPER_PATH.'/../include/search_config.php');
if ($groups_config!='')  require_once($groups_config);
if ($profile_config!='') require_once($profile_config);
if ($search_config!='')  require_once($search_config);



//////////////////////////////////////////////////////////////////////////////////

// Offline Message
if (defined('HELPER_DB_NAME') and HELPER_DB_NAME!='') {
    $OFFLINE_DB_HOST   = HELPER_DB_HOST;
    $OFFLINE_DB_NAME   = HELPER_DB_NAME;
    $OFFLINE_DB_USER   = HELPER_DB_USER;
    $OFFLINE_DB_PASS   = HELPER_DB_PASS;
    $OFFLINE_DB_MYSQLI = HELPER_DB_MYSQLI;
}
else {
    $OFFLINE_DB_HOST   = OPENSIM_DB_HOST;
    $OFFLINE_DB_NAME   = OPENSIM_DB_NAME;
    $OFFLINE_DB_USER   = OPENSIM_DB_USER;
    $OFFLINE_DB_PASS   = OPENSIM_DB_PASS;
    $OFFLINE_DB_MYSQLI = OPENSIM_DB_MYSQLI;
}

// MuteList
$MUTE_DB_HOST      = $OFFLINE_DB_HOST;
$MUTE_DB_NAME      = $OFFLINE_DB_NAME;
$MUTE_DB_USER      = $OFFLINE_DB_USER;
$MUTE_DB_PASS      = $OFFLINE_DB_PASS;
$MUTE_DB_MYSQLI    = $OFFLINE_DB_MYSQLI;



//////////////////////////////////////////////////////////////////////////////////
// DB Table Name

// Offline Message and MuteList
define('OFFLINE_MESSAGE_TBL',           'offline_message');
define('MUTE_LIST_TBL',                 'mute_list');

// XML Group.  see also xmlgroups_config.php 
if (defined('XMLGROUP_ACTIVE_TBL_BASE')) {
	define('XMLGROUP_ACTIVE_TBL',       XMLGROUP_ACTIVE_TBL_BASE);
	define('XMLGROUP_LIST_TBL',         XMLGROUP_LIST_TBL_BASE);
	define('XMLGROUP_INVITE_TBL',       XMLGROUP_INVITE_TBL_BASE);
	define('XMLGROUP_MEMBERSHIP_TBL',   XMLGROUP_MEMBERSHIP_TBL_BASE);
	define('XMLGROUP_NOTICE_TBL',       XMLGROUP_NOTICE_TBL_BASE);
	define('XMLGROUP_ROLE_MEMBER_TBL',  XMLGROUP_ROLE_MEMBER_TBL_BASE);
	define('XMLGROUP_ROLE_TBL',         XMLGROUP_ROLE_TBL_BASE);
}

// Avatar Profile. see also profile_config.php 
if (defined('PROFILE_CLASSIFIEDS_TBL_BASE')) {
	define('PROFILE_CLASSIFIEDS_TBL',   PROFILE_CLASSIFIEDS_TBL_BASE);
	define('PROFILE_USERNOTES_TBL',     PROFILE_USERNOTES_TBL_BASE);
	define('PROFILE_USERPICKS_TBL',     PROFILE_USERPICKS_TBL_BASE);
	define('PROFILE_USERPROFILE_TBL',   PROFILE_USERPROFILE_TBL_BASE);
	define('PROFILE_USERSETTINGS_TBL',  PROFILE_USERSETTINGS_TBL_BASE);
}

// Search the In World. see also search_config.php 
if (defined('SEARCH_ALLPARCELS_TBL_BASE')) {
	define('SEARCH_ALLPARCELS_TBL',     SEARCH_ALLPARCELS_TBL_BASE);
	define('SEARCH_EVENTS_TBL',         SEARCH_EVENTS_TBL_BASE);
	define('SEARCH_HOSTSREGISTER_TBL',  SEARCH_HOSTSREGISTER_TBL_BASE);
	define('SEARCH_OBJECTS_TBL',        SEARCH_OBJECTS_TBL_BASE);
	define('SEARCH_PARCELS_TBL',        SEARCH_PARCELS_TBL_BASE);
	define('SEARCH_PARCELSALES_TBL',    SEARCH_PARCELSALES_TBL_BASE);
	define('SEARCH_POPULARPLACES_TBL',  SEARCH_POPULARPLACES_TBL_BASE);
	define('SEARCH_REGIONS_TBL',        SEARCH_REGIONS_TBL_BASE);
	if (defined('PROFILE_CLASSIFIEDS_TBL')) {
		define('SEARCH_CLASSIFIEDS_TBL',PROFILE_CLASSIFIEDS_TBL);
	}
}


//
if (!defined('ENV_READ_DEFINE')) define('ENV_READ_DEFINE', 'YES');

