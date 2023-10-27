<?php

$datadir = DISCUZ_ROOT.'./source/';

showtips('<li><strong>在開始轉換之前，請確保本程式目錄下的 data 目錄為可寫權限，否則無法存儲轉換設定</strong></li><li><strong>如果有 Discuz! 和 UChome 同時需要升級，請務必先升級 Discuz! 論壇</strong></li><li>請正確選擇轉換程式，否則可能造成無法轉換成功</li><li>本轉換程式不會破壞原始資料，所以轉換需要 2 倍於原始資料空間</li>');

if(is_dir($datadir)) {

	$cdir = dir($datadir);
	show_table_header();
	show_table_row(array(
			'原始版本',
			'目標版本',
			array('width="50%"', '簡介'),
			array('width="5%"', '說明'),
			array('width="5%"', '設定'),
			array('width="5%"', ''),
		), 'header title');
	while(($entry = $cdir->read()) !== false) {
		if(($entry != '.' && $entry != '..') && is_dir($datadir.$entry)) {
			$settingfile = $datadir.$entry.'/setting.ini';
			$readmefile = $datadir.$entry.'/readme.txt';

			$readme = file_exists($readmefile) ? '<a target="_blank" href="source/'.$entry.'/readme.txt">檢視</a>' : '';

			if(file_exists($settingfile) && $setting = loadsetting($entry)) {
				$trclass = $trclass == 'bg1' ? 'bg2' : 'bg1';
				show_table_row(
					array(
						$setting['program']['source'],
						$setting['program']['target'],
						$setting['program']['introduction'],
						array('align="center"', $readme),
						array('align="center"', '<a href="index.php?a=setting&source='.rawurlencode($entry).'">修改</a>'),
						array('align="center"', '<a href="index.php?a=config&source='.rawurlencode($entry).'">開始</a>'),
					), $trclass
				);
			}
		}
	}
	$cdir->close();
	show_table_footer();
} else {
	showmessage('config_child_error');
}