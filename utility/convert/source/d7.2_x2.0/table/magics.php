<?php

/**
 * DiscuzX Convert
 *
 * $Id: magics.php 15719 2010-08-25 23:51:36Z monkey $
 */

$curprg = basename(__FILE__);

$table_source = $db_source->tablepre.'magics';
$table_target = $db_target->tablepre.'common_magic';
$table_target_setting = $db_target->tablepre.'common_setting';

$limit = 1000;
$nextid = 0;

$start = getgpc('start');
if($start == 0) {
	$db_target->query("TRUNCATE $table_target");
}

$identifier = array(
	'CCK' => 'highlight',
	'MOK' => 'money',
	'SEK' => 'showip',
	'UPK' => 'bump',
	'TOK' => 'stick',
	'REK' => 'repent',
	'RTK' => 'checkonline',
	'CLK' => 'close',
	'OPK' => 'open',
	'YSK' => 'anonymouspost',
	'CBK' => 'namepost',
);

$query = $db_source->query("SELECT  * FROM $table_source WHERE magicid>'$start' ORDER BY magicid LIMIT $limit");
while ($row = $db_source->fetch_array($query)) {

	$nextid = $row['magicid'];
	if($row['identifier'] == 'MVK') {
		continue;
	}

	unset($row['type'], $row['recommend'], $row['filename']);
	$row['useevent'] = $row['identifier'] == 'MOK' ? 1 : 0;
	$row['identifier'] = $identifier[$row['identifier']];
	if(!$row['identifier']) {
		continue;
	}

	$row  = daddslashes($row, 1);

	$data = implode_field_value($row, ',', db_table_fields($db_target, $table_target));

	$db_target->query("INSERT INTO $table_target SET $data");
}

if($nextid) {
	showmessage("繼續轉換資料表 ".$table_source." magicid > $nextid", "index.php?a=$action&source=$source&prg=$curprg&start=$nextid");
} else {
	if(!$db_target->result_first("SELECT COUNT(*) FROM $table_target WHERE credit>'0'")) {
		$settings_creditstrans = $db_target->result_first("SELECT svalue FROM $table_target_setting WHERE skey='creditstrans'");
		$creditstranssi = explode(',', $settings_creditstrans);
		$creditstran = $creditstranssi[3] ? $creditstranssi[3] : $creditstranssi[0];
		$db_target->query("UPDATE $table_target SET credit='$creditstran'");
	}
	$db_target->query("UPDATE $table_target SET name='變色卡', description='可以將文章或網誌的標題醒目提示，變更顏色' WHERE identifier='highlight'");
	$db_target->query("UPDATE $table_target SET name='顯身卡', description='可以檢視一次匿名會員的真實身份。' WHERE identifier='namepost'");
	$db_target->query("UPDATE $table_target SET name='匿名卡', description='在指定的地方，讓自己的名字顯示為匿名。' WHERE identifier='anonymouspost'");
}

?>