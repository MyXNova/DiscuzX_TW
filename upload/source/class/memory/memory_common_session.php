<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: table_common_session.php 28051 2012-02-21 10:36:56Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class memory_common_session
{
	private $_pre_cache_key;

	// 一段公用 LUA 代碼，用於基於 sids array，逐個載入資料，並返回
	const LUA_RETURN_DATA = <<<LUA
	local rs = {}
	for _, key in ipairs(sids) do
	local row = redis.call("hmget", prefix..key, "sid", "ip", "uid", "username", "groupid", "invisible", "action", "lastactivity", "lastolupdate", "fid", "tid")
	rs[#rs + 1] = row
	end
	return rs
LUA;

	public function __construct() {
		$this->_pre_cache_key = 'common_session_';
	}

	// 在 memory 啟用的情況下，直接從 memory 中讀取
	public function fetch($sid, $ip = false, $uid = false) {
		if(empty($sid)) {
			return array();
		}
		$session = $this->get_data_by_pk($sid);
		if($session && $ip !== false && $ip != "{$session['ip']}") {
			$session = array();
		}
		if($session && $uid !== false && $uid != $session['uid']) {
			$session = array();
		}
		return $session;
	}

	/*
	 * memory 下，基於以下幾個 SortedSet 進行集合運算
	 * 		idx_invisible_$invisible: SortedSet, member 是 sid, score 是 lastactivity
	 * 		idx_uid_group_0: uid=0 的 SortedSet, member 是 sid, score 是 lastactivity，
	 * 		idx_uid_group_1: uid>0 的 SortedSet, member 是 sid, score 是 lastactivity，
	 * 		idx_lastactivity: SortedSet, member 是 sid, score 是 lastactivity
	 */
	public function fetch_member($ismember = 0, $invisible = 0, $start = 0, $limit = 0) {
		if ($ismember < 1 || $ismember > 2) $ismember = 0; // $ismember 只有0, 1, 2 是合法值
		if ($invisible < 1 || $invisible > 2) $invisible = 0; // invisible 只有0, 1, 2 是合法值

		list($ss, $ee) = $this->get_start_and_end($start, $limit);
		($invisible == 2) ? $inv_idx = 0 : $inv_idx = 1; // $invisible == 2，相當於 sql 條件 invisible = 0
		($ismember == 2) ? $uid_idx = 0 : $uid_idx = 1; // $ismember == 2，相當於 sql 條件 uid = 0

		// $ismember == 0，表示不使用 uid 條件，$invisible == 0，表示不使用 invisible 條件
		if ($ismember == 0 && $invisible == 0) { // 使用 idx_lastactivity
			$script = <<<LUA
			local prefix = ARGV[1]
			local start = ARGV[2]
			local stop = ARGV[3]
			local sids = redis.call('ZREVRANGE', prefix..'idx_lastactivity', start, stop)
LUA;
			$data = memory('eval', $script . self::LUA_RETURN_DATA, array($ss, $ee), "fetch_member_1st", $this->_pre_cache_key);
		} elseif ($ismember == 0) { // 使用 idx_invisible_xx
			$script = <<<LUA
			local prefix = ARGV[1]
			local inv_idx = ARGV[2]
			local start = ARGV[3]
			local stop = ARGV[4]
			local sids = redis.call('ZREVRANGE', prefix..'idx_invisible_'..inv_idx, start, stop)
LUA;
			$data = memory('eval', $script . self::LUA_RETURN_DATA, array($inv_idx, $ss, $ee), "fetch_member_2nd", $this->_pre_cache_key);
		} elseif ($invisible == 0) { // 使用 idx_uid_group_0/1
			$script = <<<LUA
			local prefix = ARGV[1]
			local uid_idx = ARGV[2]
			local start = ARGV[3]
			local stop = ARGV[4]
			local sids = redis.call('ZREVRANGE', prefix..'idx_uid_group_'..uid_idx, start, stop)
LUA;
			$data = memory('eval', $script . self::LUA_RETURN_DATA, array($uid_idx, $ss, $ee), "fetch_member_3rd", $this->_pre_cache_key);
		} else { // 對 idx_invisible_$inv_idx 與 idx_uid_group_$uid_idx 求交集
			global $_G;
			$temp_uniq = substr(md5(substr(TIMESTAMP, 0, -3).substr($_G['config']['security']['authkey'], 3, -3)), 1, 8);
			$script = <<<LUA
			local prefix = ARGV[1]
			local inv_idx = ARGV[2]
			local uid_idx = ARGV[3]
			local out_surfix = ARGV[4]
			local start = ARGV[5]
			local stop = ARGV[6]
			local out_hash = prefix..'invisible_uid_'..out_surfix
			redis.call('ZINTERSTORE', out_hash, 2, prefix..'idx_invisible_'..inv_idx, prefix..'idx_uid_group_'..uid_idx, 'AGGREGATE', 'MIN')
			local sids = redis.call('ZREVRANGE', out_hash, start, stop)
			redis.call('DEL', out_hash)
LUA;
			$data = memory('eval', $script . self::LUA_RETURN_DATA, array($inv_idx, $uid_idx, $temp_uniq, $ss, $ee), "fetch_member_4th", $this->_pre_cache_key);
		}
		return $this->array_from_memory_result($data);
	}

	/*
	 * memory下，基於 idx_invisible_$invisible: SortedSet, member 是 sid, score 是 lastactivity
	 */
	public function count_invisible($type = 1) {
		return memory('zcard', 'idx_invisible_' . $type, $this->_pre_cache_key);
	}

	/*
	 * memory 時 三種情況：
	 * 		1. 無條件（所有行）：直接使用 idx_lastactivity 的大小
	 * 		2. uid = 0: 使用 idx_uid_group_0 的大小
	 * 		3. uid > 0: 使用 idx_uid_group_1 的大小
	 */
	public function count($type = 0) {
		switch ($type) {
			case 1:
				return memory('zcard', 'idx_uid_group_1', $this->_pre_cache_key);
			case 2:
				return memory('zcard', 'idx_uid_group_0', $this->_pre_cache_key);
			default:
				return memory('zcard', 'idx_lastactivity', $this->_pre_cache_key);
		}
	}

	/*
	 * 基於以下幾種情況刪除：
	 * 		$sid，基於 key 直接刪除: $prefix$sid
	 * 		$lastactivity < $onlinehold: 基於 idx_lastactivity sortedset 篩選
	 * 		$uid = 0 and $ip = clientip and $lastactivity > $guestspan: 基於 idx_uid_group_0 sortedset 篩選
	 * 		$uid = $session['uid']: 基於 uid set
	 * 刪除後要更新所有索引
	 * 		idx_ip_$ipaddress: SortedSet，member 是 sid, score 是 lastactivity
	 * 		idx_invisible_$invisible: SortedSet, member 是 sid, score 是 lastactivity
	 * 		idx_fid_$fid: SortedSet, member 是 sid, score 是 lastactivity
	 * 		idx_uid_group_0: uid=0 的 SortedSet, member 是 sid, score 是 lastactivity，
	 * 		idx_uid_group_1: uid>0 的 SortedSet, member 是 sid, score 是 lastactivity，
	 * 		idx_lastactivity: SortedSet, member 是 sid, score 是 lastactivity
	 * 		idx_uid_$uid: Set, member 是 sid
	 *
	 */
	public function delete_by_session($session, $onlinehold, $guestspan) {
		if(empty($session) || !is_array($session)) return;
		$onlinehold = time() - $onlinehold;
		$guestspan = time() - $guestspan;

		// 以下腳本，按原來 SQL 的條件逐個刪除，記錄刪除的所有資料，之後利用刪除的資料更新索引。
		// 在腳本執行的過程中，前面刪除過的資料，後面就獲取不到資料，因此不會被加入到 rs 中，因此 rs 中是沒有重複的資料的
		global $_G;
		$temp_uniq = substr(md5(substr(TIMESTAMP, 0, -3).substr($_G['config']['security']['authkey'], 3, -3)), 1, 8);
		$script = <<<LUA
		local rs = {}
		local prefix = ARGV[1]
		local sid = ARGV[2]
		local onlinehold = ARGV[3]
		local guestspan = ARGV[4]
		local userip = ARGV[5]
		local uid = ARGV[6]
		local out_surfix = ARGV[7]

		local function getdata(key)
		    local data = redis.call("HMGET", key, 'sid', 'ip', 'uid', 'invisible', 'fid')
		    if (data[1]) then
			return data
		    else
			return {}
		    end
		end

		local bysid = getdata(prefix..sid);
		if (#bysid > 0) then
		    redis.call("del", prefix..sid)
		    rs[#rs + 1] = bysid
		end

		-- lastactivity < onlinehold
		local byonlinehold = redis.call("ZRANGEBYSCORE", prefix.."idx_lastactivity", 0, onlinehold + 1);
		for _, sid in ipairs(byonlinehold) do
		    local data = getdata(prefix..sid);
		    if (#data > 0) then
			redis.call("del", prefix..sid)
			rs[#rs + 1] = data
		    end
		end

		-- uid = 0 and ip = userip
		local out_hash = prefix..'uid0_ip_'..out_surfix
		redis.call("ZINTERSTORE", out_hash, 2, prefix.."idx_uid_group_0", prefix.."idx_ip_"..userip, 'AGGREGATE', 'MIN')
		-- and lastactivity > guestspan
		local byguestspan = redis.call("ZRANGEBYSCORE", out_hash, guestspan + 1, '+inf')
		for _, sid in ipairs(byguestspan) do
		    local data = getdata(prefix..sid);
		    if ((#data > 0)) then
			redis.call("del", prefix..sid)
			rs[#rs + 1] = data
		    end
		end
		redis.call("DEL", out_hash)

		local byuid = redis.call("SMEMBERS", prefix.."idx_uid_"..uid);
		for _, sid in ipairs(byuid) do
		    local data = getdata(prefix..sid);
		    if (#data > 0) then
			redis.call("del", prefix..sid)
			rs[#rs + 1] = data
		    end
		end

		for _, row in ipairs(rs) do
		    redis.call("ZREM", prefix.."idx_ip_"..row[2], row[1])
		    redis.call("ZREM", prefix.."idx_invisible_"..row[4], row[1])
		    redis.call("ZREM", prefix.."idx_fid_"..row[5], row[1])
		    if (row[3] == '0') then
			redis.call("ZREM", prefix.."idx_uid_group_0", row[1])
		    else
			redis.call("ZREM", prefix.."idx_uid_group_1", row[1])
		    end
		    redis.call("ZREM", prefix.."idx_lastactivity", row[1])
		    redis.call("SREM", prefix.."idx_uid_"..row[3], row[1])
		end

		return #rs
LUA;
		memory('eval', $script, array($session['sid'], $onlinehold, $guestspan, $session['ip'], $session['uid'] ? $session['uid'] : -1, $temp_uniq), "delete_by_session", $this->_pre_cache_key);
	}

	// $prefix_idx_uid_$uid: Set
	public function fetch_by_uid($uid) {
		if(empty($uid)) {
			return false;
		}

		$sids = memory('smembers', 'idx_uid_' . $uid, $this->_pre_cache_key);
		foreach ($sids as $sid) {
			return $this->get_data_by_pk($sid); // 返回第一個
		}
		return false;
	}

	// $prefix_idx_uid_$uid: Set
	// $uids 可能是 array，多個 uid
	public function fetch_all_by_uid($uids, $start = 0, $limit = 0) {
		if(empty($uids)) {
			return array();
		}

		if (!is_array($uids)) {
			$uids = array($uids);
		}

		$script = <<<LUA
		local prefix = ARGV[1]
		local start = ARGV[2]
		local limit = ARGV[3] - start + 1
		local argv_index = 4
		local sid_index = 0
		local rs = {}
		while (ARGV[argv_index]) do
		    local sids = redis.call('SMEMBERS', prefix..'idx_uid_'..ARGV[argv_index])
		    for _, key in ipairs(sids) do
			if (sid_index >= start) then
			    local row = redis.call("hmget", prefix..key, "sid", "ip", "uid", "username", "groupid", "invisible", "action", "lastactivity", "lastolupdate", "fid", "tid")
			    rs[#rs + 1] = row
			    if (#rs >= limit) then
				return rs
			    end
			end
			sid_index = sid_index + 1
		    end
		    argv_index = argv_index + 1
		end
		return rs
LUA;
		list($ss, $ee) = $this->get_start_and_end($start, $limit);
		$data = memory('eval', $script, array_merge(array($ss, $ee), $uids), "fetch_all_by_uid", $this->_pre_cache_key);
		return $this->array_from_memory_result($data);
	}

	// $prefix_idx_uid_$uid: Set
	// 一個 UID 如果對應多個 SID，都更新
	public function update_by_uid($uid, $data) {
		if(!($uid = dintval($uid)) || empty($data) || !is_array($data)) {
			return 0;
		}

		// 先把所有 UID 對應的資料取出來
		$script = <<<LUA
		local prefix = ARGV[1]
		local uid = ARGV[2]
		local sids = redis.call('SMEMBERS', prefix..'idx_uid_'..uid)
LUA;
		$r = memory('eval', $script . self::LUA_RETURN_DATA, array($uid), "update_by_uid_query", $this->_pre_cache_key);
		$items = $this->array_from_memory_result($r);

		memory('pipeline');
		foreach ($items as $olditem) {
			$sid = $olditem['sid'];
			$data['sid'] = $sid; 	// $data 中可能沒有 sid
			memory('hmset', $sid, $data, 0, $this->_pre_cache_key);
			$this->update_memory_index($sid, $data, $olditem);
		}
		memory('commit');
	}

	public function update_max_rows($max_rows) {
		// 使用 memory 時不支援（無需）設置最大行數
		return TRUE;
	}

	public function clear() {
		// 使用 memory 時不支援清除操作
		// 現在只有 admincp_setting 中一處，在調用了 update_max_rows 之後，可能調用此操作
		// memory 中不支援 max_rows 設置，因此也不在此處支援 clear 操作
		return TRUE;
	}

	// $prefix_idx_fid_$fid: SortedSet, member 是 sid, score 是 lastactivity
	public function count_by_fid($fid) {
		$fid = dintval($fid);
		if (!$fid) return 0;
		global $_G;
		$temp_uniq = substr(md5(substr(TIMESTAMP, 0, -3).substr($_G['config']['security']['authkey'], 3, -3)), 1, 8);
		$script = <<<LUA
		local prefix = ARGV[1]
		local fid = ARGV[2]
		local out_surfix = ARGV[3]
		local out_hash = prefix..'uid_fid_inv_'..out_surfix
		-- uid > 0 and fid=fid and invisible = 0
		redis.call("ZINTERSTORE", out_hash, 3, prefix.."idx_uid_group_1", prefix.."idx_fid_"..fid, prefix.."idx_invisible_0", 'AGGREGATE', 'MIN')
		local rs = redis.call("ZCARD", out_hash)
		redis.call("DEL", out_hash)
		return rs
LUA;
		$data = memory('eval', $script, array($fid, $temp_uniq), "count_by_fid", $this->_pre_cache_key);
		return $data;
	}

	// $prefix_idx_fid_$fid: SortedSet, member 是 sid, score 是 lastactivity
	public function fetch_all_by_fid($fid, $limit = 12) {
		$fid = dintval($fid);
		if (!$fid) return array();

		global $_G;
		$temp_uniq = substr(md5(substr(TIMESTAMP, 0, -3).substr($_G['config']['security']['authkey'], 3, -3)), 1, 8);
		$script = <<<LUA
		local prefix = ARGV[1]
		local fid = ARGV[2]
		local limit = ARGV[3]
		local out_surfix = ARGV[4]
		local out_hash = prefix..'uid_fid_inv_'..out_surfix

		-- uid > 0 and fid=fid and invisible = 0
		redis.call("ZINTERSTORE", out_hash, 3, prefix.."idx_uid_group_1", prefix.."idx_fid_"..fid, prefix.."idx_invisible_0", 'AGGREGATE', 'MIN')

		local keys = redis.call("ZREVRANGE", out_hash, 0, limit - 1)
		redis.call("DEL", out_hash)
		local rs = {}
		for _, key in ipairs(keys) do
		    local row = redis.call("hmget", prefix..key, "uid", "groupid", "username", "invisible", "lastactivity")
		    rs[#rs + 1] = row
		end
		return rs
LUA;
		$data = memory('eval', $script, array($fid, $limit, $temp_uniq), "fetch_all_by_fid", $this->_pre_cache_key);
		$result = array();
		foreach ($data as $row) {
			$item = array();
			$item['uid'] = $row[0];
			$item['groupid'] = $row[1];
			$item['username'] = $row[2];
			$item['invisible'] = $row[3];
			$item['lastactivity'] = $row[4];
			$result[] = $item;
		}
		return $result;
	}

	// $prefix_idx_ip_$ipaddress: SortedSet，member 是 sid, score 是 lastactivity
	public function count_by_ip($ip) {
		if (empty($ip)) return 0;
		return memory('zcard', 'idx_ip_' . $ip, $this->_pre_cache_key);
	}

	// $prefix_idx_ip_$ipaddress: SortedSet，member 是 sid, score 是 lastactivity
	public function fetch_all_by_ip($ip, $start = 0, $limit = 0) {
		if (empty($ip)) return array();

		list($ss, $ee) = $this->get_start_and_end($start, $limit);
		$script = <<<LUA
		local prefix = ARGV[1]
		local ip = ARGV[2]
		local start = ARGV[3]
		local stop = ARGV[4]
		local sids = redis.call('ZREVRANGE', prefix..'idx_ip_'..ip, start, stop)
LUA;
		$data = memory('eval', $script . self::LUA_RETURN_DATA, array($ip, $ss, $ee), "fetch_all_by_ip", $this->_pre_cache_key);
		return $this->array_from_memory_result($data);
	}

	public function insert($data, $return_insert_id = false, $replace = false, $silent = false) {
		$id = $data['sid'];
		memory('pipeline');
		memory('hmset', $id, $data, 0, $this->_pre_cache_key);
		$this->update_memory_index($id, $data);
		memory('commit');
	}

	public function update($val, $data, $unbuffered = false, $low_priority = false) {
		$olddata = $this->get_data_by_pk($val);
		memory('pipeline');
		memory('hmset', $val, $data, 0, $this->_pre_cache_key);
		$this->update_memory_index($val, $data, $olddata);
		memory('commit');
	}

	/*
	 * 維護索引
	 * 以下幾個索引：
	 * 		idx_ip_$ipaddress: SortedSet，member 是 sid, score 是 lastactivity
	 * 		idx_invisible_$invisible: SortedSet, member 是 sid, score 是 lastactivity
	 * 		idx_fid_$fid: SortedSet, member 是 sid, score 是 lastactivity
	 * 		idx_uid_group_0: uid=0 的 SortedSet, member 是 sid, score 是 lastactivity，
	 * 		idx_uid_group_1: uid>0 的 SortedSet, member 是 sid, score 是 lastactivity，
	 * 		idx_lastactivity: SortedSet, member 是 sid, score 是 lastactivity
	 * 		idx_uid_$uid: Set, member 是 sid
	 */
	private function update_memory_index($sid, $newdata, $olddata = array()) {
		if (!empty($olddata) && !isset($olddata['lastactivity'])) { // 如果有原資料，則原資料中必須有 lastactivity
			return;
		}
		if (!empty($olddata) && !isset($newdata['lastactivity'])) { // 如果有原資料，但新資料中沒有 lastactivity，則使用原有的 lastactivity
			$newdata['lastactivity'] = $olddata['lastactivity'];
		}
		foreach ($newdata as $col => $value) {
			// 只針對以下建立索引
			if (!in_array($col, array("ip", "uid", "fid", "lastactivity", "invisible"))) continue;
			if (isset($olddata[$col])) { // 從原 index 中將 sid 刪除
				if ($olddata[$col] === $value && $olddata['lastactivity'] === $newdata['lastactivity']) { // 新舊值相等，且 score 也沒變，則不處理
					continue;
				}
				switch ($col) {
					case 'ip':
						memory('zrem', "idx_ip_" . $olddata[$col], $sid, 0, $this->_pre_cache_key);
						break;
					case 'lastactivity':
						memory('zrem', 'idx_lastactivity', $sid, 0, $this->_pre_cache_key);
						break;
					case 'fid':
						memory('zrem', "idx_fid_" . $olddata[$col], $sid, 0, $this->_pre_cache_key);
						break;
					case 'invisible':
						memory('zrem', "idx_invisible_" . $olddata[$col], $sid, 0, $this->_pre_cache_key);
						break;
					case 'uid':
						memory('zrem', "idx_uid_group_" . ($olddata[$col] == 0 ? '0' : '1'), $sid, 0, $this->_pre_cache_key);
						memory('srem', "idx_uid_" . $olddata[$col], $sid, 0, $this->_pre_cache_key);
						break;
					default:
						continue 2;
				}
			}
			// 在新 index 中加入 sid
			switch ($col) {
				case 'ip':
				case 'fid':
				case 'invisible':
					memory('zadd', 'idx_' . $col . "_" . $value, $sid, $newdata['lastactivity'], $this->_pre_cache_key);
					break;
				case 'lastactivity':
					memory('zadd', 'idx_lastactivity', $sid, $newdata['lastactivity'], $this->_pre_cache_key);
					break;
				case 'uid':
					memory('zadd', "idx_uid_group_" . ($value == 0 ? '0' : '1'), $sid, $newdata['lastactivity'], $this->_pre_cache_key);
					memory('sadd', 'idx_uid_' . $value, $sid, 0, $this->_pre_cache_key);
					break;
				default:
					continue 2;
			}
		}
	}

	/*
	 * 將以下調用的結果處理成 array 返回
	 * 	redis.call("hmget", key, "sid", "ip", "uid", "username", "groupid", "invisible", "action", "lastactivity", "lastolupdate", "fid", "tid")
	 */
	private function array_from_memory_result($data) {
		$result = array();
		foreach ($data as $row) {
			$item = array();
			$item['sid'] = $row[0];
			$item['ip'] = $row[1];
			$item['uid'] = $row[2];
			$item['username'] = $row[3];
			$item['groupid'] = $row[4];
			$item['invisible'] = $row[5];
			$item['action'] = $row[6];
			$item['lastactivity'] = $row[7];
			$item['lastolupdate'] = $row[8];
			$item['fid'] = $row[9];
			$item['tid'] = $row[10];
			$result[] = $item;
		}
		return $result;
	}

	/*
	 * 根據 sid 返回所有資料
	 */
	private function get_data_by_pk($sid) {
		$data = memory('hgetall', $sid, $this->_pre_cache_key);
		return $data;
	}

	/*
	 * 從 $start 和 $limit 計算 start 和 end
	 * 當 $limit 為 0 時，$start 參數表示 limit
	 */
	private function get_start_and_end($start, $limit) {
		$limit = intval($limit > 0 ? $limit : 0);
		$start = intval($start > 0 ? $start : 0);
		if ($start > 0 && $limit > 0) {
			return array($start, $start + $limit - 1);
		} elseif ($limit > 0) {
			return array(0, $limit - 1);
		} elseif ($start > 0) {
			return array(0, $start - 1);
		} else {
			return array(0, -1);
		}
	}
}

?>