<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php 35030 2014-10-23 07:43:23Z laoguozhang $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$lang = array
(
	'hello' => '您好',
	'moderate_member_invalidate' => '否決',
	'moderate_member_delete' => '刪除',
	'moderate_member_validate' => '通過',

	'comma' => '，',
	'show_sender' => '這封信是由 {$var[\'bbname\']} 寄送的。',
	'show_reason' => '您收到這封 E-mail，是由於',
	'have_not_visit' => '如果您並沒有瀏覽過 {$var[\'bbname\']}，',
	'have_not_do_this' => '或沒有進行上述操作，',
	'not_interested' => '如果您對此不感興趣，',
	'ignore_email' => '請忽略這封 E-mail。',
	'no_more_action' => '您不需要退訂或進行其他進一步的操作。',
	'important' => '重要！',
	'if_not_link' => '如果上面不是連結形式，請將該位址手工複製到瀏覽器網址欄再瀏覽',
	'msg_start' => '信件原文開始',
	'msg_end' => '信件原文結束',
	'not_responsible' => '網站管理團隊不會對這類 E-mail 負責。',
	'show_ip' => '本請求提交者的 IP 為 {$var[\'clientip\']}',
	'welcome_visit' => '歡迎您瀏覽 {$_G[\'setting\'][\'bbname\']}',
	'thanks_for_visit' => '感謝您的瀏覽，祝您使用愉快！',
	'sincerely' => '此致',
	'admin_team' => '{$var[\'bbname\']} 管理團隊',


	'get_passwd_subject' => '取回密碼說明',
	'get_passwd_reason' => '這個 E-mail 信箱地址在 {$var[\'bbname\']} 被登記為用戶 E-mail 信箱，且該使用者請求使用 Email 密碼重置功能所致。',
	'get_passwd_if_not' => '如果您沒有提交密碼重置的請求或不是 {$var[\'bbname\']} 的註冊用戶，請立即忽略並刪除這封 E-mail。只有在您確認需要重置密碼的情況下，才需要繼續閱讀下面的內容。',
	'get_passwd_explain' => '密碼重置說明',
	'get_passwd_click_link' => '您只需在提交請求後的三天內，透過點選下面的連結重置您的密碼：',
	'get_passwd_new_pwd' => '在上面的連結所打開的網頁中輸入新的密碼後提交，您即可使用新的密碼登入網站了。您可以在使用者控制台中隨時修改您的密碼。',

	'password_reset_subject' => '密碼變更提示',
	'password_reset_reason' => '在 {$var[\'bbname\']} 被登記為用戶 E-mail 信箱，且該用戶操作重置或者變更了密碼所致。',
	'password_reset_if_not' => '如果您不是 {$var[\'bbname\']} 的註冊用戶，請立即忽略並刪除這封 E-mail。只有在您是 {$var[\'bbname\']} 的註冊使用者的情況下，才需要繼續閱讀下面的內容。',
	'password_reset_explain' => '您在 {$var[\'bbname\']} 的用戶帳戶 {$var[\'username\']} 在 {$var[\'datetime\']} 進行了密碼變更或重置。',
	'password_reset_if_not_user_op' => '如果您沒有操作密碼變更或者重置，請您立即登入 {$var[\'bbname\']} 檢查帳戶情況，並進行變更密碼操作。',
	'password_reset_if_not_user_op_help' => '在處理問題時如果您有任何問題或需要幫助（如凍結帳戶），請聯繫 {$var[\'bbname\']} 管理團隊獲取更多幫助與支援。',

	'email_verify_subject' => 'E-mail 地址驗證',
	'email_verify_reason' => '在 {$var[\'bbname\']} 進行了新用戶註冊，或用戶修改 E-mail 使用了這個 E-mail 信箱地址。',
	'email_verify_explain' => '帳號啟動說明',
	'email_verify_explain2' => '如果您是 {$var[\'bbname\']} 的新用戶，或在修改您的註冊 E-mail 時使用了本地址，我們需要對您的 E-mail 信箱地址有效性進行驗證以避免垃圾 E-mail 或 E-mail 地址被濫用。',
	'email_verify_click_link' => '您只需點選下面的連結即可啟動您的帳號：',

	'email_reset_subject' => 'E-mail 信箱地址變更提示',
	'email_reset_reason' => '在 {$var[\'bbname\']} 被登記為用戶 E-mail 信箱，且該用戶操作 E-mail 地址變更所致。',
	'email_reset_if_not' => '如果您不是 {$var[\'bbname\']} 的註冊用戶，請立即忽略並刪除這封 E-mail。只有在您是 {$var[\'bbname\']} 的註冊使用者的情況下，才需要繼續閱讀下面的內容。',
	'email_reset_explain' => '您在 {$var[\'bbname\']} 的用戶帳戶 {$var[\'username\']} 在 {$var[\'datetime\']} 進行了 E-mail 信箱地址變更。',
	'email_reset_new_email' => '新的 E-mail 地址為：{$var[\'email\']} ，驗證 E-mail 寄送時間為：{$var[\'request_datetime\']}',
	'email_reset_if_not_user_op' => '如果您沒有操作 Email 地址變更，請您立即登入 {$var[\'bbname\']} 檢查帳戶情況，並進行變更密碼和 E-mail 信箱地址變更操作。',
	'email_reset_if_not_user_op_help' => '在處理問題時如果您有任何問題或需要幫助（如凍結帳戶），請聯繫 {$var[\'bbname\']} 管理團隊獲取更多幫助與支援。',

	'secmobile_reset_subject' => '安全手機號碼變更提示',
	'secmobile_reset_reason' => '在 {$var[\'bbname\']} 被登記為用戶 E-mail 信箱，且該用戶操作變更了安全手機號碼所致。',
	'secmobile_reset_if_not' => '如果您不是 {$var[\'bbname\']} 的註冊用戶，請立即忽略並刪除這封 E-mail。只有在您是 {$var[\'bbname\']} 的註冊使用者的情況下，才需要繼續閱讀下面的內容。',
	'secmobile_reset_explain' => '您在 {$var[\'bbname\']} 的用戶帳戶 {$var[\'username\']} 在 {$var[\'datetime\']} 進行了安全手機號碼變更。',
	'secmobile_reset_new_secmobile' => '新的安全手機號碼為：{$var[\'secmobile\']}',
	'secmobile_reset_if_not_user_op' => '如果您沒有操作安全手機號碼變更，請您立即登入 {$var[\'bbname\']} 檢查帳戶情況，並進行變更密碼和安全手機號碼變更操作。',
	'secmobile_reset_if_not_user_op_help' => '在處理問題時如果您有任何問題或需要幫助（如凍結帳戶），請聯繫 {$var[\'bbname\']} 管理團隊獲取更多幫助與支援。',

	'email_register_subject' =>	'論壇註冊網址',
	'email_register_reason' => '在 {$var[\'bbname\']} 獲取了新用戶註冊網址使用了這個 E-mail 信箱地址。',
	'email_register_explain' => '新用戶註冊說明',
	'email_register_click_link' => '您只需點選下面的連結即可進行使用者註冊，以下連結有效期為 3 天。過期可以重新請求發送一封新的 E-mail 驗證：',

	'add_member_subject' => '您被增加成為會員',
	'add_member_intro' => '我是 {$var[\'adminusername\']} ，{$var[\'bbname\']} 的管理者之一。',
	'add_member_reason' => '您剛剛被增加成為 {$var[\'bbname\']} 的會員，當前 E-mail 即是我們為您註冊的 E-mail 信箱地址。',
	'add_member_no_interest' => '如果您對 {$var[\'bbname\']} 不感興趣或無意成為會員，',
	'add_member_info' => '帳號資訊',
	'add_member_bbname' => '網站名稱：',
	'add_member_siteurl' => '網站網址：',
	'add_member_newusername' => '使用者名稱：',
	'add_member_newpassword' => '密碼：',
	'add_member_can_login' => '從現在起您可以使用您的帳號登入 {$var[\'bbname\']}，祝您使用愉快！',

	'birthday_subject' => '祝您生日快樂',
	'birthday_reason' => '這個 E-mail 信箱地址在 {$var[\'bbname\']} 被登記為用戶 E-mail 信箱，<br />
並且按照您填寫的資訊，今天是您的生日。很高興能在此時為您獻上一份生日祝福，<br />
我謹代表 {$var[\'bbname\']} 管理團隊，衷心祝福您生日快樂。',
	'birthday_if_not' => '如果您並非 {$var[\'bbname\']} 的會員，或今天並非您的生日，可能是有人誤用了您的 E-mail 信箱地址，<br />
或錯誤的填寫了生日資訊。本 E-mail 不會多次重複寄送，',

	'email_to_friend_subject' => '{$_G[\'member\'][\'username\']} 推薦給您：{$thread[\'subject\']}',
	'email_to_friend_sender' => '這封信是由 {$_G[\'setting\'][\'bbname\']} 的 {$_G[\'member\'][\'username\']} 寄送的。',
	'email_to_friend_reason' => '在 {$_G[\'member\'][\'username\']} 透過 {$_G[\'setting\'][\'bbname\']} 的「推薦給朋友」功能推薦了如下的內容給您。',
	'email_to_friend_not_official' => '請注意這封信僅僅是由用戶使用「推薦給朋友」寄送的，不是網站官方 E-mail，',

	'email_to_invite_subject' => '您的朋友 {$_G[\'member\'][\'username\']} 寄送 {$_G[\'setting\'][\'bbname\']} 網站註冊邀請碼給您',
	'email_to_invite_reason' => ' {$_G[\'member\'][\'username\']} 透過 {$var[\'bbname\']} 的「發送邀請碼給朋友」功能推薦了如下的內容給您。',
	'email_to_invite_not_official' => '請注意這封信僅僅是由用戶使用「發送邀請碼給朋友」發送的，不是網站官方 E-mail，',

	'invitemail_subject' => '{username} 邀請您加入 {sitename}，並成為好友',
	'invitemail_from' => 'Hi，我是 {$var[\'username\']}，邀請您也加入 {$var[\'sitename\']} 並成為我的好友',
	'invitemail_reason' => '請加入到我的好友中，您就可以瞭解我的近況，與我一起交流，隨時與我保持聯繫。',
	'invitemail_start' => '邀請附言：',
	'invitemail_accept_invite' => '請您點選以下連結，接受好友邀請：',
	'invitemail_viewpage' => '如果您擁有 {$var[\'sitename\']} 上面的帳號，請點選以下連結查看我的個人首頁：',

	'moderate_member_subject' => '用戶審核結果通知',
	'moderate_member_reason' => '這個 E-mail 信箱地址在 {$var[\'bbname\']} 被新用戶註冊時所使用，且管理員設置了對新使用者需要進行人工審核，本 E-mail 將通知您提交申請的審核結果。',
	'moderate_member_info' => '註冊資訊與審核結果',
	'moderate_member_username' => '用戶名：',
	'moderate_member_regdate' => '註冊時間：',
	'moderate_member_submitdate' => '提交時間：',
	'moderate_member_submittimes' => '提交次數：',
	'moderate_member_msg' => '註冊原因：',
	'moderate_member_modresult' => '審核結果：',
	'moderate_member_moddate' => '審核時間：',
	'moderate_member_adminusername' => '審核管理員：',
	'moderate_member_remark' => '管理員留言：',
	'moderate_member_explain' => '審核結果說明',
	'moderate_member_explain1' => '通過：您的註冊已通過審核，您已成為 {$var[\'bbname\']} 的正式用戶。',
	'moderate_member_explain2' => '否決：您的註冊資訊不完整，或未滿足我們對新用戶的某些要求，您可以根據管理員留言，<a href="home.php?mod=spacecp&ac=profile" target="_blank">完善您的註冊資訊</a>，然後再次提交。',
	'moderate_member_explain3' => '刪除：您的註冊由於與我們的要求偏差較大，或本站的新註冊人數已超過預期，申請已被否決。您的帳號已從資料庫中刪除，將無法再使用其登入或提交再次審核，請您諒解。',

	'adv_expiration_subject' =>	'您網站的廣告將於 {day} 天後到期，請及時處理',
	'adv_expiration_msg' =>	'您網站的以下廣告將於 {$var[\'day\']} 天後到期，請及時處理：',
);

?>