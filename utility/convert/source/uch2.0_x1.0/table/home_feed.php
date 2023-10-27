<?php

/**
 * DiscuzX Convert
 *
 * $Id: home_feed.php 10469 2010-05-11 09:12:14Z monkey $
 */

$curprg = basename(__FILE__);

$table_source = $db_source->tablepre.'feed';
$table_target = $db_target->tablepre.'home_feed';

$limit = $setting['limit']['feed'] ? $setting['limit']['feed'] : 1000;
$nextid = 0;

$start = getgpc('start');
if($start == 0) {
	$db_target->query("TRUNCATE $table_target");
}

$query = $db_source->query("SELECT  * FROM $table_source WHERE feedid>'$start' ORDER BY feedid LIMIT $limit");
while ($feed = $db_source->fetch_array($query)) {

	$nextid = $feed['feedid'];

	$feed  = daddslashes($feed, 1);

	$data = implode_field_value($feed, ',', db_table_fields($db_target, $table_target));

	$db_target->query("INSERT INTO $table_target SET $data");
}

if($nextid) {
	showmessage("繼續轉換資料表 ".$table_source." feedid> $nextid", "index.php?a=$action&source=$source&prg=$curprg&start=$nextid");
}

?>