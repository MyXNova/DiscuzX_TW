<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupactivity.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupactivity_fids' => '制定群組',
	'groupactivity_fids_comment' => '指定群組，多個 ID 之間請用逗號「,」隔開。',
	'groupactivity_gtids' => '群組分類',
	'groupactivity_gtids_comment' => '設定群組所在分類，可以按住 CTRL 多選，全選或全不選均為不做限制',
	'groupactivity_uids' => '發起者 UID',
	'groupactivity_uids_comment' => '設定活動發起人 UID ，多個 UID 請用逗號「,」隔開。',
	'groupactivity_startrow' => '起始資料行數',
	'groupactivity_startrow_comment' => '如需設定起始的資料行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'groupactivity_items' => '顯示資料數量',
	'groupactivity_items_comment' => '設定一次顯示的主題數量，請設定為大於 0 的整數',
	'groupactivity_titlelength' => '標題最大字元數',
	'groupactivity_titlelength_comment' => '設定當標題長度超過本設定時，是否將標題自動縮減到本設定中的字元數，0 為不自動縮減',
	'groupactivity_fnamelength' => '標題最大字元數包含版區名稱',
	'groupactivity_fnamelength_comment' => '設定標題長度是否將所在版區名稱的長度一同計算在內',
	'groupactivity_summarylength' => '主題簡短內容文字數',
	'groupactivity_summarylength_comment' => '設定主題簡短內容的文字數，0 為使用預設值 255',
	'groupactivity_tids' => '指定主題',
	'groupactivity_tids_comment' => '設定要指定顯示的主題 tid ，多個 tid 請用逗號「,」隔開。注意：留空為不進行任何過濾',
	'groupactivity_keyword' => '標題關鍵字',
	'groupactivity_keyword_comment' => '設定標題包含的關鍵字。注意：留空為不進行任何過濾； 關鍵字中可使用萬用字元 *； 相配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 相配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix',
	'groupactivity_typeids' => '主題分類',
	'groupactivity_typeids_comment' => '設定特定分類的主題。注意：全選或全不選均為不進行任何過濾',
	'groupactivity_typeids_all' => '全部的主題分類',
	'groupactivity_sortids' => '分類訊息',
	'groupactivity_sortids_comment' => '設定特定分類訊息的主題。注意：全選或全不選均為不進行任何過濾',
	'groupactivity_sortids_all' => '全部的分類訊息',
	'groupactivity_digest' => '精華主題過濾',
	'groupactivity_digest_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'groupactivity_digest_0' => '一般主題',
	'groupactivity_digest_1' => '精華 I',
	'groupactivity_digest_2' => '精華 II',
	'groupactivity_digest_3' => '精華 III',
	'groupactivity_stick' => '置頂主題過濾',
	'groupactivity_stick_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'groupactivity_stick_0' => '一般主題',
	'groupactivity_stick_1' => '置頂 I',
	'groupactivity_stick_2' => '置頂 II',
	'groupactivity_stick_3' => '置頂 III',
	'groupactivity_special' => '特殊主題過濾',
	'groupactivity_special_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'groupactivity_special_1' => '投票主題',
	'groupactivity_special_2' => '商品主題',
	'groupactivity_special_3' => '懸賞主題',
	'groupactivity_special_4' => '活動主題',
	'groupactivity_special_5' => '辯論主題',
	'groupactivity_special_0' => '一般主題',
	'groupactivity_special_reward' => '懸賞主題過濾',
	'groupactivity_special_reward_comment' => '設定特定類型的懸賞主題',
	'groupactivity_special_reward_0' => '全部',
	'groupactivity_special_reward_1' => '已解決',
	'groupactivity_special_reward_2' => '未解決',
	'groupactivity_recommend' => '推薦主題過濾',
	'groupactivity_recommend_comment' => '設定是否只顯示推薦的主題',
	'groupactivity_orderby' => '主題排序方式',
	'groupactivity_orderby_comment' => '設定以哪一欄位或方式對主題進行排序',
	'groupactivity_orderby_lastpost' => '按最後回覆時間倒序排序',
	'groupactivity_orderby_dateline' => '按發佈時間倒序排序',
	'groupactivity_orderby_replies' => '按回覆數倒序排序',
	'groupactivity_orderby_views' => '按點閱次數倒序排序',
	'groupactivity_orderby_heats' => '按熱度倒序排序',
	'groupactivity_orderby_recommends' => '按主題評價倒序排序',
	'groupactivity_orderby_hourviews' => '按指定時間內點閱次數倒序排序',
	'groupactivity_orderby_todayviews' => '按當天點閱次數倒序排序',
	'groupactivity_orderby_weekviews' => '按本週點閱次數倒序排序',
	'groupactivity_orderby_monthviews' => '按當月點閱次數倒序排序',
	'groupactivity_orderby_hours' => '指定時間(小時)',
	'groupactivity_orderby_hours_comment' => '指定時間內點閱次數倒序排序的時間值',
	'groupactivity_orderby_todayhots' => '按當天累計售出數倒序排序',
	'groupactivity_orderby_weekhots' => '按本週累計售出數倒序排序',
	'groupactivity_orderby_monthhots' => '按當月累計售出數倒序排序',
	'groupactivity_price_add' => ' 附加 ',
	'groupactivity_place' => '活動地點',
	'groupactivity_class' => '活動類型',
	'groupactivity_class_all' => '所有類型',
	'groupactivity_gender' => '性別要求',
	'groupactivity_gender_0' => '不限',
	'groupactivity_gender_1' => '男',
	'groupactivity_gender_2' => '女',
	'groupactivity_orderby_weekstart' => '按一週內活動開始時間排序',
	'groupactivity_orderby_monthstart' => '按一月內活動開始時間排序',
	'groupactivity_orderby_weekexp' => '按一週內報名截止時間排序',
	'groupactivity_orderby_monthexp' => '按一月內報名截止時間排序',
	'groupactivity_gviewperm' => '群組瀏覽權限',
	'groupactivity_gviewperm_nolimit' => '不限制',
	'groupactivity_gviewperm_only_member' => '僅成員',
	'groupactivity_gviewperm_all_member' => '所有人',
	'groupactivity_highlight' => '獲得醒目提示值',
);

?>