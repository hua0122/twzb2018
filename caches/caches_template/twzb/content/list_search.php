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
					<div class="active">搜索列表</div>
					
				</div>
				<div class="itembox active">
					<div class="item relate_article">
						<ul>
							
							
								<?php $n=1;if(is_array($result)) foreach($result AS $r) { ?>
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
							
						</ul>
						<div class="page" id="pages">
							<?php echo $pages;?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<?php include template("content","footer"); ?>
	