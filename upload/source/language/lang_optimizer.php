<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_optimizer.php 33906 2013-08-29 09:40:37Z jeffjzhang $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'optimizer_dbbackup_advice' => '三個月沒有進行資料備份了，建議立即備份資料',
	'optimizer_dbbackup_lastback' => '上次資料備份於',
	'optimizer_dbbackup_clean_safe' => '沒有檢測到資料庫備份檔案，無安全問題',
	'optimizer_dbbackup_clean_delete' => '檢測到 {filecount} 個資料備份檔案(目錄： ./data/backup_xxx)，<br>請盡快手動複製到安全位置備份，然後刪除這些檔案',
	'optimizer_dbbackup_visit_safe' => '沒有檢測到可存取的資料庫備份檔案，無安全問題',
	'optimizer_dbbackup_visit_delete' => '檢測到 {filecount} 個資料備份檔案(目錄： ./data/backup_xxx)可以透過 Web 方式存取，<br>請在資料庫恢復網頁刪除資料庫備份檔案或設定資料庫備份檔案不可透過 URL 存取',
	'optimizer_filecheck_advice' => '三個月沒有進行檔案校驗了，建議立即進行校驗',
	'optimizer_filecheck_lastcheck' => '上次檔案校驗於',
	'optimizer_log_clean' => '有 {count} 個記錄資料表可以清理優化',
	'optimizer_log_not_found' => '未發現可清理的記錄資料表',
	'optimizer_patch_have' => '您有 {patchnum} 個，請盡快更新',
	'optimizer_patch_check_safe' => '檢測安全',
	'optimizer_plugin_new_plugin' => '您有 {newversion} 款應用程式有可用更新',
	'optimizer_plugin_no_upgrade' => '不需要應用程式更新',
	'optimizer_post_need_split' => '文章表及分表有 {count} 個需要優化',
	'optimizer_post_not_need' => '不需要優化',
	'optimizer_seo_advice' => '建議您完善 SEO 設定',
	'optimizer_seo_no_need' => '發現已經完善了 SEO 設定',
	'optimizer_setting_cache_index' => '快取論壇首頁',
	'optimizer_setting_cache_index_desc' => '開啟此功能可減輕伺服器負載',
	'optimizer_setting_cache_optimize_desc' => '設定快取時間為 900 秒',
	'optimizer_setting_cache_post' => '快取文章',
	'optimizer_setting_cache_post_desc' => '開啟此功能可減輕伺服器負載',
	'optimizer_setting_cache_post_optimize_desc' => '設定快取時間為 900 秒',
	'optimizer_setting_optimizeviews' => '優化更新主題瀏覽量',
	'optimizer_setting_optimizeviews_desc' => '開啟此功能可減輕更新主題瀏覽量時對伺服器產生的負載',
	'optimizer_setting_optimizeviews_optimize_desc' => '開啟此功能',
	'optimizer_setting_delayviewcount' => '附件下載量延遲更新',
	'optimizer_setting_delayviewcount_desc' => '延遲更新附件的瀏覽量，可明顯降低瀏覽量很大的網站的伺服器負擔',
	'optimizer_setting_delayviewcount_optimize_desc' => '開啟此功能',
	'optimizer_setting_preventrefresh' => '點閱數開啟防重新整理',
	'optimizer_setting_preventrefresh_desc' => '開啟防止重新整理，可明顯降低伺服器壓力',
	'optimizer_setting_preventrefresh_optimize_desc' => '開啟此功能',
	'optimizer_setting_nocacheheaders' => '禁止瀏覽器緩衝',
	'optimizer_setting_nocacheheaders_desc' => '可用於解決極個別瀏覽器內容重新整理不正常的問題，本功能會加重伺服器負擔',
	'optimizer_setting_nocacheheaders_optimize_desc' => '關閉此功能',
	'optimizer_setting_jspath' => 'JS 檔案快取',
	'optimizer_setting_jspath_desc' => '當腳本為快取目錄時，系統會將預設目錄中的 *.js 檔案進行壓縮然後儲存到快取目錄以提高讀取速度',
	'optimizer_setting_jspath_optimize_desc' => '修改 js 路徑到快取目錄',
	'optimizer_setting_lazyload' => '圖片延遲讀取',
	'optimizer_setting_lazyload_desc' => '網頁中的圖片在瀏覽器的目前視窗時再讀取，可明顯降低瀏覽量很大的網站的伺服器負擔',
	'optimizer_setting_lazyload_optimize_desc' => '開啟此功能',
	'optimizer_setting_sessionclose' => '關閉 session 機制',
	'optimizer_setting_sessionclose_desc' => '關閉 session 機制以後，可明顯降低網站的伺服器負擔，建議線上會員數超過 2 萬時開啟本功能<br>注意：遊客數和會員的上線時間將不再進行統計，論壇首頁和版區列表頁面的線上會員列表功能將不可用',
	'optimizer_setting_sessionclose_optimize_desc' => '開啟此功能',
	'optimizer_setting_need_optimizer' => '有 {count} 個設定項目可以優化',
	'optimizer_setting_no_need' => '設定項目無需優化',
	'optimizer_thread_need_optimizer' => '需要優化您的主題資料表了',
	'optimizer_thread_no_need' => '不需要優化',
	'optimizer_upgrade_need_optimizer' => '有新版本，及時更新到最新版本',
	'optimizer_upgrade_no_need' => '已經是最新版',
	'optimizer_setting_rewriteguest' => 'Rewrite 僅針對遊客',
	'optimizer_setting_rewriteguest_desc' => '開啟此項，則 Rewrite 功能只對遊客和搜尋引擎有效，可減輕伺服器負擔',
	'optimizer_setting_rewriteguest_optimize_desc' => '開啟此功能',
	'optimizer_inviteregister_tip' => '註冊項目中開啟邀請註冊後，設定不受邀請碼限制的地方列表，適合地方社群設定',
	'optimizer_iniviteregister_normal' => '檢測設定正常',
	'optimizer_emailregister_normal' => '已設定該項目，請檢視是否配置郵件伺服器',
	'optimizer_emailregister_tip' => '此設定可以提升會員品質',
	'optimizer_pwlength_need' => '密碼最小長度過低，不安全',
	'optimizer_pwlength_no_need' => '經檢測密碼長度設定正常',
	'optimizer_filesafe_need' => 'old 目錄、utility 目錄、安裝程式、資料恢復程式或重複的管理員入口其中之一未刪除',
	'optimizer_filesafe_no_need' => '檔案安全檢測正常',
	'optimizer_remote_need' => '您開啟了正常網站無需開啟的遠端調用功能，請檢查是否是主動開啟',
	'optimizer_remote_no_need' => '遠端調用功能關閉',
	'optimizer_regmaildomain_need' => '需要優化黑名單列表',
	'optimizer_regmaildomain_tip' => '可以設定信箱網域名稱限制阻止垃圾註冊',
	'optimizer_ipregctrl_no_need' => '已經設定了限時註冊 IP 列表',
	'optimizer_ipregctrl_tip' => '當有某些 IP 範圍在惡意註冊時，可以將惡意的 IP 位址錄入',
	'optimizer_newbiespan_no_need' => '已經設定了練習時間',
	'optimizer_newbiespan_need' => '設定一下練習時間更安全',
	'optimizer_editperdel_no_need' => '已經設定了此設定項目',
	'optimizer_editperdel_need' => '需要優化此項目',
	'optimizer_recyclebin_no_need' => '版區都已經開啟回收站了',
	'optimizer_recyclebin_need' => '版區沒有開啟回收站<br>{forumdesc}',
	'optimizer_forumstatus_no_need' => '無隱藏版區或者隱藏版區都已經設定了瀏覽權限',
	'optimizer_forumstatus_need' => '隱藏版區還沒有設定瀏覽權限<br>{forumdesc}',
	'optimizer_usergroup9_no_need' => '限制會員用戶組設定正常',
	'optimizer_usergroup9_need' => '請關閉 "{desc}" 這些選項',
	'optimizer_usergroup4_need' => '請關閉 "{desc}" 這些選項',
	'optimizer_usergroup5_need' => '請關閉 "{desc}" 這些選項',
	'optimizer_usergroup6_need' => '請關閉 "{desc}" 這些選項',
	'optimizer_usergroup_need_allowsendpm' => '是否允許發短訊',
	'optimizer_usergroup_need_allowposturl' => '是否允許發站外 URL',
	'optimizer_usergroup_need_allowgroupposturl' => '群組是否允許發站外 URL',
	'optimizer_usergroup_need_allowpost' => '允許發新話題',
	'optimizer_usergroup_need_allowreply' => '允許發表回覆',
	'optimizer_usergroup_need_allowdirectpost' => '允許直接發文',
	'optimizer_usergroup_need_allowgroupdirectpost' => '群組允許直接發文',
	'optimizer_usergroup4_no_need' => '禁止發言用戶組設定正常',
	'optimizer_usergroup5_no_need' => '禁止瀏覽用戶組設定正常',
	'optimizer_usergroup6_no_need' => '禁止 IP 用戶組設定正常',
	'optimizer_cloudsecurity_no_need' => '防水牆已開啟',
	'optimizer_cloudsecurity_need' => '防水牆可以有效的防止垃圾文章，提升網站內容品質，降低管理成本，非常建議安裝此應用程式',
	'optimizer_cloudsecurity_setting_need' => '防水牆設定被修改',
	'optimizer_attachexpire_need' => '設定後可以起到防盜連的作用',
	'optimizer_attachexpire_no_need' => '已經設定了此項目',
	'optimizer_attachrefcheck_need' => '設定後可以起到防盜連的作用',
	'optimizer_attachrefcheck_no_need' => '已經設定了此項目',
	'optimizer_loginpwcheck_need' => '弱密碼登入檢測未開啟',
	'optimizer_loginpwcheck_no_need' => '弱密碼登入檢測已開啟',
	'optimizer_loginoutofdate_need' => '異常登入檢測未開啟',
	'optimizer_loginoutofdate_no_need' => '異常登入檢測已開啟',
	'optimizer_postqqonly_need' => '發文需要綁定 QQ 號檢測未開啟',
	'optimizer_postqqonly_no_need' => '發文需要綁定 QQ 號檢測已開啟',
	'optimizer_aggid_need' => '「管理員，超級版主，版主」QQ 登入檢測未開啟',
	'optimizer_aggid_no_need' => '「管理員，超級版主，版主」QQ 登入檢測已開啟',
	'optimizer_eviluser_need' => '防水牆識別到違規會員，請及時處理',
	'optimizer_eviluser_no_need' => '未發現違規會員',
	'optimizer_white_list_need' => '您設定了防水牆白名單，白名單會員發垃圾文章不被處理，請慎重',
	'optimizer_white_list_no_need' => '未設定白名單',
	'optimizer_security_daily_need' => '開啟防水牆每日優化，可清除刪文後首頁痕跡',
	'optimizer_security_daily_no_need' => '該計劃任務已開啟',
	'optimizer_dos8p3_need' => 'DOS 8.3 檔案名稱支援錯誤開啟',
	'optimizer_dos8p3_no_need' => 'DOS 8.3 檔案名稱支援未開啟或底層不支援',
	'optimizer_httphost_need' => '空 HOST 瀏覽已開啟',
	'optimizer_httphost_no_need' => '空 HOST 瀏覽支援未開啟或底層不支援',
);
?>