<?php
//
// Environment Interface for non Web Interface
//								by Fumi.Iseki
//
//

if (!defined('ENV_READ_CONFIG')) require_once(realpath(dirname(__FILE__).'/config.php'));
if ( defined('ENV_READ_DEFINE')) return;


// encode
$GLOBALS['xmlrpc_internalencoding'] = 'UTF-8';



//
if (!defined('ENV_READ_DEFINE')) define('ENV_READ_DEFINE', 'YES');

