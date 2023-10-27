====================================
UCenter Home 2.0 升級至 Discuz! X2.0 說明
====================================

特別警示！！！
由於 UCHome 與 Discuz! 部分功能進行了整合性融合，因此 UCHome 的部分功能，在整合到 Discuz! X 後將會部分遺失，
其中包括：
由於新增專題功能，原 UCH 熱鬧功能將不再支援；
UCH 投票、UCH 活動將與論壇投票文章、活動文章的形式融合為一體，活動相簿、活動群組功能將不再支援；
UCH 群組將以新的群組功能存在，原群組相簿、群組活動功能將不再支援；
個人資料進行了新的調整，UCH 原個人資料中的學校、工作資料將需要重新填寫；
UCH 的全站實名功能不再支援；

請根據自己建站需求，權衡決定是否將 UCHome 轉換升級到 Discuz! X。

I 升級前的準備
---------------
1. 建立程式備份目錄，例如 old
2. 將原 UCHome 所有程式移動到 old 目錄中
3. 上傳 Discuz! X 產品的 upload 目錄中的程式到 UCHome 目錄
4. 執行安裝程式 /install
   安裝的時候請指定原 UCHome 掛接的 UCenter Server 網址（如果 UCenter 版本低於 1.6.0，需先升級 UCenter ）

II 升級 UCHome 資料
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
5. 轉移舊附件目錄到新產品根目錄（在轉移之前，您的動態、網誌、評論、留言等內容中的圖片無法正常顯示）
   a)進入 old/attachment 目錄
   b)將所有檔案移動到 新 Discuz! X 產品 /data/attachment/album/ 目錄中
   c)同時，修改一下 Discuz! X 的程式
	 讓網誌內容中的已經插入的圖片網址，通過字串替換，改為最新的圖片網址，解決網誌內容圖片無法顯示的問題。
	 方法如下：
	 開啟 Discuz! X 的 ./source/include/space/space_blog.php 程式
	 找到：
	 $blog['message'] = blog_bbcode($blog['message']);
	 在下面增加如下程式碼：
	 $home_url = 'http://your_home_site_url/'; // 請將此連結網址改為您的 UCHome 網站網址！！！
	 $bbs_url = 'http://your_bbs_site_url/'; // 請將此連結網址改為您的 BBS 網站網址！！！
	 $findarr = array(
		'<img src="attachment/',  //原 uchmoe 附件圖片目錄
		'<IMG src="'.$home_url.'attachment/',  // 原 UCHome 附件圖片目錄
		$bbs_url.'attachments/month',  // 原論壇附件圖片目錄
	 );
	 $replacearr = array(
		'<img src="'.$_G['setting']['attachurl'].'album/',
		'<IMG src="'.$_G['setting']['attachurl'].'album/',
		$bbs_url.$_G['setting']['attachurl'].'forum/month',
	 );
	 $blog['message'] = str_replace($findarr, $replacearr, $blog['message']);

	 如果你的 UCHome 的附件不是存放在預設的 ./attachment 目錄，那麼
	 修正上面程式的 <img src="attachment/ 中的 attachment 為你自己的附件目錄名字
6. 轉移舊圖片目錄到新產品根目錄（在轉移之前，您的動態、網誌、評論、留言等內容中的表情無法正常顯示）
   a)將 old/image 目錄和目錄下的檔案 移動到 新 Discuz! X 產品的根目錄中
7. 恢復 space.php URL 網址的瀏覽（在恢復之前，您的動態中的站內訊息連結將指向無法瀏覽的網址）
   1)將 utility/oldprg/uchome/space.php 檔案移動到 新 Discuz! X 產品的根目錄中
8. 刪除 convert 程式，以免給您的 Discuz! X 安裝帶來隱患
9. 待測試新 Discuz! X 產品的所有功能均正常後，可以刪除 舊的程式備份和資料備份