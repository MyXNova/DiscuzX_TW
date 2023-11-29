<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_post.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'post_name' => '論壇文章類任務',
	'post_desc' => '透過發文回覆文章完成任務，活躍論壇的氛圍',
	'post_complete_var_act' => '動作',
	'post_complete_var_act_newthread' => '發新主題',
	'post_complete_var_act_newreply' => '發新回覆',
	'post_complete_var_act_newpost' => '發新主題/回覆',
	'post_complate_var_forumid' => '版區限制',
	'post_complate_var_forumid_comment' => '設定會員只能在某個版區完成任務',
	'post_complate_var_threadid' => '回覆指定主題',
	'post_complate_var_threadid_comment' => '設定會員只有回覆該主題才能完成任務，請填寫主題的 TID',
	'post_complate_var_author' => '回覆指定作者',
	'post_complate_var_author_comment' => '設定會員只有回覆該作者發表的主題才能完成任務，請填寫作者的會員名稱',
	'post_complete_var_num' => '執行動作次數下限',
	'post_complete_var_num_comment' => '會員需要執行對應動作的最少次數',
	'post_complete_var_time' => '時間限制(小時)',
	'post_complete_var_time_comment' => '設定會員從申請任務到完成任務的時間限制，會員在此時間內未能完成任務則不能領取獎勵並標記任務失敗，0 或留空為不限制',

	'task_complete_forumid' => '在版區 {value} ',
	'task_complete_act_newthread' => '發新主題 {num} 次',
	'task_complete_act_newpost' => '發新主題/回覆 {num} 次',
	'task_complete_act_newreply_thread' => '在「{value}」回覆主題 {num} 次',
	'task_complete_act_newreply_author' => '回覆作者「{value}」的主題 {num} 次',
);

?>