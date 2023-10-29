<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 36287 2016-12-12 03:59:05Z nemohou $
 */

if(!defined('IN_COMSENZ')) {
	exit('Access Denied');
}

define('UC_VERNAME', '中文版');
$lang = array(
	'SC_UTF8' => '简体中文 UTF8 版',
	'TC_UTF8' => '繁體中文 UTF8 版',

	'title_install' => SOFT_NAME.' 安裝精靈',
	'agreement_yes' => '我同意',
	'agreement_no' => '我不同意',
	'notset' => '不限制',
	'enable' => '開啟',
	'disable' => '關閉',

	'message_title' => '提示訊息',
	'error_message' => '錯誤訊息',
	'message_return' => '返回',
	'return' => '返回',
	'install_wizard' => '安裝精靈',
	'config_nonexistence' => '配置檔不存在',
	'nodir' => '目錄不存在',
	'redirect' => '瀏覽器會自動跳轉頁面，無需人員操作。<br>除非當您的瀏覽器沒有自動跳轉時，請點選這裡',
	'auto_redirect' => '瀏覽器會自動跳轉頁面，無需人員操作',
	'database_errno_1064' => 'SQL 語法錯誤',

	'dbpriv_createtable' => '沒有 CREATE TABLE 權限，無法繼續安裝',
	'dbpriv_insert' => '沒有 INSERT 權限，無法繼續安裝',
	'dbpriv_select' => '沒有 SELECT 權限，無法繼續安裝',
	'dbpriv_update' => '沒有 UPDATE 權限，無法繼續安裝',
	'dbpriv_delete' => '沒有 DELETE 權限，無法繼續安裝',
	'dbpriv_droptable' => '沒有 DROP TABLE 權限，無法安裝',

	'db_not_null' => '資料庫中已經安裝過 UCenter，繼續安裝會清空原有資料。',
	'db_drop_table_confirm' => '繼續安裝會清空全部原有資料，您確定要繼續嗎?',

	'writeable' => '可寫',
	'unwriteable' => '不可寫',
	'old_step' => '上一步',
	'new_step' => '下一步',

	'database_errno_2003' => '無法連線資料庫，請檢查資料庫是否啟動，資料庫伺服器位址是否正確',
	'database_errno_1044' => '無法建立新的資料庫，請檢查資料庫名稱填寫是否正確',
	'database_errno_1045' => '無法連線資料庫，請檢查資料庫使用者名稱或者密碼是否正確',
	'database_connect_error' => '資料庫連線錯誤',
	'run_sql_error' => 'Discuz! Database Error',

	'step_title_1' => '檢查安裝環境',
	'step_title_2' => '設定執行環境',
	'step_title_3' => '建立資料庫',
	'step_title_4' => '安裝',
	'step_env_check_title' => '開始安裝',
	'step_env_check_desc' => '環境以及檔案目錄權限檢查',
	'step_db_init_title' => '安裝資料庫',
	'step_db_init_desc' => '正在執行資料庫安裝',

	'step1_file' => '目錄檔案',
	'step1_need_status' => '所需狀態',
	'step1_status' => '目前狀態',
	'not_continue' => '請將以上紅叉部分修正再試',

	'tips_dbinfo' => '填寫資料庫資料',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => '填寫管理員資料',
	'step_ext_info_title' => '安裝成功。',
	'step_ext_info_comment' => '點選進入登入',

	'ext_info_succ' => '安裝成功。',
	'install_submit' => '送出',
	'install_locked' => '安裝鎖定，已經安裝過了，如果您確定要重新安裝，請到伺服器上刪除<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_stuck_msg' => '安裝程式已經很久沒有進展了，可能相關請求已經因網路逾時或伺服器嚴重錯誤而異常退出',
	'error_quit_msg' => '您必須解決以上問題，安裝才可以繼續',
	'error_reinstall_msg' => '您的資料庫可能 InnoDB 效能不佳，請調高 PHP 逾時時間，重新整理網頁嘗試重新安裝',

	'step_app_reg_title' => '設定執行環境',
	'step_app_reg_desc' => '檢測伺服器環境以及設定 UCenter',
	'tips_ucenter' => '請填寫 UCenter 相關資料',
	'tips_ucenter_comment' => 'UCenter 是 Comsenz 公司產品的核心服務程式，Discuz! Board 的安裝和執行依賴此程式。如果您已經安裝了 UCenter，請填寫以下資料。否則，請到 <a href="https://www.discuz.vip/" target="blank">Comsenz 產品中心</a> 下載並且安裝，然後再繼續。',

	'advice_mysqli_connect' => '請檢查 mysqli 模組是否正確載入',
	'advice_xml_parser_create' => '該函數需要 PHP 支援 XML。請聯繫空間商，確定開啟了此項功能',
	'advice_json_encode' => '該函數需要 PHP 支援 JSON。請聯繫空間商，確定開啟了此項功能',
	'advice_dns_get_record' => '該函數需要 PHP 支援 DNS 查詢，PHP 預設自帶。錯誤的編譯安裝或缺少元件等原因容易引起此問題。請聯繫空間商，確定開啟了此項功能',
	'advice_fsockopen' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_pfsockopen' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_stream_socket_client' => '該函數需要 php.ini 中 stream_socket_client 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_curl_init' => '該函數需要 php.ini 中 curl_init 選項開啟。請聯繫空間商，確定開啟了此項功能',

	'ucurl' => 'UCenter 的 URL',
	'ucpw' => 'UCenter 創始人密碼',
	'ucip' => 'UCenter 的 IP 位址',
	'ucenter_ucip_invalid' => '格式錯誤，請填寫正確的 IP 位址',
	'ucip_comment' => '絕大多數情況下您可以不填',

	'tips_siteinfo' => '請填寫網站資料',
	'sitename' => '網站名稱',
	'siteurl' => '網站 URL',

	'forceinstall' => '強制安裝',
	'dbinfo_forceinstall_invalid' => '目前資料庫當中已經含有同樣資料表字首的資料表，您可以修改「資料表名稱字首」來避免刪除舊的資料，或者選擇強制安裝。強制安裝會刪除舊資料，且無法恢復',
	'dbinfo_myisam2innodb_invalid' => 'InnoDB 效能不佳，安裝逾時失敗的，可以嘗試這種方式強制安裝',

	'click_to_back' => '點選返回上一步',
	'adminemail' => '系統信箱 Email',
	'adminemail_comment' => '用於寄送程式錯誤報告',
	'dbhost_comment' => '一般為 127.0.0.1 或 localhost',
	'dbname_comment' => '用於安裝 Discuz! 的資料庫',
	'dbuser_comment' => '您的資料庫使用者名稱',
	'dbpw_comment' => '您的資料庫密碼',
	'tablepre_comment' => '同一資料庫執行多個論壇時，請修改字首',
	'forceinstall_check_label' => '我要刪除資料，強制安裝！！！',
	'myisam2innodb_check_label' => '以 MyISAM 方式安裝，再轉換為 InnoDB',
	'initdbresult_succ' => '資料庫表建立完成',
	'initdbdataresult_succ' => '資料庫資料初始化完成',
	'initdbinnodbresult_succ' => 'InnoDB 資料表轉換完成',
	'initsys' => '正在系統初始化',

	'uc_url_empty' => '您沒有填寫 UCenter 的 URL，請返回填寫',
	'uc_url_invalid' => 'URL 格式錯誤',
	'uc_url_unreachable' => 'UCenter 的 URL 網址可能填寫錯誤，可能原因有：<br />1. UCenter 路徑不正確或狀態異常<br />2. 應用程式查詢 UCenter 狀態請求無法發起或被攔截<br />3. UCenter 後臺「透過 URL 新增應用程式功能」未開啟',
	'uc_ip_invalid' => '無法解析該網域名稱，請填寫網站的 IP',
	'uc_admin_invalid' => 'UCenter 創始人密碼驗證未通過，可能原因有：<br />1. UCenter 創始人密碼不正確<br />2. 多次錯誤輸入密碼導致創始人使用者和 IP 位址被鎖定<br />3. UCenter 後臺「透過 URL 新增應用程式功能」未開啟',
	'uc_data_invalid' => '通訊失敗，請檢查 UCenter 的 URL 網址是否正確 ',
	'uc_dbcharset_incorrect' => 'UCenter 資料庫編碼與目前應用編碼不一致',
	'uc_api_add_app_error' => '向 UCenter 增加應用錯誤',
	'uc_dns_error' => 'UCenter DNS 解析錯誤，請返回填寫一下 UCenter 的 IP 位址',

	'ucenter_ucurl_invalid' => 'UCenter 的 URL 為空，或者格式錯誤，請檢查',
	'ucenter_ucpw_invalid' => 'UCenter 的創始人密碼為空，或者格式錯誤，請檢查',
	'siteinfo_siteurl_invalid' => '網站 URL 為空，或者格式錯誤，請檢查',
	'siteinfo_sitename_invalid' => '網站名稱為空，或者格式錯誤，請檢查',
	'dbinfo_dbhost_invalid' => '資料庫伺服器位址為空，或者格式錯誤，請檢查',
	'dbinfo_dbname_invalid' => '資料庫名稱為空，或者格式錯誤，請檢查',
	'dbinfo_dbuser_invalid' => '資料庫使用者名稱為空，或者格式錯誤，請檢查',
	'dbinfo_dbpw_invalid' => '資料庫使用者密碼為空，或者格式錯誤，請檢查',
	'dbinfo_adminemail_invalid' => '系統信箱為空，或者格式錯誤，請檢查',
	'dbinfo_tablepre_invalid' => '資料表字首為空，或者格式錯誤，請檢查',
	'admininfo_username_invalid' => '管理員會員名稱為空，或者格式錯誤，請檢查',
	'admininfo_email_invalid' => '管理員 Email 為空，或者格式錯誤，請檢查',
	'admininfo_password_invalid' => '管理員密碼為空，請填寫',
	'admininfo_password2_invalid' => '兩次密碼不一致，請檢查',

	'install_dzstandalone' => '<div class="selradio"><input type="radio" id="install_ucenter_standalone" name="install_ucenter" value="standalone" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /><label for="install_ucenter_standalone">全新安裝 Discuz! X（獨立模式安裝）</label></div>',
	'install_dzfull' => '<div class="selradio"><input type="radio" id="install_ucenter_yes"'.(getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" /><label for="install_ucenter_yes">全新安裝 Discuz! X 與 UCenter Server</label></div>',
	'install_dzonly' => '<div class="selradio"><input type="radio" id="install_ucenter_no"'.(getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /><label for="install_ucenter_no">僅安裝 Discuz! X（連接到已經安裝的 UCenter Server）</label></div>',

	'username' => '管理員帳號',
	'email' => '管理員 Email',
	'password' => '管理員密碼',
	'password_comment' => '管理員密碼不能為空',
	'password2' => '重複密碼',

	'admininfo_invalid' => '管理員資料不完整，請檢查管理員帳號，密碼，信箱',
	'dbname_invalid' => '資料庫名稱為空，請填寫資料庫名稱',
	'tablepre_invalid' => '資料表字首為空，或者格式錯誤，請檢查',
	'admin_username_invalid' => '非法會員名稱，會員名稱長度不應當超過 15 個英文字元，且不能包含特殊字元，一般是中文，字母或者數字',
	'admin_password_invalid' => '密碼和上面不一致，請重新輸入',
	'admin_email_invalid' => 'Email 錯誤，此信箱已經被使用或者格式無效，請更換',
	'admin_invalid' => '您的管理員資料沒有填寫完整，請仔細填寫每個項目',
	'admin_exist_password_error' => '該會員已經存在，如果您要設定此會員為論壇的管理員，請正確輸入該會員的密碼，或者請更換論壇管理員的名字',

	'tagtemplates_subject' => '標題',
	'tagtemplates_uid' => '會員 ID',
	'tagtemplates_username' => '發文者',
	'tagtemplates_dateline' => '日期',
	'tagtemplates_url' => '主題網址',

	'uc_version_incorrect' => '您的 UCenter 伺服器端版本過低，請升級 UCenter 伺服器端到最新版本，並且升級，下載網址：https://www.discuz.vip/。',
	'config_unwriteable' => '安裝精靈無法寫入組態檔案，請設定 config.inc.php 程式屬性為可寫狀態（777）',

	'install_in_processed' => '正在安裝...',
	'install_succeed' => '安裝成功，點選進入',

	'init_credits_karma' => '威望',
	'init_credits_money' => '金錢',

	'init_postno0' => '樓主',
	'init_postno1' => '沙發',
	'init_postno2' => '板凳',
	'init_postno3' => '地板',

	'init_support' => '支持',
	'init_opposition' => '反對',

	'init_group_0' => '會員',
	'init_group_1' => '管理員',
	'init_group_2' => '超級版主',
	'init_group_3' => '版主',
	'init_group_4' => '禁止發言',
	'init_group_5' => '禁止瀏覽',
	'init_group_6' => '禁止 IP',
	'init_group_7' => '遊客',
	'init_group_8' => '等待驗證會員',
	'init_group_9' => '乞丐',
	'init_group_10' => '新手上路',
	'init_group_11' => '註冊會員',
	'init_group_12' => '中級會員',
	'init_group_13' => '高級會員',
	'init_group_14' => '金牌會員',
	'init_group_15' => '論壇元老',

	'init_rank_1' => '新生入學',
	'init_rank_2' => '小試牛刀',
	'init_rank_3' => '實習記者',
	'init_rank_4' => '自由撰稿人',
	'init_rank_5' => '特聘作家',

	'init_cron_1' => '清空今日發文數',
	'init_cron_2' => '清空本月上線時間',
	'init_cron_3' => '每日資料清理',
	'init_cron_4' => '生日統計與郵件祝福',
	'init_cron_5' => '主題回覆通知',
	'init_cron_6' => '每日公告清理',
	'init_cron_7' => '限時操作清理',
	'init_cron_8' => '論壇推廣清理',
	'init_cron_9' => '每月主題清理',
	'init_cron_10' => '每日 X-Space 更新會員',
	'init_cron_11' => '每週主題更新',

	'init_bbcode_1' => '使內容橫向滾動，這個效果類似 HTML 的 marquee 標籤，注意：這個效果只在 Internet Explorer 瀏覽器下有效。',
	'init_bbcode_2' => '嵌入 Flash 動畫',
	'init_bbcode_3' => '顯示 QQ 線上狀態，點這個圖示可以和他（她）聊天',
	'init_bbcode_4' => '上標',
	'init_bbcode_5' => '下標',
	'init_bbcode_6' => '嵌入 Windows media 音訊',
	'init_bbcode_7' => '嵌入 Windows media 音訊或視訊影片',

	'init_qihoo_searchboxtxt' =>'輸入關鍵詞,快速搜尋本論壇',
	'init_threadsticky' =>'全域置頂,分類置頂,本版置頂',

	'init_default_style' => '預設風格',
	'init_default_forum' => '預設版區',
	'init_default_template' => '預設模板套系',
	'init_default_template_copyright' => 'Discuz!',

	'init_dataformat' => 'Y-n-j',
	'init_modreasons' => '廣告/SPAM\r\n惡意灌水\r\n違規內容\r\n文不對題\r\n重複發文\r\n\r\n我很讚同\r\n精品文章\r\n原創內容',
	'init_userreasons' => '很給力！\r\n神馬都是浮雲\r\n贊一個!\r\n山寨\r\n淡定',
	'init_link' => 'Discuz! 官方論壇',
	'init_link_note' => '提供最新 Discuz! 產品新聞、軟體下載與技術交流',

	'init_promotion_task' => '網站推廣任務',
	'init_gift_task' => '紅包類任務',
	'init_avatar_task' => '頭像類任務',

	'copyright' => '&copy; 2001-'.date('Y').' <a href="https://code.dismall.com/" target="_blank">Discuz! Team</a>.',

	'license' => '
<div class="license"><h1>中文版授權條款 適用於中文用戶</h1>
<p>版權所有 (c) 2001-'.date('Y').'，騰訊雲計算（北京）有限責任公司 保留所有權利。</p>

<p>感謝您選擇騰訊雲產品。希望我們的努力能為您提供一個高效快速、強大的網站解決方案，和強大的社群論壇解決方案。產品官方討論區網址為 https://www.dismall.com。產品官方應用中心網址為：https://addon.dismall.com。開放原始碼網址為 https://code.dismall.com。</p>

<p>騰訊雲產品的 Discuz! X 專案內所包含的官方應用中心由合肥貳道網路科技有限公司承接營運。Discuz! X 開源專案由合肥貳道網路科技有限公司承接維護，Discuz! X 開放原始碼由專案開源管理委員會及社群開發者共同維護。除以上服務外，均由騰訊雲提供服務。</p>

<p>用戶須知：本協議是您與騰訊雲公司之間關於您使用騰訊雲公司提供的各種軟體產品及服務的法律協定。無論您是個人或組織、盈利與否、用途如何（包括以學習和研究為目的），均需仔細閱讀本協議，包括免除或者限制騰訊雲責任的免責條款及對您的權利限制。請您審閱並接受或不接受本服務條款。如您不同意本服務條款及/或騰訊雲隨時對其的修改，您應不使用或主動取消騰訊雲公司提供的騰訊雲產品。否則，您的任何對騰訊雲產品中的相關服務的註冊、登入、下載、檢視等使用行為將被視為您對本服務條款全部的完全接受，包括接受騰訊雲對服務條款隨時所做的任何修改。</p>
<p>本服務條款一旦發生變更，騰訊雲將在網頁上公佈修改內容。修改後的服務條款一旦在網站管理後臺上公佈即有效代替原來的服務條款。您可隨時登入開放原始碼網址查閱最新版服務條款。如果您選擇接受本條款，即表示您同意接受協議各項條件的約束。如果您不同意本服務條款，則不能獲得使用本服務的權利。您若有違反本條款規定，騰訊雲公司有權隨時中止或終止您對騰訊雲產品的使用資格並保留追究相關法律責任的權利。</p>
<p>在理解、同意、並遵守本協定的全部條款後，方可開始使用騰訊雲產品。您可能與騰訊雲公司直接簽訂另一書面協定，以補充或者取代本協定的全部或者任何部分。</p>

<p>騰訊雲擁有本軟體的全部智慧財產權。本軟體只供授權合約，並非出售。騰訊雲只允許您在遵守本協定各項條款的情況下複製、下載、安裝、使用或者以其他方式受益於本軟體的功能或者智慧財產權。</p>

<h3>I. 條款許可的權利</h3>
<ol>
   <li>您可以在完全遵守本授權合約的基礎上，將本軟體應用於非商業用途或商業用途使用（局限於本協定所適配許可的情況下），而不必支付軟體版權許可費用。</li>
   <li>您可以在協議規定的約束和限制範圍內修改騰訊雲產品原始程式碼（如果被提供的話）或介面風格以適應您的網站要求。</li>
   <li>您擁有使用本軟體構建的網站中全部會員資料、文章及相關資訊的所有權，並獨立承擔與使用本軟體構建的網站內容的審核、注意義務，確保其不侵犯任何人的合法權益，獨立承擔因使用騰訊雲軟體和服務帶來的全部責任，若造成騰訊雲公司或用戶損失的，您應予以全部賠償。</li>
   <li>若您需將騰訊雲軟體或服務使用者商業用途，必須遵守中華人民共和國相關法律。若需提供技術支援方式或技術支援內容，請向官方（https://www.discuz.vip/）獲取技術支援服務。</li>
   <li>您可以從騰訊雲提供的應用中心服務中下載適合您網站的應用程式，但應向應用程式開發者/所有者支付相應的費用。</li>
</ol>

<h3>II. 條款規定的約束和限制</h3>
<ol>
   <li>不得對本軟體或與之關聯的商業授權進行出租、出售、抵押或發放子許可證。</li>
   <li>無論如何，即無論用途如何、是否經過修改或美化、修改程度如何，只要使用騰訊雲產品的整體或任何部分，未經書面許可，頁面頁腳處的 Powered by Discuz! 及連結（https://www.discuz.vip/）和程式後臺官方應用商店的連結（https://addon.dismall.com）都必須保留，而不能清除或修改、替換。</li>
   <li>禁止在騰訊雲產品的整體或任何部分基礎上以發展任何衍生版本、修改版本或協力廠商版本用於重新分發。</li>
   <li>您從應用中心下載的應用程式，未經應用程式開發者/所有者的書面許可，不得對其進行反向工程、反向彙編、反向編譯等，不得擅自複製、修改、連結、轉載、彙編、發表、出版、發展與之有關的衍生產品、作品等。</li>
   <li>如果您未能遵守本協議的條款，您的授權將被終止，所許可的權利將被收回，同時您應承擔相應法律責任。</li>
</ol>

<h3>III. 有限擔保和免責聲明</h3>
<ol>
   <li>本軟體及所附帶的檔案是作為不提供任何明確的或隱含的賠償或擔保的形式提供的。</li>
   <li>使用者出於自願而使用本軟體，您必須瞭解使用本軟體的風險，我們不承諾提供任何形式的技術支援、使用擔保，也不承擔任何因使用本軟體而產生問題的相關責任。</li>
   <li>騰訊雲公司不對使用本軟體構建的網站中或者論壇中的文章或資訊承擔責任，全部責任由您自行承擔。</li>
   <li>官方應用中心無法全面監控由協力廠商上傳至應用中心的應用程式，因此不保證應用程式的合法性、安全性、完整性、真實性或品質等；您從應用中心下載應用程式時，同意自行判斷並承擔所有風險，而不依賴於騰訊雲公司及官方應用中心。但在任何情況下，官方應用中心有權依法停止應用中心服務並採取相應行動，包括但不限於對於相關應用程式進行移除，暫停服務的全部或部分，保留相關記錄，並向有關機關報告。由此對您及第三人可能造成的損失，騰訊雲公司及官方應用中心不承擔任何直接、間接或者連帶的責任。</li>
   <li>騰訊雲公司對騰訊雲提供的軟體和服務之及時性、安全性、準確性不作擔保，由於不可抗力因素、騰訊雲公司無法控制的因素（包括駭客攻擊、停斷電等）等造成軟體使用和服務中止或終止，而給您造成損失的，您同意放棄追究騰訊雲公司責任的全部權利。</li>
   <li>騰訊雲公司特別提請您注意，騰訊雲公司為了保障公司業務發展和調整的自主權，騰訊雲公司擁有隨時經或未經事先通知而修改服務內容、中止或終止部分或全部軟體使用和服務的權利，修改會公佈於騰訊雲公司網站相關頁面上，一經公佈視為通知。騰訊雲公司行使修改或中止、終止部分或全部軟體使用和服務的權利而造成損失的，騰訊雲公司不需對您或任何協力廠商負責。</li>
</ol>

<p>有關騰訊雲產品最終使用者授權協定、商業授權與技術服務的詳細內容，均由騰訊雲公司獨家提供。騰訊雲公司擁有在不事先通知的情況下，修改授權協定和服務價目表的權利，修改後的協議或價目表對自改變之日起的新授權使用者生效。</p>

<p>一旦您開始安裝騰訊雲產品，即被視為完全理解並接受本協議的各項條款，在享有上述條款授予的權利的同時，受到相關的約束和限制。協議許可範圍以外的行為，將直接違反本授權協議並構成侵權，我們有權隨時終止授權，責令停止損害，並保留追究相關責任的權力。</p>

<p>本授權合約條款的解釋，效力及糾紛的解決，適用於中華人民共和國大陸法律。</p>

<p>若您和騰訊雲之間發生任何糾紛或爭議，首先應友好協商解決，協商不成的，您在此完全同意將糾紛或爭議提交騰訊雲所在地北京市海淀區人民法院管轄。騰訊雲公司擁有對以上各項條款內容的解釋權及修改權。</p>

<p>（正文完）</p>

<p align="right">Discuz!</p>

</div>',

	'php8_tips' => '您好，當前產品暫不支援 PHP 9 安裝，請降級到至少 PHP 7.4 後再試！',
	'no_utf8_tips' => '您好，您使用的版本為 GBK / BIG-5 等當地語系化編碼版本，此版本已經不作為主推版本，如果您計畫建設新網站【強烈】建議您使用最新正式 UTF-8 版本安裝。',
	'no_latest_tips' => '您好，您使用的版本較舊，可能存在 Bug 以及安全隱憂，如無特殊情況建議您改用最新正式 UTF-8 版本安裝。',
	'unstable_tips' => '您好，您使用的版本為非正式版本，可能存在未知的 Bug 或漏洞，如果您計畫正式建站或購買外掛程式建議您使用最新正式 UTF-8 版本安裝。',
	'next_tips' => '\r\n點選【確定】跳轉到最新正式 UTF-8 版本下載網頁，點選【取消】繼續安裝（不建議）',

	'uc_installed' => '您已經安裝過 UCenter，如果需要重新安裝，請刪除 data/install.lock 檔案',
	'i_agree' => '我已仔細閱讀，並同意上述條款中的所有內容',
	'supportted' => '支援',
	'unsupportted' => '不支援',
	'max_size' => '支援/最大大小',
	'project' => '項目',
	'ucenter_required' => 'Discuz! 所需配置',
	'ucenter_best' => 'Discuz! 最佳',
	'curr_server' => '目前伺服器',
	'env_check' => '環境檢查',
	'os' => '作業系統',
	'php' => 'PHP 版本',
	'attachmentupload' => '附件上傳',
	'unlimit' => '不限制',
	'version' => '版本',
	'gdversion' => 'GD Library',
	'allow' => '允許 ',
	'unix' => 'Unix-like',
	'diskspace' => '磁碟空間',
	'opcache' => 'OPcache',
	'curl' => 'cURL Library',
	'priv_check' => '目錄、檔案權限檢查',
	'func_depend' => '函數依賴性檢查',
	'func_name' => '函數名稱',
	'check_result' => '檢查結果',
	'suggestion' => '建議',
	'advice_mysqli' => '請檢查 mysqli 模組是否正確載入',
	'advice_fopen' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_xml' => '該函數需要 PHP 支援 XML。請聯繫空間商，確定開啟了此項功能',
	'none' => '無',
	'undefine_func' => '不存在的函數',
	'mysqli_unsupport' => '請檢查 mysqli 模組是否正確載入',

	'dbhost' => '資料庫伺服器位址',
	'dbuser' => '資料庫使用者名稱',
	'dbpw' => '資料庫使用者密碼',
	'dbname' => '資料庫名稱',
	'tablepre' => '資料表字首',

	'ucfounderpw' => '創始人密碼',
	'ucfounderpw2' => '重複創始人密碼',

	'clear_dir' => '清空目錄',
	'innodb' => 'InnoDB 資料表轉換',
	'select_db' => '選擇資料庫',
	'create_table' => '建立資料表',
	'succeed' => '成功',
	'failed' => '失敗',

	'init_table_data' => '正在初始化資料表中的資料',
	'install_data' => '正在安裝資料',
	'install_test_data' => '正在安裝附加資料',

	'method_undefined' => '未定義方法',
	'database_nonexistence' => '資料庫操作對像不存在',
	'skip_current' => '跳過本步',
	'topic' => '專題',
	'install_finish' => '網站安裝完成，感謝您的支持！',
	'install_finish_next' => '接下來您可以：',
	'finish_btn_admin' => '進入管理後臺',
	'finish_btn_cloudaddon' => '安裝插件模板',
	'finish_btn_direct' => '直接瀏覽網站',

);

$msglang = array(
	'config_nonexistence' => '您的 config.inc.php 不存在，無法繼續安裝，請用 FTP 將該檔案上傳後再試。',
);

?>