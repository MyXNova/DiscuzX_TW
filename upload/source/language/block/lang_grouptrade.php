<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_grouptrade.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'grouptrade_fids' => '指定群組',
	'grouptrade_fids_comment' => '設定允許參與新文章調用的群組，可以按住 CTRL 多選，全選或全不選均為不做限制',
	'grouptrade_gtids' => '群組分類',
	'grouptrade_gtids_comment' => '設定群組所在分類，可以按住 CTRL 多選，全選或全不選均為不做限制',
	'grouptrade_uids' => '會員 UID',
	'grouptrade_uids_comment' => '設定要指定顯示的會員 UID，多個 UID 請用逗號「,」隔開。',
	'grouptrade_startrow' => '起始資料行數',
	'grouptrade_startrow_comment' => '如需設定起始的資料行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'grouptrade_items' => '顯示資料數量',
	'grouptrade_items_comment' => '設定一次顯示的主題數量，請設定為大於 0 的整數',
	'grouptrade_titlelength' => '標題最大字元數',
	'grouptrade_titlelength_comment' => '設定當標題長度超過本設定時，是否將標題自動縮減到本設定中的字元數，0 為不自動縮減',
	'grouptrade_fnamelength' => '標題最大字元數包含版區名稱',
	'grouptrade_fnamelength_comment' => '設定標題長度是否將所在版區名稱的長度一同計算在內',
	'grouptrade_summarylength' => '主題簡短內容文字數',
	'grouptrade_summarylength_comment' => '設定主題簡短內容的文字數，0 為使用預設值 255',
	'grouptrade_tids' => '指定主題',
	'grouptrade_tids_comment' => '設定要指定顯示的主題 tid ，多個 tid 請用逗號「,」隔開。注意：留空為不進行任何過濾',
	'grouptrade_keyword' => '標題關鍵字',
	'grouptrade_keyword_comment' => '設定標題包含的關鍵字。注意：留空為不進行任何過濾； 關鍵字中可使用萬用字元 *； 相配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 相配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix',
	'grouptrade_typeids' => '主題分類',
	'grouptrade_typeids_comment' => '設定特定分類的主題。注意：全選或全不選均為不進行任何過濾',
	'grouptrade_typeids_all' => '全部的主題分類',
	'grouptrade_sortids' => '分類訊息',
	'grouptrade_sortids_comment' => '設定特定分類訊息的主題。注意：全選或全不選均為不進行任何過濾',
	'grouptrade_sortids_all' => '全部的分類訊息',
	'grouptrade_digest' => '精華主題過濾',
	'grouptrade_digest_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'grouptrade_digest_0' => '一般主題',
	'grouptrade_digest_1' => '精華 I',
	'grouptrade_digest_2' => '精華 II',
	'grouptrade_digest_3' => '精華 III',
	'grouptrade_stick' => '置頂主題過濾',
	'grouptrade_stick_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'grouptrade_stick_0' => '一般主題',
	'grouptrade_stick_1' => '置頂 I',
	'grouptrade_stick_2' => '置頂 II',
	'grouptrade_stick_3' => '置頂 III',
	'grouptrade_special' => '特殊主題過濾',
	'grouptrade_special_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'grouptrade_special_1' => '投票主題',
	'grouptrade_special_2' => '商品主題',
	'grouptrade_special_3' => '懸賞主題',
	'grouptrade_special_4' => '活動主題',
	'grouptrade_special_5' => '辯論主題',
	'grouptrade_special_0' => '一般主題',
	'grouptrade_special_reward' => '懸賞主題過濾',
	'grouptrade_special_reward_comment' => '設定特定類型的懸賞主題',
	'grouptrade_special_reward_0' => '全部',
	'grouptrade_special_reward_1' => '已解決',
	'grouptrade_special_reward_2' => '未解決',
	'grouptrade_recommend' => '推薦主題過濾',
	'grouptrade_recommend_comment' => '設定是否只顯示推薦的主題',
	'grouptrade_orderby' => '主題排序方式',
	'grouptrade_orderby_comment' => '設定以哪一欄位或方式對主題進行排序',
	'grouptrade_orderby_lastpost' => '按最後回覆時間倒序排序',
	'grouptrade_orderby_dateline' => '按發佈時間倒序排序',
	'grouptrade_orderby_replies' => '按回覆數倒序排序',
	'grouptrade_orderby_views' => '按點閱次數倒序排序',
	'grouptrade_orderby_heats' => '按熱度倒序排序',
	'grouptrade_orderby_recommends' => '按主題評價倒序排序',
	'grouptrade_orderby_hourviews' => '按指定時間內點閱次數倒序排序',
	'grouptrade_orderby_todayviews' => '按當天點閱次數倒序排序',
	'grouptrade_orderby_weekviews' => '按本週點閱次數倒序排序',
	'grouptrade_orderby_monthviews' => '按當月點閱次數倒序排序',
	'grouptrade_orderby_hours' => '指定時間(小時)',
	'grouptrade_orderby_hours_comment' => '指定時間內點閱次數倒序排序的時間值',
	'grouptrade_orderby_todayhots' => '按當天累計售出數倒序排序',
	'grouptrade_orderby_weekhots' => '按本週累計售出數倒序排序',
	'grouptrade_orderby_monthhots' => '按當月累計售出數倒序排序',
	'grouptrade_price_add' => ' 附加 ',
	'grouptrade_place' => '活動地點',
	'grouptrade_class' => '活動類型',
	'grouptrade_gender' => '性別要求',
	'grouptrade_gender_0' => '不限',
	'grouptrade_gender_1' => '男',
	'grouptrade_gender_2' => '女',
	'grouptrade_orderby_weekstart' => '按一週內活動開始時間排序',
	'grouptrade_orderby_monthstart' => '按一月內活動開始時間排序',
	'grouptrade_orderby_weekexp' => '按一週內報名截止時間排序',
	'grouptrade_orderby_monthexp' => '按一月內報名截止時間排序',
	'grouptrade_gviewperm' => '群組瀏覽權限',
	'grouptrade_gviewperm_nolimit' => '不限制',
	'grouptrade_gviewperm_only_member' => '僅成員',
	'grouptrade_gviewperm_all_member' => '所有人',
	'grouptrade_highlight' => '獲得醒目提示值',
);

?>