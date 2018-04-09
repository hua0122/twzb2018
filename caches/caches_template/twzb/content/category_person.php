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
					<div class="active">访谈列表</div>
					<div >人物列表</div>
					
				</div>
				<div class="per-item active itembox">
					<div class="item relate_article">
						<ul>
							
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d04945a8fc2383ceffd6f94f235cd0e5&action=lists&catid=7&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'7','siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'20',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<?php $title[] = $r[title];?>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
							<?php $title=implode("%' or keywords like '%",$title); $title = "'%$title%'";?>
							
								
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=0dab87edc44b5476b3837ee0bb8b8e11&sql=SELECT+%2A+FROM+newt_news+WHERE+%28keywords+like+%24title%29+and+catid+not+in%2814%2C16%2C44%29+order+by+inputtime+desc&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_news WHERE (keywords like $title) and catid not in(14,16,44) order by inputtime desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$catid.'-'.$r[id].'-'.$modelid));?>
								<?php list($copyfrom) = explode('|', $r['copyfrom'])?>
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
				<div class="per-item person">
					<div class="expert">
						<div class="title">客车用户</div>
						<div class="swiper-container">
					        <div class="swiper-wrapper">
					            <div class="swiper-slide">
									<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f135c5cd5200db31555cf2201e30afff&action=lists&catid=16&num=4&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'4',));}?>
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
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=018dd231af23de1c0b60e4998b9f4284&action=lists&catid=16&num=4&start=4&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'4,4',));}?>
								<?php if($data) { ?>
								<div class="swiper-slide">
									<ul>
									
										<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<li>
											<a href="<?php echo $r['url'];?>">
												<div class="head"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></div>
												<h5><?php echo $r['title'];?></h5>
												<p><?php echo $r['description'];?></p>
											</a>
										</li>
										<?php $n++;}unset($n); ?>
									
									
									</ul>
					            </div>
								<?php } ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					        </div>
					        <div class="swiper-button-next"></div>
					        <div class="swiper-button-prev"></div>
					    </div>
					</div>
					<div class="company">
						<div class="title">卡车用户</div>
						<div class="swiper-container">
					        <div class="swiper-wrapper">
					            <div class="swiper-slide">
									<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59772e168c76c7873f94eeccc5955bde&action=lists&catid=44&num=10&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'44','siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'10',));}?>
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
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=73e23ef1bb3b5f66dce755b763a75ede&action=lists&catid=44&num=10&start=10&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'44','siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'10,10',));}?>
								<?php if($data) { ?>
								<div class="swiper-slide">
									<ul>
									
										<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<li>
											<a href="<?php echo $r['url'];?>">
												<div class="img"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></div>
												<p><?php echo $r['title'];?></p>
											</a>
										</li>
										<?php $n++;}unset($n); ?>
									
									</ul>
					            </div>
								<?php } ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
					        </div>
					        <div class="swiper-button-next"></div>
					        <div class="swiper-button-prev"></div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<?php include template("content","footer"); ?>
	<script type="text/javascript" src="<?php echo APP_PATH;?>js/swiper.min.js"></script>
	<script type="text/javascript">
		new Swiper('.swiper-container', {
	        //pagination: '.swiper-pagination',
	        paginationClickable: true,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        spaceBetween: 30
	    });
	    var caverling= {
	    	init:function(){
	    		this.itemSwitch();
	    	},	
	    	itemSwitch:function(){
	    		$(".news_list_cont .menu div").on("click",function(){
	    			var index = $(this).index();
	    			$(".news_list_cont .menu div").removeClass("active");
	    			$(this).addClass("active");
	    			$(".per-item").removeClass("active");
	    			$(".per-item").eq(index).addClass("active");
	    		});
	    	}
	    }
	    caverling.init();
	</script>
