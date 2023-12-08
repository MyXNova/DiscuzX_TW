<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_error.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'System Message' => '網站訊息',

	'config_notfound' => '配置檔案 "config_global.php" 未找到或者無法瀏覽， 請確認您已經正確安裝了程式',
	'template_notfound' => '模版檔案未找到或者無法瀏覽',
	'directory_notfound' => '目錄未找到或者無法瀏覽',
	'request_tainting' => '您目前的瀏覽請求當中含有非法字元，已經被系統拒絕',
	'db_help_link' => '點選這裡尋求幫助',
	'db_error_message' => '錯誤訊息',
	'db_error_sql' => '<b>SQL</b>: $sql<br />',
	'db_error_backtrace' => '<b>Backtrace</b>: $backtrace<br />',
	'db_error_no' => '錯誤代碼',
	'db_notfound_config' => '配置檔案 "config_global.php" 未找到或者無法瀏覽。',
	'db_notconnect' => '無法連線到資料庫伺服器',
	'db_security_error' => '查詢語句安全威脅',
	'db_query_sql' => '查詢語句',
	'db_query_error' => '查詢語句錯誤',
	'db_config_db_not_found' => '資料庫配置錯誤，請仔細檢查 config_global.php 檔案',
	'system_init_ok' => '網站系統初始化完成，請<a href="index.php">點選這裡</a>進入',
	'backtrace' => '執行資訊',
	'error_end_message' => '<a href="http://{host}">{host}</a> 已經將此出錯訊息詳細記錄，由此給您帶來的瀏覽不便我們深感歉意',
	'suggestion_user' => '如果您是使用者，建議您嘗試重新整理網頁、關閉所有瀏覽器視窗重新進行操作。如果無法解決，建議您完整截圖本網頁並儲存，隨後向網站管理員回報此問題',
	'suggestion_plugin' => '如果您是網站管理員，建議您嘗試在管理中心關閉 <a href="admin.php?action=plugins&frames=yes" class="guess" target="_blank">{guess}</a> 插件並 <a href="admin.php?action=tools&operation=updatecache&frames=yes" class="guess" target="_blank">更新快取</a> 。如關閉插件後問題解決，建議您憑完整截圖聯繫插件供應商獲得幫助',
	'suggestion' => '如果您是網站管理員，建議您嘗試在管理中心 <a href="admin.php?action=tools&operation=updatecache&frames=yes" target="_blank">更新快取</a> ，或憑完整截圖透過 <a href="https://www.dismall.com/" target="_blank">官方論壇</a> 尋求幫助。如果您確定是程式自身 Bug，您也可直接 <a href="https://gitee.com/discuz/DiscuzX/issues" target="_blank">送出 Issue</a> 給我們',

	'file_upload_error_-101' => '上傳失敗！上傳檔案不存在或不合法，請返回。',
	'file_upload_error_-102' => '上傳失敗！非圖片類型檔案，請返回。',
	'file_upload_error_-103' => '上傳失敗！無法寫入檔案或寫入失敗，請返回。',
	'file_upload_error_-104' => '上傳失敗！無法識別的圖像檔案格式，請返回。',
);

?>