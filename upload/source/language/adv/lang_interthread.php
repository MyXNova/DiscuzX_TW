<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_interthread.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'interthread_name' => '論壇/群組 文章間通欄廣告',
	'interthread_desc' => '展現方式：文章間通欄廣告顯示於主題文章和第一篇回覆文章之間，可使用 468x60 或其他大小圖片和 Flash 的形式。<br />目前頁面有多篇文章間通欄廣告時，系統會隨機選取其中之一顯示。價值分析：由於能夠將主題與回覆文章分開，廣告大小大而且不影響文章內容，因此不會招致文章作者及瀏覽者反感，適合在文章內進行商業宣傳或品牌推廣。',
	'interthread_fids' => '投放版區',
	'interthread_fids_comment' => '設定廣告投放的論壇版區，當廣告投放範圍中包含「論壇」時有效',
	'interthread_groups' => '投放群組分類',
	'interthread_groups_comment' => '設定廣告投放的群組分類，當廣告投放範圍中包含「群組」時有效',
	'interthread_pnumber' => '廣告顯示樓層',
	'interthread_pnumber_comment' => '選項 #1 #2 #3 ... 表示文章樓層，可以按住 CTRL 多選，預設只投放 1 樓',
);

?>