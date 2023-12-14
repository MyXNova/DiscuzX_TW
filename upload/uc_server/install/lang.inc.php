<?php

define('UC_VERNAME', '中文版');

$lang = array(

	'SC_UTF8' => '简体中文 UTF8 版',
	'TC_UTF8' => '繁體中文 UTF8 版',

	'title_install' => SOFT_NAME.' 安裝精靈',
	'agreement_yes' => '我同意',
	'agreement_no' => '我不同意',
	'notset' => '不限制',

	'message_title' => '提示訊息',
	'error_message' => '錯誤訊息',
	'message_return' => '返回',
	'return' => '返回',
	'install_wizard' => '安裝精靈',
	'config_nonexistence' => '配置檔案不存在',
	'nodir' => '目錄不存在',
	'short_open_tag_invalid' => '對不起，請將 php.ini 中的 short_open_tag 設定為 On，否則無法繼續安裝。',
	'redirect' => '瀏覽器會自動跳轉頁面，無需人人員預。<br>除非當您的瀏覽器沒有自動跳轉時，請點選這裡',

	'database_errno_2003' => '無法連線資料庫，請檢查資料庫是否啟動，資料庫伺服器位址是否正確',
	'database_errno_1044' => '無法建立新的資料庫，請檢查資料庫名稱填寫是否正確',
	'database_errno_1045' => '無法連線資料庫，請檢查資料庫使用者名稱或者密碼是否正確',
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
	'tips_admininfo_comment' => '請牢記 UCenter 創始人密碼，憑該密碼登入 UCenter。',
	'step_ext_info_title' => '安裝成功 ',
	'step_ext_info_desc' => '點選進入登入',

	'ext_info_succ' => '安裝成功 ',
	'install_locked' => '安裝鎖定，已經安裝過了，如果您確定要重新安裝，請到伺服器上刪除<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => '您必須解決以上問題，安裝才可以繼續',

	'step_app_reg_title' => '設定執行環境',
	'step_app_reg_desc' => '檢測伺服器環境以及設定 UCenter',
	'tips_ucenter' => '請填寫 UCenter 相關資料',
	'tips_ucenter_comment' => 'UCenter 是 Comsenz 公司產品的核心服務程式，Discuz! Board 的安裝和執行依賴此程式。如果您已經安裝了 UCenter，請填寫以下資料。否則，請到 <a href="https://www.discuz.vip/" target="blank">Comsenz 產品中心</a> 下載並且安裝，然後再繼續。',

	'advice_mysqli_connect' => '請檢查 mysqli 模組是否正確載入',
	'advice_xml_parser_create' => '該函數需要 PHP 支援 XML。請聯繫空間商，確定開啟了此項功能',
	'advice_json_encode' => '該函數需要 PHP 支援 JSON 。請聯繫空間商，確定開啟了此項功能',
	'advice_fsockopen' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_pfsockopen' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_stream_socket_client' => '該函數需要 php.ini 中 stream_socket_client 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_curl_init' => '該函數需要 php.ini 中 curl_init 選項開啟。請聯繫空間商，確定開啟了此項功能',

	'undefine_func' => '不存在的函數',
	'mysqli_unsupport' => '請檢查 mysqli 模組是否正確載入',

	'ucurl' => 'UCenter 的 URL',
	'ucpw' => 'UCenter 創始人密碼',

	'tips_siteinfo' => '請填寫網站資料',
	'sitename' => '網站名稱',
	'siteurl' => '網站 URL',

	'forceinstall' => '強制安裝',
	'dbinfo_forceinstall_invalid' => '目前資料庫當中已經含有同樣資料表字首的資料表，您可以修改「資料表名稱字首」來避免刪除舊的資料，或者選擇強制安裝。強制安裝會刪除舊資料，且無法恢復',

	'click_to_back' => '點選返回上一步',
	'adminemail' => '系統信箱 Email',
	'adminemail_comment' => '用於寄送程式錯誤報告',
	'dbhost_comment' => '資料庫伺服器位址，一般為 localhost',
	'tablepre_comment' => '同一資料庫執行多個論壇時，請修改字首',
	'forceinstall_check_label' => '我要刪除資料，強制安裝 !!!',

	'uc_url_empty' => '您沒有填寫 UCenter 的 URL，請返回填寫',
	'uc_url_invalid' => 'URL 格式錯誤',
	'uc_url_unreachable' => 'UCenter 的 URL 網址可能填寫錯誤，請檢查',
	'uc_ip_invalid' => '無法解析該網域名稱，請填寫網站的 IP</font>',
	'uc_admin_invalid' => 'UC 創始人密碼錯誤，請重新填寫',
	'uc_data_invalid' => '通訊失敗，請檢查 UC 的 URL 網址是否正確 ',
	'ucenter_ucurl_invalid' => 'UC 的 URL 為空，或者格式錯誤，請檢查',
	'ucenter_ucpw_invalid' => 'UC 的 創始人密碼為空，或者格式錯誤，請檢查',
	'siteinfo_siteurl_invalid' => '網站 URL 為空，或者格式錯誤，請檢查',
	'siteinfo_sitename_invalid' => '網站名稱為空，或者格式錯誤，請檢查',
	'dbinfo_dbhost_invalid' => '資料庫伺服器位址為空，或者格式錯誤，請檢查',
	'dbinfo_dbname_invalid' => '資料庫名稱為空，或者格式錯誤，請檢查',
	'dbinfo_dbuser_invalid' => '資料庫使用者名稱為空，或者格式錯誤，請檢查',
	'dbinfo_dbpw_invalid' => '資料庫使用者密碼為空，或者格式錯誤，請檢查',
	'dbinfo_adminemail_invalid' => '系統信箱為空，或者格式錯誤，請檢查',
	'dbinfo_tablepre_invalid' => '資料表名稱字首不能包含符號".",不能以數字開頭',
	'admininfo_username_invalid' => '管理員會員名稱為空，或者格式錯誤，請檢查',
	'admininfo_email_invalid' => '管理員 Email 為空，或者格式錯誤，請檢查',
	'admininfo_ucfounderpw_invalid' => '管理員密碼為空，請填寫',
	'admininfo_ucfounderpw2_invalid' => '兩次密碼不一致，請檢查',

	'username' => '管理員帳號',
	'email' => '管理員 Email',
	'password' => '管理員密碼',
	'password_comment' => '管理員密碼不能為空',
	'password2' => '重複密碼',

	'admininfo_invalid' => '管理員資料不完整，請檢查管理員帳號，密碼，信箱',
	'dbname_invalid' => '資料庫名稱為空，請填寫資料庫名稱',
	'admin_username_invalid' => '非法會員名稱，會員名稱長度不應當超過 15 個英文字元，且不能包含特殊字元，一般是中文，字母或者數字',
	'admin_password_invalid' => '密碼和上面不一致，請重新輸入',
	'admin_email_invalid' => 'Email 錯誤，此信箱已經被使用或者格式無效，請更換為其他信箱',
	'admin_invalid' => '您的訊息管理員資料沒有填寫完整，請仔細填寫每個項目',
	'admin_exist_password_error' => '該會員已經存在，如果您要設定此會員為論壇的管理員，請正確輸入該會員的密碼，或者請更換論壇管理員的名字',

	'tagtemplates_subject' => '標題',
	'tagtemplates_uid' => '會員 ID',
	'tagtemplates_username' => '發文者',
	'tagtemplates_dateline' => '日期',
	'tagtemplates_url' => '主題網址',

	'uc_version_incorrect' => '您的 UCenter 伺服器端版本過低，請升級 UCenter 伺服器端到最新版本，並且升級，下載網址：https://www.discuz.vip/ 。',
	'config_unwriteable' => '安裝精靈無法寫入配置檔案，請設定 config.inc.php 程式屬性為可寫狀態(777)',

	'install_in_processed' => '正在安裝...',
	'install_succeed' => '安裝用戶中心成功，點選進入下一步',
	'copyright' => '&copy; 2001-'.date('Y').' <a href="https://code.dismall.com/" target="_blank">Discuz! Team</a>.',
	'license' => '<div class="license"><h1>中文版授權條款 適用於中文用戶</h1>

<p>版權所有 (c) 2001-'.date('Y').'，騰訊雲計算（北京）有限責任公司（原北京康盛新創科技有限責任公司）保留所有權利。</p>

<p>感謝您選擇 UCenter 產品。希望我們的努力能為您提供一個高效快速和強大的網站解決方案。</p>

<p>北京康盛新創科技有限責任公司為 UCenter 產品的開發商，依法獨立擁有 UCenter 產品著作權。UCenter 官方網站網址為 https://www.discuz.vip。</p>

<p>UCenter 著作權已在中華人民共和國國家版權局註冊，著作權受到法律和國際公約保護。使用者：無論個人或組織、盈利與否、用途如何（包括以學習和研究為目的），均需仔細閱讀本協議，在理解、同意、並遵守本協議的全部條款後，方可開始使用 UCenter 軟體。</p>

<p>本授權條款適用且僅適用於 UCenter 1.x 版本，北京康盛新創科技有限責任公司擁有對本授權條款的最終解釋權。</p>

<h3>I. 協議許可的權利</h3>
<ol>
<li>您可以在完全遵守本最終用戶授權條款的基礎上，將本軟體應用於非商業用途或商業用途使用（局限於本協定所適配許可的情況下），而不必支付軟體版權授權費用。</li>
<li>您可以在協議規定的約束和限制範圍內修改 UCenter 原始碼(如果被提供的話)或介面風格以適應您的網站要求。</li>
<li>您擁有使用本軟體構建的網站中全部會員資料、文章及相關資料的所有權，並獨立承擔與文章內容的相關法律義務。</li>
<li>將本軟體應用於商業用途，必須遵守中國人民共和國相關法律。若需提供技術支援方式或技術支援內容，請向官方（https://www.discuz.vip/）取得技術支援服務。</li>
</ol>

<h3>II. 協議規定的約束和限制</h3>
<ol>
<li>不得對本軟體或與之關聯的商業授權進行出租、出售、抵押或發放子許可證。</li>
<li>無論如何，即無論用途如何、是否經過修改或美化、修改程度如何，只要使用 UCenter 的整體或任何部分，未經書面許可，頁面頁腳處的 UCenter 名稱和下屬網站（https://www.discuz.vip） 的連結都必須保留，而不能清除或修改。</li>
<li>禁止在 UCenter 的整體或任何部分基礎上以發展任何派生版本、修改版本或第三方版本用於重新分發。</li>
<li>如果您未能遵守本協議的條款，您的授權將被終止，所被許可的權利將被收回，並承擔對應法律責任。</li>
</ol>

<h3>III. 有限擔保和免責聲明</h3>
<ol>
<li>本軟體及所附帶的檔案是作為不提供任何明確的或隱含的賠償或擔保的形式提供的。</li>
<li>用戶出於自願而使用本軟體，您必須瞭解使用本軟體的風險，我們不承諾提供任何形式的技術支援、使用擔保，也不承擔任何因使用本軟體而產生問題的相關責任。</li>
<li>北京康盛新創科技有限責任公司不對使用本軟體構建的網站中的文章或訊息承擔責任。</li>
</ol>

<p>有關 UCenter 最終用戶授權條款、商業授權與技術服務的詳細內容，均由 UCenter 官方網站獨家提供。北京康盛新創科技有限責任公司擁有在不事先通知的情況下，修改授權條款和服務價目表的權力，修改後的協議或價目表對自改變之日起的新授權用戶生效。</p>

<p>電子文字形式的授權條款如同雙方書面簽署的協議一樣，具有完全的和等同的法律效力。您一旦開始安裝 UCenter，即被視為完全理解並接受本協議的各項條款，在享有上述條款授予的權力的同時，受到相關的約束和限制。協議許可範圍以外的行為，將直接違反本授權條款並構成侵權，我們有權隨時終止授權，責令停止損害，並保留追究相關責任的權力。</p></div>',

	'uc_installed' => '您已經安裝過 UCenter，如果需要重新安裝，請刪除 data/install.lock 檔案',
	'i_agree' => '我已仔細閱讀，並同意上述條款中的所有內容',
	'supportted' => '支援',
	'unsupportted' => '不支援',
	'max_size' => '支援/最大大小',
	'project' => '項目',
	'ucenter_required' => 'UCenter 所需配置',
	'ucenter_best' => 'UCenter 最佳',
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
	'priv_check' => '目錄、檔案權限檢查',
	'func_depend' => '函數依賴性檢查',
	'func_name' => '函數名稱',
	'check_result' => '檢查結果',
	'suggestion' => '建議',
	'advice_mysql' => '請檢查 mysql 模組是否正確載入',
	'advice_fopen' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_file_get_contents' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_xml' => '該函數需要 PHP 支援 XML。請聯繫空間商，確定開啟了此項功能',
	'none' => '無',

	'dbhost' => '資料庫伺服器位址',
	'dbuser' => '資料庫使用者名稱',
	'dbpw' => '資料庫使用者密碼',
	'dbname' => '資料庫名稱',
	'tablepre' => '資料表字首',

	'ucfounderpw' => '創始人密碼',
	'ucfounderpw2' => '重複創始人密碼',

	'create_table' => '建立資料表',
	'succeed' => '成功 ',
);