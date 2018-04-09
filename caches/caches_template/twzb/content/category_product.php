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
	<link rel="stylesheet" href="<?php echo APP_PATH;?>css/swiper.min.css">
	

	<div id="product">
		
		<div class="section">
			<div class="container" style="margin: 25px auto 18px auto;">
				<div class="menu">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7b73ef3544169542e08ddc367cf09d30&action=category&catid=10&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div <?php if($catid==$r[catid]) { ?> class="active" <?php } ?>><a href="<?php echo $r['url'];?>" ><?php echo $r['catname'];?></a></div>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="itembox" style="min-height:550px;">
					<div  class="item" >
						<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a7481a68f37c7979a96dbf77afc3c5f2&action=lists&catid=%24catid&num=12&siteid=%24siteid&order=inputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li >
								<a href="<?php echo $r['url'];?>">
									<div class="img">
										<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
									</div>
									<p><?php echo $r['title'];?></p>
								</a>
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
	
	<script type="text/javascript">
	require.config({
		"baseUrl":"js",
		"paths":{
			"vue":"vue.min",
			"swiper":"swiper.min"
		}
	});
	require(['vue','swiper'],function(Vue,Swiper){
		let vm = new Vue({
			el:"#product",
			data:{
				menu:['产品展示','品牌活动','主题报道'],
				index:1,
				item:[[5],[11],[15]],
			},
			mounted:function(){
				this.$nextTick(function(){
					console.log(this.item)
				});
			},
			methods:{
				itemSwitch:function(index){
					this.index = index+1;
				}
			}
		});

	});

	</script>
