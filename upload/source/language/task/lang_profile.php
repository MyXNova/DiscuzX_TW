<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_profile.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'profile_name' => '完善會員資料任務',
	'profile_desc' => '完善指定的會員資料獲得對應的獎勵',

	'profile_view' => '<strong>您還有以下個人資料項需要補充完整：</strong><br>
		<span style="color:red;">{profiles}</span><br><br>
		<strong>請按照以下的說明來完成本任務：</strong>
		<ul>
		<li><a href="home.php?mod=spacecp&ac=profile" target="_blank" class="xi2">點選這裡開啟個人資料設定頁面</a></li>
		<li>在新開啟的設定頁面中，將上述個人資料補充完整</li>
		</ul>',
);

?>