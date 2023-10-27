<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: config_ucenter_default.php 11023 2010-05-20 02:23:09Z monkey $
 */

// ============================================================================
define('UC_CONNECT', 'mysql');				// 連線 UCenter 的方式：mysql/NULL，預設為空時為 fscoketopen()，mysql 是直接連線的資料庫，為了效率，建議採用 mysql
define('UC_STANDALONE', 1);				// 獨立模式開關，0=關閉，1=打開，開啟後將不再依賴 UCenter Server。注意：開啟時必須將 UC_CONNECT 改為 mysql！
// 資料庫相關 （mysql 連線時）
define('UC_DBHOST', 'localhost');			// UCenter 資料庫主機位址
define('UC_DBUSER', '');				// UCenter 資料庫使用者名稱
define('UC_DBPW', '');				// UCenter 資料庫使用者密碼
define('UC_DBNAME', '');				// UCenter 資料庫名稱
define('UC_DBCHARSET', 'utf8mb4');				// UCenter 資料庫編碼
define('UC_DBTABLEPRE', '`ucenter`.uc_');		// UCenter 資料庫資料表字首
define('UC_DBCONNECT', '0');				// UCenter 資料庫持續連線 0=關閉，1=開啟
// 頭像相關
define('UC_AVTURL', '');		// 頭像服務的基礎路徑，為空則為預設值，可以設定為獨立網域名稱/路徑（結尾不能有 /），配合 CDN 使用更佳。如涉及 avatar.php 需在其中再設定一次。
define('UC_AVTPATH', '');		// 頭像儲存路徑，為空則為預設值，僅限獨立模式使用，建議維持預設。

// 通訊相關
define('UC_KEY', 'yeN3g9EbNfiaYfodV63dI1j8Fbk5HaL7W4yaW4y7u2j4Mf45mfg2v899g451k576');	// 與 UCenter 的通訊密鑰，要與 UCenter 保持一致
define('UC_API', 'http://localhost/ucenter/branches/1.5.0/server'); // UCenter 的 URL 網址，在調用頭像時依賴此常數
define('UC_CHARSET', 'utf-8');				// UCenter 的編碼
define('UC_IP', '127.0.0.1');				// UCenter 的 IP，當 UC_CONNECT 為非 mysql 方式時，並且目前應用伺服器解析網域名稱有問題時，請設定此值
define('UC_APPID', '1');				// 目前應用的 ID

// ============================================================================

define('UC_PPP', '20');

?>