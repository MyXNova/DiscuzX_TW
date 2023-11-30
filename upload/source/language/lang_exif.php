<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_exif.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(

	'unknown' => '不明',
	'resolutionunit' => array('', '', '英吋', '厘米'),
	'exposureprogram' => array('不明', '手動', '一般', '光圈先決', '快門先決', '景深先決', '運動模式', '肖像模式', '風景模式'),
	'meteringmode' => array(
		'0'		=>	'不明',
		'1'		=>	'平均',
		'2'		=>	'中央測光平均值',
		'3'		=>	'位置',
		'4'		=>	'多重位置',
		'5'		=>	'花色',
		'6'		=>	'部分',
		'255'	=>	'其他'
		),
	'lightsource' => array(
		'0'		=>	'不明',
		'1'		=>	'日光',
		'2'		=>	'螢光燈',
		'3'		=>	'鎢絲燈',
		'10'	=>	'閃光燈',
		'17'	=>	'標準照度 A',
		'18'	=>	'標準照度 B',
		'19'	=>	'標準照度 C',
		'20'	=>	'D55',
		'21'	=>	'D65',
		'22'	=>	'D75',
		'255'	=>	'其他'
		),
	'img_info' => array ('檔案資訊' => '沒有圖片 EXIF 資訊'),

	'FileName' => '檔案名稱',
	'FileType' => '檔案類型',
	'MimeType' => '檔案格式',
	'FileSize' => '檔案大小',
	'FileDateTime' => '拍攝日期',
	'ImageDescription' => '圖片描述',
	'auto'     => '自動',
	'Make'     => '相機廠商',
	'Model'    => '相機型號',
	'Orientation' => '方向',
	'XResolution' => '水平解析度',
	'YResolution' => '垂直解析度',
	'Software'    => '程式名稱',
	'DateTime'    => '取得的日期',
	'Artist'      => '作者',
	'YCbCrPositioning' => 'YCbCr 位置控制',
	'Copyright'   => '版權所有',
	'Photographer'=> '攝影版權',
	'Editor'      => '編輯版權',
	'ExifVersion' => 'Exif 版本',
	'FlashPixVersion' => 'FlashPix 版本',
	'DateTimeOriginal' => '拍攝時間',
	'DateTimeDigitized'=> '電子日期',
	'Height'  => '拍攝解析度高',
	'Width'   => '拍攝解析度寬',
	'ApertureValue' => '光圈',
	'ShutterSpeedValue' => '快門速度',
	'ApertureFNumber'   => '光圈孔徑',
	'MaxApertureValue'  => '最大光圈',
	'ExposureTime'      => '曝光時間',
	'FNumber'           => 'F 值',
	'MeteringMode'      => '計量模式',
	'LightSource'       => '光源',
	'Flash'             => '閃光燈',
	'ExposureMode'		=> '曝光模式',
	'manual'            => '手動',
	'WhiteBalance'      => '白平衡',
	'ExposureProgram'   => '曝光程式',
	'ExposureBiasValue' => '曝光補償',
	'ISOSpeedRatings'   => 'ISO 感光度',
	'ComponentsConfiguration' => '零件設定',
	'CompressedBitsPerPixel'  => '圖片壓縮率',
	'FocusDistance'     => '對焦距離',
	'FocalLength'       => '焦距',
	'FocalLengthIn35mmFilm' => '35mm 焦距',
	'UserCommentEncoding' => '使用者註解編碼',
	'UserComment'		=> '使用者註解',
	'ColorSpace'		=> '色彩空間',
	'ExifImageLength'   => 'Exif 圖像寬度',
	'ExifImageWidth'    => 'Exif 圖像高度',
	'FileSource'        => '檔案來源',
	'SceneType'			=> '場景類型',
	'ThumbFileType'     => '縮圖檔案格式',
	'ThumbMimeType'     => '縮圖 Mime 格式'
);

?>