<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script type="text/javascript">
    // borwserRedirect
    (function browserRedirect(){
      var sUserAgent = navigator.userAgent.toLowerCase();
      var bIsIpad = sUserAgent.match(/ipad/i) == 'ipad';
      var bIsIphone = sUserAgent.match(/iphone os/i) == 'iphone os';
      var bIsMidp = sUserAgent.match(/midp/i) == 'midp';
      var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == 'rv:1.2.3.4';
      var bIsUc = sUserAgent.match(/ucweb/i) == 'web';
      var bIsCE = sUserAgent.match(/windows ce/i) == 'windows ce';
      var bIsWM = sUserAgent.match(/windows mobile/i) == 'windows mobile';
      var bIsAndroid = sUserAgent.match(/android/i) == 'android';

      if(bIsIpad || bIsIphone || bIsMidp || bIsUc7 || bIsUc || bIsCE || bIsWM || bIsAndroid ){
        window.location.href = '<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>';
      }
    })();
 </script>
<?php include template("content","top"); ?>
		
		<div id="car_list">
		<div class="section">
			<div class="container sec_cont">
				<div class="title_position">
					<a href="<?php echo siteurl($siteid);?>">首页</a> <?php echo catpos($catid);?>
				</div>
				<div class="desc">
					<div class="desc_l">
						<div class="bannerbox">
							<img <?php if($CATEGORYS[$catid][image]) { ?> src="<?php echo $CATEGORYS[$catid]['image'];?>" <?php } else { ?> src="<?php echo APP_PATH;?>images/car_lsit_banner_item_0.png" <?php } ?> alt="<?php echo $CATEGORYS[$catid]['catname'];?>">
						</div>
						<div class="listBox">
							<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=650f9d83bc8e9aeb2c7124dcc616907a&action=lists&catid=%24catid&num=12&siteid=%24siteid&order=updatetime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'updatetime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'updatetime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$catid.'-'.$r[id].'-'.$modelid));?>
								
								<?php list($copyfrom) = explode('|', $r['copyfrom'])?>
								
								 <?php $dzdb = pc_base::load_model('dianzan_model'); $dz = $dzdb->get_all(array('catid'=>$r[catid],'wid'=>$r[id])); ?>
								<li>
									<div class="head">
										<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a>
									</div>
									<div class="infor">
										<h4><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h4>
										<div class="center">
											<span><?php echo date("Y-m-d H:i",$r[updatetime]);?></span>
											<span>来源：<?php echo $copyfrom;?> </span>
											<span>编辑：<?php echo $r['username'];?></span>
										</div>
										<div class="bottom">
											<div class="seen"><?php echo $views;?></div>
											<div class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></div>
											<div class="up"><i></i><span><?php echo count($dz);?></span></div>
											<!--<div class="collect"><i></i><span>4</span></div>-->
										</div>
									</div>
								</li>
								<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
						<div class="page" id="pages">
							<?php echo $pages;?>
						</div>
					</div>
					<div class="desc_r">
						<div class="title">
							<h3>车友推荐</h3>
							<i></i>
						</div>
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c183497f881a4b9cb6e5b49d74eef740&sql=SELECT+newt_member.%2A%2Cnewt_member_kache.gongsi%2Cnewt_member_kache.jial%2Cnewt_member_kache.licheng%2Cnewt_member_kache.cjs%2Cnewt_member_kache.xjs%2Cnewt_member_kache.zhiye%2Cnewt_member_kache.guanzhu%2Cnewt_member_kache.pro%2Cnewt_member_kache.jingli%2Cnewt_member_kache.luxian%2Cnewt_member_kache.rongyu%2Cnewt_member_kache.xuanyan+FROM+newt_member+left+join+newt_member_kache+on++newt_member.userid%3Dnewt_member_kache.userid+where+groupid+%3D4+order+by+regdate+desc&num=4&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT newt_member.*,newt_member_kache.gongsi,newt_member_kache.jial,newt_member_kache.licheng,newt_member_kache.cjs,newt_member_kache.xjs,newt_member_kache.zhiye,newt_member_kache.guanzhu,newt_member_kache.pro,newt_member_kache.jingli,newt_member_kache.luxian,newt_member_kache.rongyu,newt_member_kache.xuanyan FROM newt_member left join newt_member_kache on  newt_member.userid=newt_member_kache.userid where groupid =4 order by regdate desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								 
								 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
								 <?php $img=get_memberavatar($v[userid]+1,'','90')?>
								
								<li>
									<div class="head">
										<img src="<?php echo $img;?>" alt="<?php echo $v['nickname'];?>" onerror="src='<?php echo APP_PATH;?>images/club_head.jpg'">
									</div>
									<div class="right">
										<p><?php if($v['nickname']) { ?> <?php echo $v['nickname'];?> <?php } else { ?> <?php echo $v['username'];?><?php } ?></p>
										<?php $uid=param::get_cookie('_userid');?>
											<?php $caredb = pc_base::load_model('careinfo_model'); $iscare = $caredb->get_one(array('uid'=>$v[userid],'userid'=>$uid));?>
											<?php if($iscare) { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="focus addcare" >已关注</a>
											<?php } else { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="focus">加关注</a>
											<?php } ?>
									</div>
								</li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
						<a href="<?php echo $CATEGORYS['15']['url'];?>" class="more">查看更多</a>
						<div class="code">
							<img src="<?php echo APP_PATH;?>images/story_list_ewm.jpg" alt="">
							<p>加入车友会微信</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include template("content","footer"); ?>
<script>

$("ul li .right a").click(function(){
	var $userid=$(this).data('userid');
	if($userid){
		
		
		if($(this).attr('class')=="focus addcare"){
			$(this).html('加关注');
			
			var uid=$(this).data('uid');//被关注用户id  uid
			$.post("index.php?m=content&c=rss&a=delcare",{uid:uid},function(data){
				
				$(this).removeClass('addcare');
			});
			location.reload();
		}else{
			$(this).html("已关注");
			var uid=$(this).data('uid');//被关注用户id  uid
			
			$.post("index.php?m=content&c=rss&a=addcare",{uid:uid},function(data){
				$(this).addClass('addcare');
			});
			location.reload();
		}
	
	}else{
		
		location.href="index.php?m=member&c=index&a=login";
	}
	

});
</script>