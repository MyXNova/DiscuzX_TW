<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_space.php 31607 2012-09-13 08:38:40Z monkey $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'hour' => '小時',
	'before' => '前',
	'minute' => '分鐘',
	'second' => '秒',
	'now' => '現在',
	'dot' => '、',
	'poll' => '投票',
	'blog' => '網誌',
	'friend_group_default' => '其他',
	'friend_group_1' => '透過本站認識',
	'friend_group_2' => '透過活動認識',
	'friend_group_3' => '透過朋友認識',
	'friend_group_4' => '親人',
	'friend_group_5' => '同事',
	'friend_group_6' => '同學',
	'friend_group_7' => '不認識',
	'friend_group' => '自訂',
	'wall' => '留言',
	'pic_comment' => '圖片評論',
	'blog_comment' => '網誌評論',
	'clickblog' => '網誌表態',
	'clickpic' => '圖片表態',
	'clickthread' => '話題表態',
	'share_comment' => '分享評論',
	'share_notice' => '分享',
	'doing_comment' => '記錄回覆',
	'friend_notice' => '好友',
	'poll_comment' => '投票評論',
	'poll_invite' => '投票邀請',
	'default_albumname' => '預設相簿',
	'credit' => '積分',
	'credit_unit' => '個',
	'man' => '男',
	'woman' => '女',
	'gender_0' => '保密',
	'gender_1' => '男',
	'gender_2' => '女',
	'year' => '年',
	'month' => '月',
	'day' => '日',
	'unmarried' => '單身',
	'married' => '非單身',
	'hidden_username' => '匿名',
	'gender' => '性別',
	'age' => '歲',
	'comment' => '評論',
	'reply' => '回覆',
	'from' => '來自',
	'anonymity' => '匿名',
	'viewmore' => '檢視更多',
	'constellation_1' => '水瓶座',
	'constellation_2' => '雙魚座',
	'constellation_3' => '白羊座',
	'constellation_4' => '金牛座',
	'constellation_5' => '雙子座',
	'constellation_6' => '巨蟹座',
	'constellation_7' => '獅子座',
	'constellation_8' => '處女座',
	'constellation_9' => '天秤座',
	'constellation_10' => '天蠍座',
	'constellation_11' => '射手座',
	'constellation_12' => '摩羯座',
	'zodiac_1' => '鼠',
	'zodiac_2' => '牛',
	'zodiac_3' => '虎',
	'zodiac_4' => '兔',
	'zodiac_5' => '龍',
	'zodiac_6' => '蛇',
	'zodiac_7' => '馬',
	'zodiac_8' => '羊',
	'zodiac_9' => '猴',
	'zodiac_10' => '雞',
	'zodiac_11' => '狗',
	'zodiac_12' => '豬',

	'credits' => '積分',
	'usergroup' => '用戶組',
	'friends' => '好友',
	'blogs' => '網誌',
	'threads' => '主題',
	'albums' => '相簿',
	'sharings' => '分享',
	'space_views' => '已有 <strong class="xi1">{views}</strong> 人來訪過',
	'views' => '空間點閱數',
	'block1' => '自訂模組 1',
	'block2' => '自訂模組 2',
	'block3' => '自訂模組 3',
	'block4' => '自訂模組 4',
	'block5' => '自訂模組 5',
	'blockdata' => array('personalinfo' => '個人資料', 'profile' => '頭像', 'doing' => '記錄', 'feed' => '動態',
				'blog' => '網誌', 'stickblog' => '置頂網誌', 'album' => '相簿', 'friend' => '好友',
				'visitor' => '最近訪客', 'wall' => '留言板', 'share' => '分享',
				'thread' => '主題', 'group'=>(isset($_G['setting']['navs'][3]['navname']) ? $_G['setting']['navs'][3]['navname'] : ''),'music'=>'音樂盒',
				'statistic' => '統計資訊',
				'block1'=>'自由模組 1', 'block2'=>'自由模組 2', 'block3'=>'自由模組 3',
				'block4'=>'自由模組 4','block5'=>'自由模組 5'),

	'block_title' => '<div class="blocktitle title"><span>{bname}</span>{more}</div>',
	'blog_li' => '<dl class="bbda cl"><dt><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a><span class="xg2 xw0"> {date}</span></dt>',
	'blog_li_img' => '<dd class="atc"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank"><img src="{src}" class="summaryimg" /></a></dd>',
	'blog_li_ext' => '<dd class="xg1"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">({viewnum}) 次閱讀</a><span class="pipe">|</span><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}#comment" target="_blank">({replynum})個評論</a></dd>',
	'album_li' => '<li style="width:70px"><div class="c"><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, 更新 {date}"><img src="{src}" alt="{albumname}" width="70" height="70" /></a></div><p><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, 更新 {date}">{albumname}</a></p><span>圖片數： {picnum}</span></li>',
	'doing_li' => '<li>{message}</li><br />{date} {from} 回覆({replynum})',
	'visitor_anonymity' => '<div class="avatar48"><img src="image/magic/hidden.gif" alt="匿名"></div><p>匿名</p>',
	'visitor_list' => '<a href="home.php?mod=space&uid={uid}" target="_blank" class="avt"><em class="{class}"></em><em class="{self}" onclick="javascript:removeVisitor(event, {cuid});" title="刪除瀏覽足跡"></em>{avatar}</a><p><a href="home.php?mod=space&uid={uid}" title="{username}">{username}</a></p>',
	'wall_form' => '<div class="space_wall_post">
						<form action="home.php?mod=spacecp&ac=comment" id="quickcommentform_{uid}" name="quickcommentform_{uid}" method="post" autocomplete="off" onsubmit="ajaxpost(\'quickcommentform_{uid}\', \'return_commentwall_{uid}\');doane(event);">
							'.($_G['uid'] ? '<span id="message_face" onclick="showFace(this.id, \'comment_message\');return false;" class="cur1"><img src="'.STATICURL.'image/common/facelist.gif" alt="facelist" class="mbn vm" /></span>
							<br /><textarea name="message" id="comment_message" class="pt" rows="3" cols="60" onkeydown="ctrlEnter(event, \'commentsubmit_btn\');" style="width: 90%;"></textarea>
							<input type="hidden" name="refer" value="home.php?mod=space&uid={uid}" />
							<input type="hidden" name="id" value="{uid}" />
							<input type="hidden" name="idtype" value="uid" />
							<input type="hidden" name="commentsubmit" value="true" />' : ($_G['connectguest'] ? '<div class="pt hm">您需要 <a href="member.php?mod=connect" class="xi2">完善帳號資料</a> 或 <a href="member.php?mod=connect&ac=bind" class="xi2">綁定已有帳號</a> 後才可以回覆文章</div>' : '<div class="pt hm">你需要登入後才可以留言 <a href="member.php?mod=logging&action=login" onclick="showWindow(\'login\', this.href)" class="xi2">登入</a> | <a href="member.php?mod='.$_G['setting']['regname'].'" class="xi2">'.$_G['setting']['reglinkname'].'</a></div>')).'
							<p class="ptn"><button '.($_G['uid'] ? 'type="submit"' : 'type="button" onclick="showWindow(\'login\', \'member.php?mod=logging&action=login&guestmessage=yes\')"').' name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"><strong>留言</strong></button></p>
							<input type="hidden" name="handlekey" value="commentwall_{uid}" />
							<span id="return_commentwall_{uid}"></span>
							<input type="hidden" name="formhash" value="{FORMHASH}" />
						</form>'.
						($_G['uid'] ? '<script type="text/javascript">
							function succeedhandle_commentwall_{uid}(url, msg, values) {
								wall_add(values[\'cid\']);
							}
						</script>' : '').'
					</div>',
	'wall_li' => '<dl class="bbda cl" id="comment_{cid}_li">
				<dd class="m avt">
				{author_avatar}
				</dd>
				<dt>
				{author}
				<span class="y xw0">{op}</span>
				<span class="xg1 xw0">{date}</span>
				<span class="xgl">{moderated}</span>
				</dt>
				<dd id="comment_{cid}">{message}</dd>
				</dl>',
	'wall_more' => '<dl><dt><span class="y xw0"><a href="home.php?mod=space&uid={uid}&do=wall">檢視全部</a></span><dt></dl>',
	'wall_edit' => '<a href="home.php?mod=spacecp&ac=comment&op=edit&cid={cid}&handlekey=editcommenthk_{cid}" id="c_{cid}_edit" onclick="showWindow(this.id, this.href, \'get\', 0);">編輯</a> ',
	'wall_del' => '<a href="home.php?mod=spacecp&ac=comment&op=delete&cid={cid}&handlekey=delcommenthk_{cid}" id="c_{cid}_delete" onclick="showWindow(this.id, this.href, \'get\', 0);">刪除</a> ',
	'wall_reply' => '<a href="home.php?mod=spacecp&ac=comment&op=reply&cid={cid}&handlekey=replycommenthk_{cid}" id="c_{cid}_reply" onclick="showWindow(this.id, this.href, \'get\', 0);">回覆</a>',
	'group_li' => '<li><a href="forum.php?mod=group&fid={groupid}" target="_blank"><img src="{icon}" alt="{name}" /></a><p><a href="forum.php?mod=group&fid={groupid}" target="_blank">{name}</a></p></li>',
	'poll_li' => '<div class="c z"><img alt="poll" src="'.STATICURL.'image/feed/poll.gif" alt="poll" class="t" /><h4 class="h"><a target="_blank" href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a></h4><div class="mtn xg1">發佈時間：{dateline}</div></div>',
	'music_no_content' => '還沒有設定音樂盒的內容',
	'block_profile_diy' => '裝扮空間',
	'block_profile_wall' => '檢視留言',
	'block_profile_avatar' => '編輯頭像',
	'block_profile_update' => '更新資料',
	'block_profile_follow' => '檢視廣播',
	'block_profile_wall_to_me' => '給我留言',
	'block_profile_friend_add' => '加為好友',
	'block_profile_friend_ignore' => '解除好友',
	'block_profile_poke' => '打個招呼',
	'block_profile_sendmessage' => '發送訊息',
	'block_doing_reply' => '回覆',
	'block_doing_no_content' => '現在還沒有記錄',
	'block_doing_no_content_publish' => '，<a href ="home.php?mod=space&uid={uid}&do=doing&view=me&from=space">更新記錄</a>',
	'block_blog_no_content' => '現在還沒有網誌',
	'block_blog_no_content_publish' => '，<a href ="home.php?mod=spacecp&ac=blog">發佈網誌</a>',
	'block_album_no_content' => '現在還沒有相簿',
	'block_album_no_content_publish' => '，<a href ="home.php?mod=spacecp&ac=upload">上傳圖片</a>',
	'block_feed_no_content' => '現在還沒有動態',
	'block_thread_no_content' => '現在還沒有主題',
	'block_thread_no_content_publish' => '，<a href ="forum.php?mod=misc&action=nav&special=0&from=home" onclick="showWindow(\'nav\', this.href);return false;">發佈主題</a>',
	'block_friend_no_content' => '現在還沒有好友',
	'block_friend_no_content_publish' => '，<a href ="home.php?mod=spacecp&ac=search">尋找好友</a> 或 <a href ="home.php?mod=spacecp&ac=invite">邀請好友</a>',
	'block_visitor_no_content' => '現在還沒有訪客',
	'block_visitor_no_content_publish' => '，<a href ="home.php?mod=space&do=friend&view=online&type=member">去串串門</a>',
	'block_share_no_content' => '現在還沒有分享',
	'block_wall_no_content' => '現在還沒有留言',
	'block_group_no_content' => '現在還沒有群組',
	'block_group_no_content_publish' => '，<a href ="forum.php?mod=group&action=create">建立自己的群組</a> 或 <a href ="group.php?mod=index">加入群組</a>',
	'block_group_no_content_join' => '，<a href ="group.php?mod=index">加入群組</a>',
	'block_view_noperm' => '無權檢視',
	'block_view_profileinfo_noperm' => '暫無資料項或無權檢視',
	'click_play' => '點選播放',
	'click_view' => '點選檢視',
	'feed_view_only' => '只看此類動態',

	'export_pm' => '匯出短訊',
	'pm_export_header' => 'Discuz! X 短訊記錄(此訊息記錄不支援重新匯入)',
	'pm_export_touser' => '訊息對像： {touser}',
	'pm_export_subject' => '群聊話題： {subject}',
	'all' => '全部',
	'manage_post' => '管理文章',
	'manage_album' => '管理相簿',
	'manage_blog' => '管理網誌',
	'manage_comment' => '管理評論',
	'manage_doing' => '管理記錄',
	'manage_feed' => '管理動態',
	'manage_group_prune' => '群組文章',
	'manage_group_threads' => '群組主題',
	'manage_share' => '管理分享',
	'manage_pic' => '管理圖片',

	'sb_blog' => '{who} 的網誌',
	'sb_album' => '{who} 的相簿',
	'sb_space' => '{who} 的空間',
	'sb_feed' => '{who} 的動態',
	'sb_doing' => '{who} 的記錄',
	'sb_sharing' => '{who} 的分享',
	'sb_friend' => '{who} 的好友',
	'sb_wall' => '{who} 的留言板',
	'sb_profile' => '{who} 的個人資料',
	'sb_thread' => '{who} 的文章',
	'doing_you_can' => '您可以更新記錄，讓好友們知道您在做什麼...',
	'block_profile_all' => '<p style="text-align: right;"><a href="home.php?mod=space&uid={uid}&do=profile">檢視全部個人資料</a></p>',
	'block_profile_edit' => '<span class="y xw0"><a href="home.php?mod=spacecp&ac=profile">編輯我的資料</a></span>',
	'sb_follow' => '{who} 的廣播',

	'viewthread_userinfo_hour' => '小時',
	'viewthread_userinfo_uid' => 'UID',
	'viewthread_userinfo_posts' => '文章',
	'viewthread_userinfo_threads' => '主題',
	'viewthread_userinfo_doings' => '記錄',
	'viewthread_userinfo_blogs' => '網誌',
	'viewthread_userinfo_albums' => '相簿',
	'viewthread_userinfo_sharings' => '分享',
	'viewthread_userinfo_friends' => '好友',
	'viewthread_userinfo_digest' => '精華',
	'viewthread_userinfo_digestposts' => '精華',
	'viewthread_userinfo_credits' => '積分',
	'viewthread_userinfo_readperm' => '閱讀權限',
	'viewthread_userinfo_regtime' => '註冊時間',
	'viewthread_userinfo_lastdate' => '最後登入',
	'viewthread_userinfo_oltime' => '上線時間',
	'viewthread_userinfo_sellercredit' => '賣家信用',
	'viewthread_userinfo_buyercredit' => '買家信用',
	'viewthread_userinfo_follower' => '聽眾',
	'viewthread_userinfo_following' => '收聽',
	'viewthread_userinfo_feeds' => '廣播',
	'viewthread_userinfo_privacy' => '保密',
	'follow_view_follow' => '我關注的',
	'follow_view_special' => '特別關注',
	'follow_view_other' => '廣播大廳',
	'follow_view_feed' => '{who} 的廣播',
	'follow_view_thread' => '{who} 的主題',
	'follow_view_reply' => '{who} 的回覆',
	'follow_view_profile' => '{who} 的個人資料',
	'follow_view_type_feed' => '廣播',
	'follow_view_type_thread' => '主題',
	'follow_view_type_reply' => '回覆文章',
	'follow_view_type_profile' => '個人資料',
	'follow_view_type_follower' => '聽眾列表',
	'follow_view_type_following' => '收聽會員',
	'follow_view_my_follower' => '我的聽眾',
	'follow_view_my_following' => '我收聽的人',
	'follow_view_do_follower' => '他的聽眾',
	'follow_view_do_following' => '他收聽的人',
	'follow_view_fulltext' => '...檢視全文',
	'follow_retract' => '收起',
	'follow_click_play' => '點選播放',
	'follow_cancle_follow' => '取消收聽',
	'follow_follow_ta' => '收聽 TA',


);

?>