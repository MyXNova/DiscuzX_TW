<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'threadlist_name' => '論壇/群組 文章列表文章位廣告',
	'threadlist_desc' => '展現方式：文章位廣告顯示於文章列表頁第一頁的文章位置，可以模擬出一個具有廣告意義的文章網址，吸引瀏覽者的注意力。',
	'threadlist_fids' => '投放版區',
	'threadlist_fids_comment' => '設定廣告投放的論壇版區，當廣告投放範圍中包含「論壇」時有效',
	'threadlist_groups' => '投放群組分類',
	'threadlist_groups_comment' => '設定廣告投放的群組分類，當廣告投放範圍中包含「群組」時有效',
	'threadlist_pos' => '投放位置',
	'threadlist_pos_comment' => '設定在主題列表的第幾篇主題位置顯示此廣告，如不指定則將隨機位置顯示',
	'threadlist_mode' => '顯示模式',
	'threadlist_mode_comment' => '自由模式，佔用主題列表的全部列寬顯示本廣告<br />主題模式，把廣告模擬成一篇主題，點選廣告後跳轉到指定的主題',
	'threadlist_mode_0' => '自由模式',
	'threadlist_mode_1' => '主題模式',
	'threadlist_tid' => '主題模式指定主題 tid',
	'threadlist_threadurl' => '主題模式自訂主題 URL',
	'threadlist_threadurl_comment' => '留空表示使用指定主題的 URL',
);

?>