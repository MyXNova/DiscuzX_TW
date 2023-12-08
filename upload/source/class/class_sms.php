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


class sms {

	// DISCUZ_CLASS_SMS_TYPE 表示寬泛業務類型，以便區分是否需要驗證
	// 驗證類短訊為 0，通知類短訊為 1
	const DISCUZ_CLASS_SMS_TYPE_SECCODE = 0;
	const DISCUZ_CLASS_SMS_TYPE_MESSAGE = 1;

	// DISCUZ_CLASS_SMS_SRVTYPE 表示特定業務類型，以便快速查詢對應業務
	// 系統級手機號碼驗證業務為 1，系統級短消息通知業務為 2
	// 第三方業務可設置為 0 或不低於 10000 的整數
	const DISCUZ_CLASS_SMS_SRVTYPE_OTHERSRV = 0;
	const DISCUZ_CLASS_SMS_SRVTYPE_SECCHECK = 1;
	const DISCUZ_CLASS_SMS_SRVTYPE_NEWSLETT = 2;

	// DISCUZ_CLASS_SMS_ERROR 表示短訊發送中的錯誤資訊
	// 當前步驟正常返回 0
	// 發送時間短於設置返回 -1，單號碼發送次數風控規則不通過返回 -2，萬號段風控規則不通過返回 -3，全域風控規則不通過返回 -4，無可用閘道返回 -5，閘道介面檔案不存在返回 -6，
	// 閘道介面類別不存在返回 -7，短訊功能已被關閉返回 -8，短訊閘道私有異常返回 -9
	const DISCUZ_CLASS_SMS_ERROR_NOWNOERR = 0;
	const DISCUZ_CLASS_SMS_ERROR_TIMELESS = -1;
	const DISCUZ_CLASS_SMS_ERROR_NUMLIMIT = -2;
	const DISCUZ_CLASS_SMS_ERROR_MILLIMIT = -3;
	const DISCUZ_CLASS_SMS_ERROR_GLBLIMIT = -4;
	const DISCUZ_CLASS_SMS_ERROR_CTFSMSGW = -5;
	const DISCUZ_CLASS_SMS_ERROR_CTFGWNME = -6;
	const DISCUZ_CLASS_SMS_ERROR_CTFGWCLS = -7;
	const DISCUZ_CLASS_SMS_ERROR_SMSDISAB = -8;
	const DISCUZ_CLASS_SMS_ERROR_SMSGWERR = -9;

	// DISCUZ_CLASS_SMS_VERIFY 代表短訊驗證結果
	// 未通過校驗為 0，通過校驗為 1
	const DISCUZ_CLASS_SMS_VERIFY_FAIL = 0;
	const DISCUZ_CLASS_SMS_VERIFY_PASS = 1;

	// DISCUZ_CLASS_SMSGW_GWTYPE 代表閘道類型
	// 消息短訊為 1，模板短訊為 0
	const DISCUZ_CLASS_SMSGW_GWTYPE_MSG = 0;
	const DISCUZ_CLASS_SMSGW_GWTYPE_TPL = 1;

	// 校驗用戶獲取到的驗證碼是否正確
	public static function verify($uid, $svctype, $secmobicc, $secmobile, $seccode, $updateverify = 1) {
		// 限制時間區間，預設 86400 秒
		$smstimelimit = getglobal('setting/smstimelimit');
		$smstimelimit = $smstimelimit > 0 ? $smstimelimit : 86400;
		$lastsend = C::t('common_smslog')->get_lastsms_by_uumm($uid, $svctype, $secmobicc, $secmobile);
		$result = self::DISCUZ_CLASS_SMS_VERIFY_FAIL;
		if($seccode == $lastsend['content'] && !$lastsend['verify'] && time() - $lastsend['dateline'] < $smstimelimit) {
			$result = self::DISCUZ_CLASS_SMS_VERIFY_PASS;
		}
		if($updateverify) {
			C::t('common_smslog')->update($lastsend['smslogid'], array('verify' => 1));
		}
		return $result;
	}

	public static function send($uid, $smstype, $svctype, $secmobicc, $secmobile, $content, $force) {
		// 獲取使用者基礎資訊
		$time = time();
		$ip = getglobal('clientip');
		$port = getglobal('remoteport');

		// 判斷短訊功能是否開啟、用戶是否允許發送短訊
		$check = self::check($uid, $secmobicc, $secmobile, $time, $ip, $port, $force);
		if($check < 0) {
			self::log($smstype, $svctype, 0, $check, $uid, $secmobicc, $secmobile, $time, $ip, $port, $content);
			return $check;
		}

		// 獲取對應的短訊閘道
		$smsgw = self::smsgw($smstype, $secmobicc);
		if($smsgw < 0) {
			self::log($smstype, $svctype, 0, $smsgw, $uid, $secmobicc, $secmobile, $time, $ip, $port, $content);
			return $smsgw;
		}

		// 載入閘道檔案進行發送
		$output = self::output($smsgw, $uid, $smstype, $svctype, $secmobicc, $secmobile, $content);
		self::log($smstype, $svctype, 0, $output, $uid, $secmobicc, $secmobile, $time, $ip, $port, $content);
		return $output;
	}

	protected static function check($uid, $secmobicc, $secmobile, $time, $ip, $port, $force) {
		// $ip 和 $port 是為後續可能新增的基於 IP 地址的風控所做的預留
		// 具體是否實現需要看上線之後的具體情況
		if(!getglobal('setting/smsstatus')) {
			return self::DISCUZ_CLASS_SMS_ERROR_SMSDISAB;
		}

		if(!$force) {
			// 限制時間區間，預設 86400 秒
			$smstimelimit = getglobal('setting/smstimelimit');
			$smstimelimit = $smstimelimit > 0 ? $smstimelimit : 86400;
			// 單用戶/單號碼短訊限制時間區間內總量，預設 5 條
			$smsnumlimit = getglobal('setting/smsnumlimit');
			$smsnumlimit = $smsnumlimit > 0 ? $smsnumlimit : 5;
			// 單用戶/單號碼短訊時間間隔，預設 300 秒
			$smsinterval = getglobal('setting/smsinterval');
			$smsinterval = $smsinterval > 0 ? $smsinterval : 300;
			// 萬號段短訊限制時間區間內總量，預設 20 條
			$smsmillimit = getglobal('setting/smsmillimit');
			$smsmillimit = $smsmillimit > 0 ? $smsmillimit : 20;
			// 全域短訊限制時間區間內總量，預設 1000 條
			$smsglblimit = getglobal('setting/smsglblimit');
			$smsglblimit = $smsglblimit > 0 ? $smsglblimit : 1000;

			// 單號碼/單使用者風控規則
			$ut = C::t('common_smslog')->get_sms_by_ut($uid, $smstimelimit);
			$mmt = C::t('common_smslog')->get_sms_by_mmt($secmobicc, $secmobile, $smstimelimit);
			if($time - $ut[0]['dateline'] < $smsinterval || $time - $mmt[0]['dateline'] < $smsinterval) {
				return self::DISCUZ_CLASS_SMS_ERROR_TIMELESS;
			}
			if(count($ut) > $smsnumlimit || count($mmt) > $smsnumlimit) {
				return self::DISCUZ_CLASS_SMS_ERROR_NUMLIMIT;
			}

			// 萬號段風控規則
			$lastmilion = C::t('common_smslog')->count_sms_by_milions_mmt($secmobicc, $secmobile, $smstimelimit);
			if($lastmilion > $smsmillimit) {
				return self::DISCUZ_CLASS_SMS_ERROR_MILLIMIT;
			}

			// 全域風控規則
			$globalsend = C::t('common_smslog')->count_sms_by_time($smstimelimit);
			if($globalsend > $smsglblimit) {
				return self::DISCUZ_CLASS_SMS_ERROR_GLBLIMIT;
			}
		}

		return self::DISCUZ_CLASS_SMS_ERROR_NOWNOERR;
	}

	protected static function smsgw($smstype, $secmobicc) {
		$smsgwlist = C::t('common_smsgw')->fetch_all_gw_avaliable();
		foreach($smsgwlist as $key => $value) {
			if(array_search($secmobicc, explode(',', $value['sendrule'])) !== false) {
				if($smstype == self::DISCUZ_CLASS_SMS_TYPE_MESSAGE && $value['type'] == self::DISCUZ_CLASS_SMSGW_GWTYPE_TPL) {
					continue;
				}
				$smsgw = $value;
			}
		}

		if(isset($smsgw)) {
			return $smsgw;
		} else {
			return self::DISCUZ_CLASS_SMS_ERROR_CTFSMSGW;
		}

	}

	protected static function output($smsgw, $uid, $smstype, $svctype, $secmobicc, $secmobile, $content) {
		global $_G;
		$efile = explode(':', $smsgw['class']);
		if(is_array($efile) && count($efile) > 1) {
			$smsgwfile = in_array($efile[0], $_G['setting']['plugins']['available']) ? DISCUZ_ROOT.'./source/plugin/'.$efile[0].'/smsgw/smsgw_'. $efile[1] . '.php' : '';
		} else {
			$smsgwfile = DISCUZ_ROOT.'./source/class/smsgw/smsgw_' . $smsgw['class'] . '.php';
		}

		if($smsgwfile) {
			include($smsgwfile);
			$classname = 'smsgw_' . ((is_array($efile) && count($efile) > 1) ? $efile[1] : $smsgw['class']);
			if(class_exists($classname)) {
				$class = new $classname();
				$class->parameters = dunserialize($smsgw['parameters']);
				$result = $class->send($uid, $smstype, $svctype, $secmobicc, $secmobile, array('content' => $content));
			} else {
				$result = self::DISCUZ_CLASS_SMS_ERROR_CTFGWCLS;
			}
		} else {
			$result = self::DISCUZ_CLASS_SMS_ERROR_CTFGWNME;
		}

		if($result < 0 && ($result == self::DISCUZ_CLASS_SMS_ERROR_CTFGWCLS || $result == self::DISCUZ_CLASS_SMS_ERROR_CTFGWNME)) {
			$data = array('available' => '0');
			C::t('common_smsgw')->update($smsgw['smsgwid'], $data);
		}

		return $result;
	}

	protected static function log($smstype, $svctype, $smsgw, $status, $uid, $secmobicc, $secmobile, $time, $ip, $port, $content = '') {
		return C::t('common_smslog')->insert(array('smstype' => $smstype, 'svctype' => $svctype, 'smsgw' => $smsgw, 'status' => $status, 'uid' => $uid, 'secmobicc' => $secmobicc, 'secmobile' => $secmobile, 'dateline' => $time, 'ip' => $ip, 'port' => $port, 'content' => $content));
	}

}