<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_polllist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'polllist_name' => '投票列表',
	'polllist_desc' => '投票列表調用',
	'polllist_uids' => '會員 UID',
	'polllist_uids_comment' => '填入指定會員的 ID(uid)，多個會員之間用逗號(,)分隔',
	'polllist_startrow' => '起始資料行數',
	'polllist_startrow_comment' => '如需設定起始的資料行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'polllist_titlelength' => '標題長度',
	'polllist_summarylength' => '簡介長度',
	'polllist_orderby' => '投票排序方式',
	'polllist_orderby_comment' => '設定以哪一欄位或方式對投票進行排序',
	'polllist_orderby_dateline' => '按發佈時間倒序',
	'polllist_orderby_hot' => '按熱度倒序',
	'polllist_orderby_lastvote' => '按最後投票時間倒序',
	'polllist_orderby_viewnum' => '按點閱數倒序',
	'polllist_orderby_replynum' => '按回覆數倒序',
	'polllist_orderby_votenum' => '按投票數倒序',
	'polllist_credit' => '懸賞投票',
	'polllist_credit_nolimit' => '不限定',
	'polllist_credit_yes' => '只取懸賞投票',
	'polllist_expirefilter' => '過期投票',
	'polllist_expirefilter_off' => '不禁止',
	'polllist_expirefilter_on' => '禁止',

);

?>