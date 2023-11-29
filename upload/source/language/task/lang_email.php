<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'email_name' => '認證信箱任務',
	'email_desc' => '認證信箱獲得對應的獎勵。',
	'email_view' => '<strong>請按照以下的說明來參與本任務：</strong>
		<ul>
		<li><a href="home.php?mod=spacecp&ac=profile&op=password" target="_blank">新視窗開啟帳號設定頁面</a></li>
		<li>在新開啟的設定頁面中，將自己的信箱真實填寫(新填寫的信箱需要先儲存)，並點選「重新接收驗證郵件」連結</li>
		<li>幾分鐘後，系統會給您寄送一封郵件，收到郵件後，請按照郵件的說明，瀏覽郵件中的驗證連結就可以了</li>
		</ul>',
);

?>