<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: config_global_default.php 36362 2017-02-04 02:02:03Z nemohou $
 */

$_config = array();

// 提示：自當前版本起，本檔案不支援引用系統內任何變數或函數，請依賴此行為的網站修正實現 //

// ----------------------------  CONFIG DB  ----------------------------- //
// ----------------------------  資料庫相關設定---------------------------- //

/**
 * 資料庫主伺服器設定，支援多組伺服器設定，當設定多組伺服器時，則會根據分散式策略使用某個伺服器
 * @example
 * $_config['db']['1']['dbhost'] = 'localhost'; // 伺服器位址
 * $_config['db']['1']['dbuser'] = ''; // 資料庫使用者名稱
 * $_config['db']['1']['dbpw'] = '';// 資料庫使用者密碼
 * $_config['db']['1']['dbcharset'] = 'utf8mb4';// 編碼
 * $_config['db']['1']['pconnect'] = '0';// 是否持續連線
 * $_config['db']['1']['dbname'] = '';// 資料庫名稱
 * $_config['db']['1']['tablepre'] = 'pre_';// 資料表名稱字首
 *
 * $_config['db']['2']['dbhost'] = 'localhost';
 * ...
 *
 */
$_config['db'][1]['dbhost']  		= '127.0.0.1';
$_config['db'][1]['dbuser']  		= '';
$_config['db'][1]['dbpw'] 	 	= '';
$_config['db'][1]['dbcharset'] 		= 'utf8mb4';
$_config['db'][1]['pconnect'] 		= 0;
$_config['db'][1]['dbname']  		= '';
$_config['db'][1]['tablepre'] 		= 'pre_';

/**
 * 資料庫從伺服器設定（slave，唯讀），支援多組伺服器設定，當設定多組伺服器時，系統根據每次隨機使用
 * @example
 * $_config['db']['1']['slave']['1']['dbhost'] = 'localhost';
 * $_config['db']['1']['slave']['1']['dbuser'] = '';
 * $_config['db']['1']['slave']['1']['dbpw'] = '';
 * $_config['db']['1']['slave']['1']['dbcharset'] = 'utf8mb4';
 * $_config['db']['1']['slave']['1']['pconnect'] = '0';
 * $_config['db']['1']['slave']['1']['dbname'] = '';
 * $_config['db']['1']['slave']['1']['tablepre'] = 'pre_';
 * $_config['db']['1']['slave']['1']['weight'] = '0'; //權重：資料越大權重越高
 *
 * $_config['db']['1']['slave']['2']['dbhost'] = 'localhost';
 * ...
 *
 */
$_config['db']['1']['slave'] = array();

//啟用從伺服器的開關
$_config['db']['slave'] = false;
/**
 * 資料庫 分散式部署策略設定
 *
 * @example 將 common_member 部署到第二伺服器，common_session 部署在第三伺服器，則設定為
 * $_config['db']['map']['common_member'] = 2;
 * $_config['db']['map']['common_session'] = 3;
 *
 * 對於沒有明確聲明伺服器的資料表，則一律預設部署在第一伺服器上
 *
 */
$_config['db']['map'] = array();

/**
 * 資料庫 共用設定，此類設定通常對針對每個部署的伺服器
 */
$_config['db']['common'] = array();

/**
 *  禁用從資料庫的資料表，資料表名稱之間使用逗號分割
 *
 * @example common_session, common_member 這兩個表僅從主伺服器讀寫，不使用從伺服器
 * $_config['db']['common']['slave_except_table'] = 'common_session, common_member';
 *
 */
$_config['db']['common']['slave_except_table'] = '';

/*
 * 資料庫引擎，根據自己的資料庫引擎進行設定，3.5 之後預設為 innodb，之前為 myisam
 * 對於從 3.4 升級到 3.5，並且沒有轉換資料庫引擎的使用者，在此設定為 myisam
 */
$_config['db']['common']['engine'] = 'innodb';

/**
 * 記憶體伺服器優化設定
 * 以下設定需要 PHP 延伸元件支援，其中 memcache 優先於其他設定，
 * 當 memcache 無法啟用時，會自動開啟另外的兩種優化模式
 */

//記憶體變數字首，可更改，避免同伺服器中的程式引用錯亂
$_config['memory']['prefix'] = 'discuz_';

/* reids 設定，需要 PHP 延伸元件支援，timeout 參數的作用沒有查證 */
$_config['memory']['redis']['server'] = '';
$_config['memory']['redis']['port'] = 6379;
$_config['memory']['redis']['pconnect'] = 1;
$_config['memory']['redis']['timeout'] = 0;
$_config['memory']['redis']['requirepass'] = '';
$_config['memory']['redis']['db'] = 0;				//這裡可以填寫 0 到 15 的數字，每個網站使用不同的 db
/**
 * 此設定現在已經取消，預設對 array 使用 php serializer 進行編碼儲存，其它資料直接原樣儲存
 */
// $_config['memory']['redis']['serializer'] = 1;

$_config['memory']['memcache']['server'] = '';			// memcache 伺服器位址
$_config['memory']['memcache']['port'] = 11211;			// memcache 伺服器連接埠
$_config['memory']['memcache']['pconnect'] = 1;			// memcache 是否持續連線
$_config['memory']['memcache']['timeout'] = 1;			// memcache 伺服器連線逾時

$_config['memory']['memcached']['server'] = '';			// memcached 伺服器位址
$_config['memory']['memcached']['port'] = 11211;		// memcached 伺服器連接埠


$_config['memory']['apc'] = 0;							// 啟動對 APC 的支援
$_config['memory']['apcu'] = 0;							// 啟動對 APCu 的支援
$_config['memory']['xcache'] = 0;						// 啟動對 xcache 的支援
$_config['memory']['eaccelerator'] = 0;					// 啟動對 eaccelerator 的支援
$_config['memory']['wincache'] = 0;						// 啟動對 wincache 的支援
$_config['memory']['yac'] = 0;     						// 啟動對 YAC 的支援
$_config['memory']['file']['server'] = '';				// File 快取存放目錄，如設定為 data/cache/filecache ，設定後啟動 File 快取
// 伺服器相關設定
$_config['server']['id']		= 1;			// 伺服器編號，多 webserver 的時候，用於標識目前伺服器的 ID

// 附件下載相關
//
// 本地端檔案讀取模式; 模式 2 為最節省記憶體方式，但不支援多線程下載
// 如需附件 URL 位址、媒體附件播放，需選擇支援 Range 參數的讀取模式 1 或 4，其他模式會導致部分瀏覽器下視訊播放異常
// 1=fread 2=readfile 3=fpassthru 4=fpassthru+multiple
$_config['download']['readmod'] = 2;

// 是否啟用 X-Sendfile 功能（需要伺服器支援）0=close 1=nginx 2=lighttpd 3=apache
$_config['download']['xsendfile']['type'] = 0;

// 啟用 nginx X-sendfile 時，論壇附件目錄的虛擬映射路徑，請使用 / 結尾
$_config['download']['xsendfile']['dir'] = '/down/';

// 網頁輸出設定
$_config['output']['charset'] 			= 'utf-8';	// 網頁編碼
$_config['output']['forceheader']		= 1;		// 強制輸出網頁編碼，用於避免某些環境亂碼
$_config['output']['gzip'] 			= 0;		// 是否採用 Gzip 壓縮輸出
$_config['output']['tplrefresh'] 		= 1;		// 模板自動重新整理開關 0=關閉，1=開啟
$_config['output']['language'] 			= 'zh_tw';	// 網頁語言 zh_cn/zh_tw
$_config['output']['staticurl'] 		= 'static/';	// 網站靜態檔案路徑，「/」結尾
$_config['output']['ajaxvalidate']		= 0;		// 是否嚴格驗證 Ajax 頁面的真實性 0=關閉，1=開啟
$_config['output']['upgradeinsecure']	= 0;		// 在 HTTPS 環境下請求瀏覽器升級 HTTP 內鏈到 HTTPS，此選項影響外域資源連結且與自訂 CSP 衝突 0=關閉（預設），1=打開
$_config['output']['css4legacyie']		= 1;		// 是否載入相容低版本 IE 的 css 檔案 0=關閉，1=打開（預設），關閉可避免現代瀏覽器載入不必要的資料，但 IE6～8 的顯示效果會受較大影響，IE9 受較小影響。

// COOKIE 設定
$_config['cookie']['cookiepre'] 		= 'discuz_'; 	// COOKIE 字首
$_config['cookie']['cookiedomain'] 		= ''; 		// COOKIE 作用網域
$_config['cookie']['cookiepath'] 		= '/'; 		// COOKIE 作用路徑

// 網站安全設定
$_config['security']['authkey']			= 'asdfasfas';	// 網站加密密鑰
$_config['security']['urlxssdefend']		= true;		// 自身 URL XSS 防禦
$_config['security']['attackevasive']		= 0;		// CC 攻擊防禦 1|2|4|8
$_config['security']['onlyremoteaddr']      = 0;        // 使用者 IP 位置取得方式 0 = 信任 HTTP_CLIENT_IP、HTTP_X_FORWARDED_FOR（預設） 1 = 只信任 REMOTE_ADDR（推薦）
								// 考慮到防止 IP 撞庫攻擊、IP 限制策略失效的風險，建議您設定為 1。使用 CDN 的使用者可以設定 ipgetter 選項
								// 安全提示：由於 UCenter、UC_Client 獨立性原因，您需要單獨在兩個應用程式內定義常數，從而開啟功能

$_config['security']['useipban']			= 1;		// 是否開啟允許/禁止 IP 功能，高負載網站可以將此功能疏解至 HTTP Server/CDN/SLB/WAF 上，降低伺服器壓力
$_config['security']['querysafe']['status']	= 1;		// 是否開啟 SQL 安全檢測，可自動預防 SQL 注入攻擊
$_config['security']['querysafe']['dfunction']	= array('load_file','hex','substring','if','ord','char');
$_config['security']['querysafe']['daction']	= array('@','intooutfile','intodumpfile','unionselect','(select', 'unionall', 'uniondistinct');
$_config['security']['querysafe']['dnote']	= array('/*','*/','#','--','"');
$_config['security']['querysafe']['dlikehex']	= 1;
$_config['security']['querysafe']['afullnote']	= 0;

$_config['security']['creditsafe']['second'] 	= 0;		// 開啟使用者積分資訊安全，可防止併發刷分，滿足 times（次數）/ second（秒）的操作無法提交
$_config['security']['creditsafe']['times'] 	= 10;

$_config['security']['fsockopensafe']['port']	= array(80, 443);	//fsockopen 有效的連接埠
$_config['security']['fsockopensafe']['ipversion']	= array('ipv6', 'ipv4');	//fsockopen 有效的 IP 協定
$_config['security']['fsockopensafe']['verifypeer']	= false;	// fsockopen 是否驗證憑證有效性，開啟可提升安全性，但需自行解決憑證設定問題

$_config['security']['error']['showerror'] = '1';	//是否在資料庫或系統嚴重異常時顯示錯誤詳細資訊，0=不顯示（更安全），1=顯示詳細資訊（預設），2=只顯示錯誤本身
$_config['security']['error']['guessplugin'] = '1';	//是否在資料庫或系統嚴重異常時猜測可能報錯的插件，0=不猜測，1=猜測（預設）

$_config['admincp']['founder']			= '1';		// 網站創始人：擁有網站管理後台的最高權限，每個網站可以設定 1 名或多名創始人
													// 可以使用 uid，也可以使用會員名稱；多個創始人之間請使用逗號「,」分開;
$_config['admincp']['forcesecques']		= 1;		// 管理人員必須設定安全提問才能進入系統設定 0=否，1=是[安全]
$_config['admincp']['checkip']			= 1;		// 後台管理操作是否驗證管理員的 IP，1=是[安全]，0=否。僅在管理員無法登入後台時設定 0。
$_config['admincp']['runquery']			= 0;		// 是否允許後台執行 SQL 語句 1=是 0=否[安全]
$_config['admincp']['dbimport']			= 1;		// 是否允許後台恢復論壇資料  1=是 0=否[安全]
$_config['admincp']['mustlogin']		= 1;		// 是否必須前臺登入後才允許後臺登入  1=是[安全] 0=否

/**
 * 系統遠端調用功能模組
 */

// 遠端調用：總開關 0=關  1=開
$_config['remote']['on'] = 0;

// 遠端調用：程式目錄名稱。出於安全考慮，您可以更改這個目錄名稱，修改完畢，請手動修改程式的實際目錄
$_config['remote']['dir'] = 'remote';

// 遠端調用：通訊密鑰。用於客戶端和本伺服器端的通訊加密。長度不少於 32 位
//          預設值是 $_config['security']['authkey']	的 md5，您也可以手動指定
$_config['remote']['appkey'] = md5($_config['security']['authkey']);

// 遠端調用：開啟外部 cron 任務。系統內部不再執行 cron，cron 任務由外部程式啟用
$_config['remote']['cron'] = 0;

// $_GET|$_POST 的相容處理，0 為關閉，1 為開啟；開啟後即可使用 $_G['gp_xx']（xx 為變數名稱，$_GET 和 $_POST 集合的所有變數名稱），值為已經 addslashes() 處理過
// 考慮到安全風險，自 X3.5 版本起本開關恢復預設值為 0 的設定，後續版本可能取消此功能，請各位開發人員注意
$_config['input']['compatible'] = 0;

/**
 * IP 資料庫擴充
 * $_config['ipdb'] 下除 setting 外均可用作自訂擴充 IP 資料庫設定選項，也歡迎大家 PR 自己的擴充 IP 資料庫。
 * 擴充 IP 資料庫的設定，請使用格式：
 * 		$_config['ipdb']['擴充 ip 資料庫名稱']['設定項名稱'] = '值';
 * 比如：
 * 		$_config['ipdb']['redis_ip']['server'] = '172.16.1.8';
 */
$_config['ipdb']['setting']['fullstack'] = '';	// 系統使用的全棧 IP 資料庫，優先順序最高
$_config['ipdb']['setting']['default'] = '';	// 系統使用的預設 IP 資料庫，優先順序最低
$_config['ipdb']['setting']['ipv4'] = 'tiny';	// 系統使用的預設 IPv4 資料庫，留空為使用預設資料庫
$_config['ipdb']['setting']['ipv6'] = 'v6wry'; // 系統使用的預設 IPv6 資料庫，留空為使用預設資料庫

/**
 * IP 獲取擴充
 * 考慮到不同的 CDN 服務供應商提供的判斷 CDN 源 IP 的策略不同，您可以定義自己服務供應商的 IP 獲取擴充。
 * 為空為使用預設體系，非空情況下會自動調用 source/class/ip/getter_值.php 內的 get 方法獲取 IP 地址。
 * 系統提供 dnslist（IP 反解析網域名稱白名單）、serverlist（IP 地址白名單，支援 CIDR）、header 擴充，具體請參考擴充檔案。
 * 效能提示：自帶的兩款工具由於依賴 RDNS、CIDR 判定等操作，對系統效率有較大影響，建議大流量網站使用 HTTP Server
 * 或 CDN/SLB/WAF 上的 IP 黑白名單等邏輯實現 CDN IP 地址白名單，隨後使用 header 擴充指定服務商提供的 IP 頭的方式實現。
 * 安全提示：由於 UCenter、UC_Client 獨立性及擴充性原因，您需要單獨修改相關檔的相關業務邏輯，從而實現此類功能。
 * $_config['ipgetter'] 下除 setting 外均可用作自訂 IP 獲取模型設定選項，也歡迎大家 PR 自己的擴充 IP 獲取模型。
 * 擴充 IP 獲取模型的設定，請使用格式：
 * 		$_config['ipgetter']['IP 獲取副檔名稱']['設定項名稱'] = '值';
 * 比如：
 * 		$_config['ipgetter']['onlinechk']['server'] = '100.64.10.24';
 */
$_config['ipgetter']['setting'] = 'header';
$_config['ipgetter']['header']['header'] = 'HTTP_X_FORWARDED_FOR';
$_config['ipgetter']['iplist']['header'] = 'HTTP_X_FORWARDED_FOR';
$_config['ipgetter']['iplist']['list']['0'] = '127.0.0.1';
$_config['ipgetter']['dnslist']['header'] = 'HTTP_X_FORWARDED_FOR';
$_config['ipgetter']['dnslist']['list']['0'] = 'comsenz.com';

// Addon Setting
//$_config['addonsource'] = 'xx1';
//$_config['addon'] = array(
//    'xx1' => array(
//	'website_url' => 'http://127.0.0.1/AppCenter',
//	'download_url' => 'http://127.0.0.1/AppCenter/index.php',
//	'download_ip' => '',
//	'check_url' => 'http://127.0.0.1/AppCenter/?ac=check&file=',
//	'check_ip' => ''
//    )
//);

?>