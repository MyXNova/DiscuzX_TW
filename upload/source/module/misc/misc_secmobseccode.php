<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id$
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

if($_GET['action'] == 'send') {

	$refererhost = parse_url($_SERVER['HTTP_REFERER']);
	$refererhost['host'] .= !empty($refererhost['port']) ? (':'.$refererhost['port']) : '';

	if($refererhost['host'] != $_SERVER['HTTP_HOST']) {
		showmessage('submit_invalid');
	}

	$svctype = empty($_GET['svctype']) ? 0 : $_GET['svctype'];
	$secmobicc = empty($_GET['secmobicc']) ? $_G['member']['secmobicc'] : $_GET['secmobicc'];
	$secmobile = empty($_GET['secmobile']) ? $_G['member']['secmobile'] : $_GET['secmobile'];
	list($seccodecheck, $secqaacheck) = seccheck('card');

	if((!$seccodecheck && !$secqaacheck) || submitcheck('seccodesubmit', 0, $seccodecheck, $secqaacheck)) {
		$length = $_G['setting']['smsdefaultlength'] ? $_G['setting']['smsdefaultlength'] : 4;
		$secmobseccode = random($length, 1);

		// 簡訊傳送前先校驗安全手機號碼是否正確，避免錯誤安全手機號碼送往簡訊閘道
		if(empty($secmobicc) || !preg_match('#^(\d){1,3}$#', $secmobicc)) {
			showmessage('profile_secmobicc_illegal');
		} else if(empty($secmobile) || !preg_match('#^(\d){1,12}$#', $secmobile)) {
			showmessage('profile_secmobile_illegal');
		}

		// 用戶 UID：$_G['uid']，簡訊類型：驗證類簡訊，服務類型：$svctype
		// 國際電話區號：$secmobicc，手機號碼：$secmobile，內容：$secmobseccode，強制傳送：false
		$result = sms::send($_G['uid'], 0, $svctype, $secmobicc, $secmobile, $secmobseccode, 0);

		// 傳送時間短於設定返回 -1，單個號碼傳送次數風控規則不通過返回 -2，萬號段風控規則不通過返回 -3，全域風控規則不通過返回 -4，無可用閘道返回 -5，閘道介面檔案不存在返回 -6，
		// 閘道介面類別不存在返回 -7，簡訊功能已被關閉返回 -8，簡訊閘道私有異常返回 -9
		if($result >= 0) {
			showmessage('secmobseccode_send_success', '', array(), array('alert' => 'right'));
		} else {
			if($result <= -1 && $result >= -9) {
				showmessage('secmobseccode_send_err_'.abs($result));
			} else {
				showmessage('secmobseccode_send_failure');
			}
		}
	} else {
		$handlekey = 'sendsecmobseccode';
		include template('common/secmobseccode');
	}

}