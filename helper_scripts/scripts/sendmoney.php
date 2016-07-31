<?php 

require_once('../include/env_lib.php');
require_once('../helper/helpers.php');

$send_money = 1000;
$region_server = '202.26.159.214';

if ($send_money>0) {
    if ($region_server=='') $region_server = null;
    $avatars = opensim_get_userinfos();
    //
    foreach ($avatars as $avatar) {
        if ($avatar['type']=='0') {
			$ret = send_money($avatar['UUID'], $send_money, $region_server);
		}
	}
}

