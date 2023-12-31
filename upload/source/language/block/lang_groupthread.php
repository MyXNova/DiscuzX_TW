<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_groupthread.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'groupthread_fids' => '群組 ID',
	'groupthread_fids_comment' => '指定群組 ID，多個 ID 之間用 , 分割',
	'groupthread_gtids' => '群組分類',
	'groupthread_gtids_comment' => '選擇群組分類',
	'groupthread_uids' => '樓主 UID',
	'groupthread_uids_comment' => '指定主題作者 ID，多個 ID 之間用 , 分割',
	'groupthread_keyword' => '標題關鍵字',
	'groupthread_keyword_comment' => '設定標題包含的關鍵字。注意：留空為不進行任何過濾； 關鍵字中可使用萬用字元 *； 相配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 相配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix',
	'groupthread_startrow' => '起始資料行數',
	'groupthread_startrow_comment' => '如需設定起始的資料行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'groupthread_items' => '顯示資料數量',
	'groupthread_items_comment' => '設定一次顯示的主題數量，請設定為大於 0 的整數',
	'groupthread_titlelength' => '標題最大字元數',
	'groupthread_maxlength_comment' => '設定當標題長度超過本設定時，是否將標題自動縮減到本設定中的字元數，0 為不自動縮減',
	'groupthread_fnamelength' => '標題最大字元數包含版區名稱',
	'groupthread_fnamelength_comment' => '設定標題長度是否將所在版區名稱的長度一同計算在內',
	'groupthread_summarylength' => '主題簡短內容文字數',
	'groupthread_summarylength_comment' => '設定主題簡短內容的文字數，0 為使用預設值 255',
	'groupthread_picpre' => '主題圖示',
	'groupthread_picpre_comment' => '設定是否在主題前加入圖片形式的圖示，輸入圖片的 URL (絕對或相對)位址即可，留空為不顯示主題圖示',
	'groupthread_tids' => '指定主題',
	'groupthread_tids_comment' => '設定要指定顯示的主題 tid ，多個 tid 請用逗號「,」隔開。注意：留空為不進行任何過濾',
	'groupthread_keyword' => '標題關鍵字',
	'groupthread_keyword_comment' => '設定標題包含的關鍵字。注意：留空為不進行任何過濾； 關鍵字中可使用萬用字元 *； 相配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 相配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix',
	'groupthread_typeids' => '主題分類',
	'groupthread_typeids_comment' => '設定特定分類的主題。注意：全選或全不選均為不進行任何過濾',
	'groupthread_typeids_all' => '全部的主題分類',
	'groupthread_sortids' => '分類訊息',
	'groupthread_sortids_comment' => '設定特定分類訊息的主題。注意：全選或全不選均為不進行任何過濾',
	'groupthread_sortids_all' => '全部的分類訊息',
	'groupthread_threadtype' => '顯示主題分類字首',
	'groupthread_threadtype_comment' => '設定是否在主題列表中，給分類的主題前加上分類名稱',
	'groupthread_groupthreadort' => '顯示分類訊息字首',
	'groupthread_groupthreadort_comment' => '設定是否在主題列表中，給分類訊息的主題前加上分類訊息名稱',
	'groupthread_highlight' => '顯示主題的醒目提示特性',
	'groupthread_highlight_comment' => '設定是否顯示主題的醒目提示特性',
	'groupthread_digest' => '精華主題過濾',
	'groupthread_digest_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'groupthread_digest_0' => '一般主題',
	'groupthread_digest_1' => '精華 I',
	'groupthread_digest_2' => '精華 II',
	'groupthread_digest_3' => '精華 III',
	'groupthread_stick' => '置頂主題過濾',
	'groupthread_stick_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'groupthread_stick_0' => '一般主題',
	'groupthread_stick_1' => '置頂 I',
	'groupthread_stick_2' => '置頂 II',
	'groupthread_stick_3' => '置頂 III',
	'groupthread_special' => '特殊主題過濾',
	'groupthread_special_comment' => '設定特定的主題範圍。注意：全選或全不選均為不進行任何過濾',
	'groupthread_special_1' => '投票主題',
	'groupthread_special_2' => '商品主題',
	'groupthread_special_3' => '懸賞主題',
	'groupthread_special_4' => '活動主題',
	'groupthread_special_5' => '辯論主題',
	'groupthread_special_0' => '一般主題',
	'groupthread_special_reward' => '懸賞主題過濾',
	'groupthread_special_reward_comment' => '設定特定類型的懸賞主題',
	'groupthread_picrequired' => '必須含圖片附件',
	'groupthread_picrequired_comment' => '設定是否只顯示含有圖片附件的主題',
	'groupthread_special_reward_0' => '全部',
	'groupthread_special_reward_1' => '已解決',
	'groupthread_special_reward_2' => '未解決',
	'groupthread_recommend' => '推薦主題過濾',
	'groupthread_recommend_comment' => '設定是否只顯示推薦的主題',
	'groupthread_orderby' => '主題排序方式',
	'groupthread_orderby_comment' => '設定以哪一欄位或方式對主題進行排序',
	'groupthread_orderby_lastpost' => '按最後回覆時間倒序排序',
	'groupthread_orderby_dateline' => '按發佈時間倒序排序',
	'groupthread_orderby_replies' => '按回覆數倒序排序',
	'groupthread_orderby_views' => '按點閱次數倒序排序',
	'groupthread_orderby_heats' => '按熱度倒序排序',
	'groupthread_orderby_recommends' => '按主題評價倒序排序',
	'groupthread_orderby_hourviews' => '按小時內點閱次數倒序排序',
	'groupthread_orderby_todayviews' => '按當天點閱次數倒序排序',
	'groupthread_orderby_weekviews' => '按本週點閱次數倒序排序',
	'groupthread_orderby_monthviews' => '按當月點閱次數倒序排序',
	'groupthread_postdateline' => '主題發佈時間',
	'groupthread_postdateline_nolimit' => '不限制',
	'groupthread_postdateline_hour' => '1 小時內',
	'groupthread_postdateline_day' => '24 小時內',
	'groupthread_postdateline_week' => '7 天內',
	'groupthread_postdateline_month' => '1 個月內',
	'groupthread_lastpost' => '最後更新時間',
	'groupthread_lastpost_nolimit' => '不限制',
	'groupthread_lastpost_hour' => '1 小時內',
	'groupthread_lastpost_day' => '24 小時內',
	'groupthread_lastpost_week' => '7 天內',
	'groupthread_lastpost_month' => '1 個月內',
	'groupthread_orderby_displayorder' => '按預設順序',
	'groupthread_gviewperm' => '群組瀏覽權限',
	'groupthread_gviewperm_nolimit' => '不限制',
	'groupthread_gviewperm_only_member' => '僅成員',
	'groupthread_gviewperm_all_member' => '所有人',
	'groupthread_highlight' => '獲得醒目提示值',
);

?>