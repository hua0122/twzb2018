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
<?php include template("content","header"); ?>

		<div id="news_list">
		<div class="section">
			<div class="container news_list_cont">
				<div class="menu">
				
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cf02426a8c4b97adfd605f164b43834e&action=category&catid=%24CATEGORYS%5B%24catid%5D%5Bparentid%5D&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CATEGORYS[$catid][parentid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div <?php if($catid==$r[catid]) { ?> class="active" <?php } ?> ><a href="<?php echo $r['url'];?>" ><?php echo $r['catname'];?></a></div>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
					
					
					<!--<a href="<?php echo $CATEGORYS['6']['url'];?>" class="more">更多</a>-->
				</div>
				<div class="itembox">
					
					<div class="item relate_article">
					
						<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ebdcf96ea88e932267051e0037a3334b&action=lists&catid=%24catid&num=10&siteid=%24siteid&order=inputtime+desc&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'inputtime desc','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'inputtime desc','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r[catid].'-'.$r[id].'-'.$modelid));?>
								<?php list($copyfrom) = explode('|', $r['copyfrom'])?>
								
								
								 
								 <?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r[catid],'id'=>$r[id])); ?>
								 
								 <?php $mdb = pc_base::load_model('member_model'); $_mr = $mdb->get_one(array('username'=>$r[username])); $userid = $_mr[userid];?>
								
							<li>
								<?php if($r[thumb]) { ?>
								<div class="imgbox">
									<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a>
								</div>
								<?php } ?>
								<div class="right">
									<h6><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><?php  if($pos) foreach($pos as $v){ if($v[posid]==1){echo "<i>原创</i>";}elseif($v[posid]==2){echo "<i>头条</i>";}else{echo "<i>热门</i>";} };?></h6>
									<p>
									<?php echo $r['description'];?> <a href="<?php echo $r['url'];?>">[详细]</a></p>
									<div class="timebox">
										<span class="time"> <?php echo date("Y-m-d H:i",$r[inputtime]);?></span>
										<?php if($userid) { ?><span class="user"> 作者：<?php echo $r['username'];?></span><?php } ?>
										<span class="from"> 来源：<?php if($copyfrom) { ?> <?php echo $copyfrom;?> <?php } else { ?> 环球商用车 <?php } ?></span>
										<i class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></i>
										<i class="seen"><?php echo $views;?></i>
									</div>
								</div>
							</li>
								 
								
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
						</ul>
						<div class="page" id="pages">
							<?php echo $pages;?>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<?php include template("content","footer"); ?>
