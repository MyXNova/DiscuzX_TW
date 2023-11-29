<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_namepost.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'namepost_name' => '照妖鏡',
	'namepost_desc' => '可以檢視一次匿名會員的真實身份。',
	'namepost_forum' => '允許使用本道具的版區',
	'namepost_num' => '擁有個數： {magicnum}',
	'namepost_info' => '指定要顯身的文章，請輸入文章的 ID',
	'namepost_info_nonexistence' => '參數錯誤，不能在此使用本道具。',
	'namepost_succeed' => '匿名的會員是 <a title="{username}" href="space.php?uid={uid}" target="_blank"><b>{username}</b></a>',
	'namepost_info_noperm' => '對不起，主題所在版區不允許使用本道具',
	'namepost_info_user_noperm' => '對不起，您不能對此人使用本道具',
	'magic_namepost_succeed' => '匿名的會員是',
);

?>