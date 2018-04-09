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
	<link rel="stylesheet" href="<?php echo APP_PATH;?>depend/videoCT.css">
	
	<div id="video">
		<div class="section">
			<div class="container sec_cont">
				<div class="menu">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff5df9770fe9edf3b3f5e56d739e2d9e&action=category&catid=9&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div <?php if($catid==$r[catid]) { ?> class="active" <?php } ?>><a href="<?php echo $r['url'];?>" ><?php echo $r['catname'];?></a></div>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="itembox">
					<div class="item">
						<div class="top">
							<div class="big videoBox">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79a0827f69c4dda7c5a3b5a550c2277e&action=lists&catid=%24catid&num=1&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$catid.'-'.$r[id].'-'.$modelid));?>
							
								<a href="<?php echo $r['url'];?>">
									<img src="<?php echo $r['thumb'];?>" alt="">
									<div class="infor">
										<p><?php echo $r['title'];?></p>
										<div class="timebox">
											<span class="time"><?php echo date("m-d H:i",$r[inputtime]);?></span>
											<span class="user">作者：<?php echo $r['username'];?></span>
											<span class="from">来源：<?php echo $r['copyfrom'];?></span>
											<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
											<span class="seen"><?php echo $views;?></span>
										</div>
									</div>
									<i></i>
								</a>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</div>
							<div class="small smallBox">
								<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9cb5a58e0fd71289f74f8012da8c57f5&action=lists&catid=%24catid&num=4&start=1&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'1,4',));}?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li class="videoBox">
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<h4 class="infor"><?php echo $r['title'];?></h4>
											<i></i>
										</a>
									</li>
									<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</ul>
							</div>
						</div>
						<div class="bottom smallBox">
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f96dbe83e7aed514faff980118c1bc75&action=lists&catid=%24catid&num=8&start=5&siteid=%24siteid&order=inputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
									<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$catid.'-'.$r[id].'-'.$modelid));?>
							
								<li class="videoBox" <?php if($n==4||$n==8) { ?> style="margin-right:0px;" <?php } ?>>
									<a href="<?php echo $r['url'];?>">
										<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
										<i></i>
									</a>
									<div class="infor active">
										<p><?php echo $r['title'];?></p>
										<div class="timebox">
											<span class="time"><?php echo date("Y-m-d H:i",$r[inputtime]);?></span>
											<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
											<span class="seen"><?php echo $views;?></span>
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
				</div>
			</div>
		</div>
	<?php include template("content","footer"); ?>
	<script type="text/javascript">
	require.config({
		"baseUrl":"js",
		"paths":{
			"vue":"vue.min",
			"swiper":"swiper.min",
			"videoCt":"../depend/videoCT",
			"jquery":"jquery.min"
		},
		shim:{
			"videoCt":{
				deps: ['jquery'],
　　　　　　	exports: ''
			}
		}
	});
	require(['vue',"videoCt","jquery"],function(Vue,videoCt,$){
		let vm = new Vue({
			el:"#video",
			data:{
				menu:['试驾','访谈','新闻快报'],
				index:1,
				item:[[8],[12],[4]],
			},
			computed:{
				
			},
			mounted:function(){
				this.$nextTick(function(){

				});
			},
			methods:{
				itemSwitch:function(index){
					this.index = index+1;
				},
				video:function(index){
					switch(index%4){
						case 0:
							return './video/justin.mp4';
						case 1:
							return './video/taylor.mp4';
						case 2:
							return './video/what.mp4';
						case 3:
							return './video/Diamonds.mp4';
					}
				}
			}
		});
	});
	</script>
</body>
</html>