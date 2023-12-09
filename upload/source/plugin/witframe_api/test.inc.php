<?php

if (!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

/*
// 調用範例

// 引用庫
require_once DISCUZ_ROOT.'./source/plugin/witframe_api/core.php';

$siteuniqueid = $_G['setting']['siteuniqueid'];

// 自動註冊網站資訊，取得網站設定資訊
$conf = Lib\Site::Discuz_GetConf($siteuniqueid);
print_r($conf);

// 增加應用的授權，自動增加 Sample 應用的授權
Lib\Site::AddAuthInfo(10005, 1003, 'abcdE');

// 調用 apis
$r = Lib\Apis::Sample_v1_apis(['now' => time()]);
print_r($r);

// 返回登入 Wit 的連結
$r = Lib\Site::Discuz_LoginWit($siteuniqueid);
echo $r['url'];

*/