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
	<style type="text/css">
		header .cont .group{
			margin-right:10%;
			width: 186px;
			padding:0;
			line-height: 22px;
		}
		header .group a:first-child{
			float: left;
			margin-right:32px ;
		}
		header .group a{
			color:#fff;
			font-size:18px;
			display: inline;
			height: auto;
			margin-top:17px;
		}
		.swiper-slide {
	        text-align: center;
	        font-size: 18px;
	        background: #fff;

	        /* Center slide text vertically */
	        display: -webkit-box;
	        display: -ms-flexbox;
	        display: -webkit-flex;
	        display: flex;
	        -webkit-box-pack: center;
	        -ms-flex-pack: center;
	        -webkit-justify-content: center;
	        justify-content: center;
	        -webkit-box-align: center;
	        -ms-flex-align: center;
	        -webkit-align-items: center;
	        align-items: center;
	    }
	    /*.swiper-button-prev,.swiper-button-next{
	    	width: 12px;
		    height: 22px;
		    margin-top: -6px;
		}
		.swiper-button-prev{
			background: url('<?php echo APP_PATH;?>images/interview_date_prev.png') no-repeat;
			background-size: cover;
		}
		.swiper-button-next{
			background: url('<?php echo APP_PATH;?>images/interview_date_next.png') no-repeat;
			background-size: cover;
		}*/
	</style>

		
		<div id="interview_date">
		<div class="section">
			<div class="container news_list_cont">
				<div class="menu">
					<div v-for="(value,i) in menu" :class="{'active':(i+1)==index,'last':(i+1)==menu.length}" @click="itemSwitch(i)">{{value}}</div>
					
				</div>
				<div v-show="index == 1" class="itembox">
					<div class="item relate_article">
						<ul>
							
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4d28f8ea0cdd301b19cd14109dab82b6&action=lists&catid=%24catid&num=10&siteid=%24siteid&order=updatetime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'updatetime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'updatetime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$catid.'-'.$r[id].'-'.$modelid));?>
							<li>
								<div class="imgbox">
									<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a>
								</div>
								<div class="right">
									<h6><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><!--<i>原创</i><i>头条</i>--></h6>
									<p>
									<?php echo $r['description'];?> <a href="<?php echo $r['url'];?>">[详细]</a></p>
									<div class="timebox">
										<span class="time"> <?php echo date("Y-m-d H:i",$r[updatetime]);?></span>
										<span class="user"> 作者：<?php echo $r['username'];?></span>
										<span class="from"> 来源：<?php echo $r['copyfrom'];?></span>
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
				<div v-show="index == 2" class="person">
					<div class="expert">
						<div class="title">专 家</div>
						<div class="swiper-container">
					        <div class="swiper-wrapper">
					            <div v-for="i in 5" class="swiper-slide">
									<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=413a5f0c177e894064e746c515ef4385&action=lists&catid=16&num=10&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'10',));}?>
										<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<li>
											<a href="<?php echo $r['url'];?>">
												<div class="head"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></div>
												<h5><?php echo $r['title'];?></h5>
												<p><?php echo $r['description'];?></p>
											</a>
										</li>
										<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									</ul>
					            </div>
					        </div>
					        <div class="swiper-button-next"></div>
					        <div class="swiper-button-prev"></div>
					    </div>
					</div>
					<div class="company">
						<div class="title">车 企</div>
						<div class="swiper-container">
					        <div class="swiper-wrapper">
					            <div v-for="i in 5" class="swiper-slide">
									<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b81307768dbf9bd50895e6edc1ab49db&action=lists&catid=14&num=10&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'10',));}?>
										<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<li>
											<a href="<?php echo $r['url'];?>">
												<div class="img"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></div>
												<p><?php echo $r['title'];?></p>
											</a>
										</li>
										<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									</ul>
					            </div>
					        </div>
					        <div class="swiper-button-next"></div>
					        <div class="swiper-button-prev"></div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<?php include template("content","footer"); ?>
	<script type="text/javascript" src="<?php echo APP_PATH;?>js/require.js"></script>
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
			el:"#interview_date",
			data:{
				menu:['日期','人物'],
				index:2,
				item:[[3],[2]],
			},
			mounted:function(){
				this.$nextTick(function(){
					new Swiper('.swiper-container', {
				        //pagination: '.swiper-pagination',
				        paginationClickable: true,
				        nextButton: '.swiper-button-next',
				        prevButton: '.swiper-button-prev',
				        spaceBetween: 30
				    });
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
	

</body>
</html>