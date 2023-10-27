====================================
SupeSite 7.5 升級至 Discuz! X1 說明
====================================

特別警示！！！
Discuz! X1.0 中並未具備 SupeSite 7.5 中的全部功能，
此轉換程式，僅轉換 SupeSite 7.5 中的資訊分類、資訊文章資料到 Discuz! X 產品的文章系統中。
其他資料將不進行轉換。
因此，資料轉換後，Discuz! X 產品存在原有 SupeSite 功能遺失和資料遺失問題，請自行權衡決定是否轉換升級。


I 升級前的準備
---------------
1. 建立程式備份目錄，例如 old
2. 將原 SupeSite 所有程式移動到 old 目錄中
3. 上傳 Discuz! X 產品的 upload 目錄中的程式到 SupeSite 目錄
4. 執行安裝程式 /install
   安裝的時候請指定原 SupeSite 掛接的 UCenter Server 網址

II 升級 SupeSite 資料
---------------
1. 安裝完畢，測試 Discuz! X 可以正常執行以後，上傳 convert 程式到 Discuz! X 根目錄
2. 執行 /convert
3. 選擇對應的程式版本，開始轉換
4. 轉換過程中不可擅自中斷，直到程式自動執行完畢。
5. 轉換過程可能需要較長時間，且消耗較多伺服器資源，您應當選擇伺服器空閒的時候執行

III 升級完畢, 還要做的幾件事
--------------------------
1. 編輯新 Discuz! X 的 config/config_global.php 檔案，設定好創始人
2. 直接瀏覽新 Discuz! X 的 admin.php
3. 使用創始人帳號登入，進入後台更新快取
4. 新系統增加了很多設定項目，包括會員權限、組權限、論壇版區等等，您需要仔細的重新設定一次。
5. 轉移舊附件目錄到新產品根目錄（在轉移之前，您的資訊內容中的圖片無法正常顯示）
   a)將 old/attachments 目錄和目錄下的檔案 全部移動到 新 Discuz! X 產品的 /data/attachment/portal/ 目錄中
   b) 在原 SS7 原始碼下找到圖示 images/base/attachment.gif，放在 Disucuz！ X1 的目錄 static/image/filetype/ 下；
   c) 找到 source/module/portal/portal_view.php 檔案，在程式「$content['content'] = blog_bbcode($content['content']);」後換行增加以下程式碼：

	$ss_url = 'http://your_ss_site_url/'; // 請將此連結網址改為您的 SS 網站網址！！！
	$findarr = array(
		$ss_url.'batch.download.php?aid=', // 附件下載網址
		$ss_url.'attachments/',  // 附件圖片目錄
		$ss_url.'images/base/attachment.gif'  // 附件下載圖示
	);
	$replacearr = array(
		'porta.php?mod=attachment&id=',
		$_G['setting']['attachurl'].'/portal/',
		STATICURL.'image/filetype/attachment.gif'
	);
	$content['content'] = str_replace($findarr, $replacearr, $content['content']);

6. 轉移舊圖片目錄到新產品根目錄（在轉移之前，您的資訊內容中的表情無法正常顯示）
   a)將 old/images 目錄和目錄下的檔案 移動到 新 Discuz! X 產品的根目錄中
7. 刪除 convert 程式，以免給您的 Discuz! X 安裝帶來隱患。