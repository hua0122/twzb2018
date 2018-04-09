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
        window.location.href = '<?php echo APP_PATH;?>index.php';
      }
    })();
 </script>
<?php include template("content","header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>css/swiper.min.css">
<style>
.yc_p1{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 32px;
    background: #0b1922;
    opacity: 0.6;
}
.yc_p1 span{
	display: block;
    width: 100%;
    line-height: 32px;
    font-size: 14px;
    color: #ffffff;
    text-indent: 0em;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.video .video_b .left .l_video .video-img a i{
	display: block;
    width: 76px;
    height: 76px;
    position: relative; 
    left: 40%;
    margin-top: -160px;
    background: url(images/video_pause_big.png) no-repeat;
    z-index: 6;
}
.video .video_b .left .r_video ul li a i {
    display: block;
    width: 49px;
    height: 49px;
    position: relative; 
    left: 45%;
    margin-top: -105px;
    background: url(images/video_pause.png) no-repeat;
    z-index: 6;
}
.video .video_b .left .l_video .video-img:hover i,.video .video_b .left .r_video ul li:hover i{
	-webkit-transform: scale(1.4);
    transform: scale(1.4);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: all ease-out 250ms;
}
</style>
		
		<div id="index">
		<div class="section">
			<div class="contbox container">
				<div class="ad">
					<ul>
					
						<li><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=1"></script></li>
						<li><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=2"></script></li>
						<li style="margin-right:0px;"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=3"></script></li>
						<li class="last-child"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=4"></script></li>
					</ul>
				</div>
				<div class="news">
					<div class="news_t">
						<div class="l">
							<span>最新动态</span>
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7f19c39bc45d68bb1072bc191e8caf96&action=lists&catid=6&num=2&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'2',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
							</ul>
						</div>	
						<form action="<?php echo APP_PATH;?>index.php?m=content&c=index&a=search_list" method="post">
						<div class="r">
							<input type="text" name="key">
							<input class="button" type="submit" value=""/>
							
						</div>
						</form>
					</div>
					<div class="news_b">
						<div class="adv">
							<div class="lt">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=506a0dad07a0d2e97550184b2bf18cfe&action=position&posid=1&num=1&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder desc','limit'=>'1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $data = list_sort_by($data, 'updatetime', 'desc');?>
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r[catid],'id'=>$r[id])); ?>
								 <?php if($pos) foreach($pos as $v){if($v[posid]==1){   ?>
								<div style="width:43.4%;">
									<a href="<?php echo $r['url'];?>">
									<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
									<p class="yc_p1"><span><?php echo $r['title'];?></span></p>
									
									</a>
									
								<i>原创</i>
									
								</div>
								<?php } } ?>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a6029ab0350b07d9227d315e753fc7cd&action=position&posid=1&num=1&start=1&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder desc','limit'=>'1,1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $data = list_sort_by($data, 'inputtime', 'desc');?>
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r[catid],'id'=>$r[id])); ?>
								 <?php if($pos) foreach($pos as $v){if($v[posid]==1){   ?>
								<div style="width:56.2%;background: #212121;">
									<a href="<?php echo $r['url'];?>">
									<h4><?php echo $r['title'];?></h4>
									<p><?php echo $r['description'];?></p>
									
									<i>原创</i>
									
									</a>
								</div>
								<?php } } ?>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=301a8c1dff441543946b73bcbdaf4792&action=position&posid=1&num=1&start=2&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder desc','limit'=>'2,1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $data = list_sort_by($data, 'inputtime', 'desc');?>
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r[catid],'id'=>$r[id])); ?>
								<?php if($pos) foreach($pos as $v){if($v[posid]==1){   ?>
								<div style="width:56.2%;background: #212121;">
									<a href="<?php echo $r['url'];?>">
									<h4><?php echo $r['title'];?></h4>
									<p><?php echo $r['description'];?></p>
									
									<i>原创</i>
									</a>
								</div>
								<?php } }?>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ed44dd2c289fc04baf9b2e6b3e25467b&action=position&posid=1&num=1&start=3&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder desc','limit'=>'3,1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $data = list_sort_by($data, 'inputtime', 'desc');?>
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r[catid],'id'=>$r[id])); ?>
								 <?php if($pos) foreach($pos as $v){if($v[posid]==1){   ?>
								<div style="width:43.4%">
									<a href="<?php echo $r['url'];?>">
									<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
									<p class="yc_p1"><span><?php echo $r['title'];?></span></p>
									</a>
									
									<i>原创</i>
									
								</div>
								<?php } } ?>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
								
								
							</div>
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3de92f9ce839874bf6a0f5059c81a884&action=position&posid=5&num=3&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'5','order'=>'listorder desc','limit'=>'3',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $data = list_sort_by($data, 'inputtime', 'desc');?>
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r[catid],'id'=>$r[id])); ?>
								<?php if($pos) foreach($pos as $v){if($v[posid]==5){   ?> 
								<li <?php if($n==1) { ?>style="background: #0068ab;margin-top:0px;"<?php } ?> <?php if($n==2) { ?>style="background: #38afb6;"<?php } ?> <?php if($n==3) { ?>style="background: #e44c28;"<?php } ?>>
									<a href="<?php echo $r['url'];?>">
									<h4 style="padding: 0 7%;font-size: 16px;"><?php echo $r['title'];?></h4>
									<!--<p><?php echo $r['description'];?></p>-->
									</a>
									<i>热门</i>
								</li>
								<?php } } ?>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
								
							</ul>
						</div>
						<div class="headlines">
							<div class="more">
								今日头条
								<a href="<?php echo $CATEGORYS['6']['url'];?>">更多</a>
							</div>
							<ul>
							<?php $index1=1;?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=402582e5a2e01cee6023ab190c382c57&action=position&posid=2&num=7&order=listorder+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder desc','limit'=>'7',));}?>
								<?php $data = list_sort_by($data, 'inputtime', 'desc');?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r[catid],'id'=>$r[id])); ?>
								 
								<?php if($pos) foreach($pos as $v){if($v[posid]==2){   ?>
								<li>
									<i class="active"><?php echo $index1;?></i>
									<a  href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
									<span><?php echo date("m-d",$r[inputtime]);?></span>
								</li>
								<?php $index1++;} } ?>
								
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
							
							</ul>
							
						</div>
					</div>
				</div>	
				<div style="height:10px;"></div>
				<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=5"></script>
				<div style="height:10px;"></div>
				<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=6"></script>
				<div class="publish">
					<div class="pub_l">
						<div class="menu_item more">
							<ul>
							<!--独家辣评-->
							
								<li class="active"><?php echo $CATEGORYS['47']['catname'];?></li>
								<li ><?php echo $CATEGORYS['6']['catname'];?></li>
								<li ><?php echo $CATEGORYS['43']['catname'];?></li>
								<li ><?php echo $CATEGORYS['62']['catname'];?></li>
								
								<a href="<?php echo $CATEGORYS['63']['url'];?>">更多</a>
							</ul>	
						</div>
						<div class="detail">
							<!--卡车要闻-->
							<div  class="item active">
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2ad05894e4ba23167dd06045cd2f7b21&action=lists&catid=47&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'47','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
										<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
										<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
										
									<li class="hashead">
										<div class="head">
											<a href="<?php echo $r1['url'];?>" style="display:inline;border:none;"><img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>"></a>
										</div>
										<div class="desc">
											<h5><a href="<?php echo $r1['url'];?>"><?php echo $r1['title'];?></a></h5>
											<p> <?php echo $r1['description'];?></p>
											<div class="share">
												<div class="time"> <?php echo date("m-d",$r1[inputtime]);?> <?php echo date("H:i",$r1[inputtime]);?></div>
												<div class="btn">
													<div class="share_btn bdsharebuttonbox">
													
													<a href="#" class="bds_more" data-cmd="more" style="background:none;padding-left:0px;">分享</a> 
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["weixin","tsina","sqq"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","sqq"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	  
													
													</div>
													<div class="repeat_btn"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></div>
													<!--<div class="recommend_btn">
														<span>推荐</span>
														<i><?php echo $views;?></i>
													</div>-->
												</div>
											</div>
										</div>
									</li>
										<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
								
							</div>
							
							<!--客车要闻-->
							<div  class="item">
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a3aafdc496e6a4ab43129ed76fb4c015&action=lists&catid=6&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
										<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
										<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
										
									<li class="hashead">
										<div class="head">
											<a href="<?php echo $r1['url'];?>" style="display:inline;border:none;"><img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>"></a>
										</div>
										<div class="desc">
											<h5><a href="<?php echo $r1['url'];?>"><?php echo $r1['title'];?></a></h5>
											<p> <?php echo $r1['description'];?></p>
											<div class="share">
												<div class="time"> <?php echo date("m-d",$r1[inputtime]);?> <?php echo date("H:i",$r1[inputtime]);?></div>
												<div class="btn">
													<div class="share_btn bdsharebuttonbox">
													
													<a href="#" class="bds_more" data-cmd="more" style="background:none;padding-left:0px;">分享</a> 
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["weixin","tsina","sqq"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","sqq"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	  
													
													</div>
													<div class="repeat_btn"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></div>
													<!--<div class="recommend_btn">
														<span>推荐</span>
														<i><?php echo $views;?></i>
													</div>-->
												</div>
											</div>
										</div>
									</li>
										<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
								
							</div>
							
							<!--房车资讯-->
							<div  class="item">
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=57e7b63a36213f37d6bb19899ec6fe3f&action=lists&catid=43&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'43','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
										<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
										<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
										
									<li class="hashead">
										<div class="head">
											<a href="<?php echo $r1['url'];?>" style="display:inline;border:none;"><img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>"></a>
										</div>
										<div class="desc">
											<h5><a href="<?php echo $r1['url'];?>"><?php echo $r1['title'];?></a></h5>
											<p> <?php echo $r1['description'];?></p>
											<div class="share">
												<div class="time"> <?php echo date("m-d",$r1[inputtime]);?> <?php echo date("H:i",$r1[inputtime]);?></div>
												<div class="btn">
													<div class="share_btn bdsharebuttonbox">
													
													<a href="#" class="bds_more" data-cmd="more" style="background:none;padding-left:0px;">分享</a> 
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["weixin","tsina","sqq"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","sqq"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	  
													
													</div>
													<div class="repeat_btn"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></div>
													<!--<div class="recommend_btn">
														<span>推荐</span>
														<i><?php echo $views;?></i>
													</div>-->
												</div>
											</div>
										</div>
									</li>
										<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
								
							</div>
							
							
							<!--环卫车要闻-->
							<div  class="item">
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3f57acc11ff2a9465fb54c7db207eed3&action=lists&catid=62&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'62','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
										<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
										<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
										
									<li class="hashead">
										<div class="head">
											<a href="<?php echo $r1['url'];?>" style="display:inline;border:none;"><img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>"></a>
										</div>
										<div class="desc">
											<h5><a href="<?php echo $r1['url'];?>"><?php echo $r1['title'];?></a></h5>
											<p> <?php echo $r1['description'];?></p>
											<div class="share">
												<div class="time"> <?php echo date("m-d",$r1[inputtime]);?> <?php echo date("H:i",$r1[inputtime]);?></div>
												<div class="btn">
													<div class="share_btn bdsharebuttonbox">
													
													<a href="#" class="bds_more" data-cmd="more" style="background:none;padding-left:0px;">分享</a> 
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["weixin","tsina","sqq"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","sqq"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	  
													
													</div>
													<div class="repeat_btn"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></div>
													<!--<div class="recommend_btn">
														<span>推荐</span>
														<i><?php echo $views;?></i>
													</div>-->
												</div>
											</div>
										</div>
									</li>
										<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
								
							</div>
							
							
							
						</div>
					</div>
					<div class="pub_r r-switch">
						<div class="menu_box more">
							<ul>
								<li class="active">卡车直播</li>
								<li>客车直播</li>
							</ul>
							<a href="<?php echo $CATEGORYS['8']['url'];?>">更多</a>
						</div>
						<div class="desc itembox">
							
							<div class="active item">
								<div class="desc_item">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ee286a49cf5d05bf04e99b3e7d3f5fdf&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D17+group+by+title+order+by+inputtime+desc&num=3&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid =17 group by title order by inputtime desc LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<a href="<?php echo $r['url'];?>">
										<span class="bg_red">卡车直播</span>
										<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
										<p><?php echo $r['title'];?></p>
									</a>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</div>
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=aa1e989fc30f332f75712767f5c36f7b&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D17+group+by+title+order+by+inputtime+desc&num=7&start=3&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid =17 group by title order by inputtime desc LIMIT 3,7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<i><?php echo $n;?></i>
										<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
									</li>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
							
							
								
							<div class="item">
								<div class="desc_item">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=08374d03d8fc94171ecce973bbf67fec&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D18+group+by+title+order+by+inputtime+desc&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid =18 group by title order by inputtime desc LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<a href="<?php echo $r['url'];?>">
										<span class="bg_red">客车直播</span>
										<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
										<p><?php echo $r['title'];?></p>
									</a>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</div>
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dd7de483bfde85093613007506dd27c6&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D18+group+by+title+order+by+inputtime+desc&num=7&start=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid =18 group by title order by inputtime desc LIMIT 2,7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<i><?php echo $n;?></i>
										<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
									</li>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
						
							
							
						</div>
					</div>
				</div>
				 
				<div style="height:10px;"></div>
				<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=7"></script>
				<!--
				<div class="interview">
					<div class="interview_l">
						<div class="person">
							<div class="title">客 车 一 线</div>
							<div class="swiper-container bannerbox">
						        <div class="swiper-wrapper">
						            <div class="swiper-slide">
										<ul>
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3705880f7a70a3b4a55f3a3fe468066a&action=lists&catid=16&num=3&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'3',));}?>
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
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c94f4aaecbc32aa32e2aad584643c85&action=lists&catid=16&num=3&start=3&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'3,3',));}?>
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
									
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=03f5fc135bcd00674c04fe0d9bef248d&action=lists&catid=16&num=3&start=6&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'6,3',));}?>
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
						<div class="expert">
							<div class="top">
								<i>卡车一线</i>
								<span></span>
							</div>
							<div class="infor">
								<div class="infor_l">
									<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a3aaa8d8bcd91b3c36c7bb2b47a4c3e1&action=lists&catid=14&num=3&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'3',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<li>
											<a href="<?php echo $r['url'];?>">
												<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
												<p>
													<span><?php echo $r['title'];?></span>
												</p>
											</a>
										</li>
											<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
										
									</ul>
								</div>
								<div class="infor_r">
									<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=260761d30bde0902c623a6af870a0638&action=lists&catid=14&num=12&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'12',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<li <?php if($n==1) { ?>class="hot"<?php } ?>>
											<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
										</li>
											<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
										
										
									</ul>
								</div>
							</div>
						</div>
					</div>
					<img class="bz" src="images/index_experts.png" alt="">
					<div class="interview_r r-switch">
						<div class="more">
							<ul>
								<li class="active">数据参考</li>
								<li>客车专题</li>
							</ul>
							<a href="<?php echo $CATEGORYS['18']['url'];?>">更多</a>
						</div>
						<div class="itembox">
							<div class="item active">
								<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ce61acc18d7a67d263e223b5e3bc2853&action=lists&catid=25&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<span class="bg_red">数据参考</span>
										</a>
									</li>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
							
							<div class="item">
								<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f677049f44e8d3099245da981c69cd83&action=lists&catid=24&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'24','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<span class="bg_red">客车专题</span>
										</a>
									</li>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
							
						</div>
					</div>
				</div>
				 -->
				<div style="height:10px;"></div>
				<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=8"></script>
				<div class="video">
					<div class="video_t">
						<i>视频播报</i>
						<span></span>
					</div>
					<div class="video_b">
						<div class="left">
							<div class="l_video">
								<div class="video-img">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=69ca881f60145ce6a4c5f1579b741631&action=lists&catid=9&num=1&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'1',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<a href="<?php echo $r['url'];?>">
										<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
										<i></i>
									</a>
											<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</div>
								<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d607bdab994660365666e4f6912733b2&action=lists&catid=9&num=4&start=3&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'3,4',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li ><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
											<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</ul>
							</div>
							<div class="r_video">
								<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=13cf6fab0a27f198db2be0b8224e6423&action=lists&catid=9&num=2&start=1&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'1,2',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li> 
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<i></i>
										</a>
									</li>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
									
								</ul>
							</div>
						</div>
						<div class="right r-switch">
							<div class="more">
								<ul>
								
									<li class="active">排行榜</li>
									
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f09ab5936b1c4d67d3acf29946769178&action=category&catid=9&num=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'3',));}?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li><?php echo $r['catname'];?></li>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
							<div class="desc">
								
								<div class="item active">
									<ul>
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5cf71e416d2ac432034c69f6dce74498&action=lists&catid=9&num=10&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'10',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<li>
											<i><?php echo $n;?></i>
											<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
										</li>
												<?php $n++;}unset($n); ?>
										<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									</ul>
								</div>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f09ab5936b1c4d67d3acf29946769178&action=category&catid=9&num=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'3',));}?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<div class="item">
									<ul>
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b4cfdab4d079aa4f893f3590c4792b0f&action=lists&catid=%24r%5Bcatid%5D&num=10&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'10',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<li>
											<i><?php echo $n;?></i>
											<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
										</li>
												<?php $n++;}unset($n); ?>
										<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									</ul>
								</div>
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
							</div>
						</div>
					</div>
				</div>
				<!--
				<div class="club">
					<div class="club_t">
						<i>车友会</i>
						<span></span>
						<p></p>
					</div>
					<div class="club_b">
						<div class="desc">
							<div class="item">
								<div class="imgbox">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=258f2740ea2e62145515c7aeeab4c4e0&action=lists&catid=30&num=1&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
								</div>
								<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1f89e9718c3d28e1872f554b3a5f0377&action=lists&catid=30&num=3&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'3',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
										<span><?php echo date("m-d",$r[inputtime]);?></span>
									</li>
									<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
							<div class="item">
								<div class="imgbox">
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d95727b5e5193e2719d439a017f93c8e&action=lists&catid=30&num=1&siteid=%24siteid&order=inputtime+desc&start=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'3,1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</div>
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=733734831765735917f76ccd3c4e73a1&action=lists&catid=30&num=3&siteid=%24siteid&order=inputtime+desc&start=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'3,3',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
										<span><?php echo date("m-d",$r[inputtime]);?></span>
									</li>
									<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</ul>
							</div>
							<div class="item">
								<div class="imgbox">
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f33cda0ffa30d8f6b293cebebcbe8bc2&action=lists&catid=30&num=1&siteid=%24siteid&order=inputtime+desc&start=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'6,1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
									<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</div>
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f79b489d75ac856eda19ea72d021aa50&action=lists&catid=30&num=3&siteid=%24siteid&order=inputtime+desc&start=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'30','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'6,3',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a>
										<span><?php echo date("m-d",$r[inputtime]);?></span>
									</li>
									<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</ul>
							</div>
						</div>
						
						<div class="per">
							<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9e6312f11fd753b5e54e0f496ea3210d&sql=SELECT+newt_member.%2A%2Cnewt_member_kache.gongsi%2Cnewt_member_kache.jial%2Cnewt_member_kache.licheng%2Cnewt_member_kache.cjs%2Cnewt_member_kache.xjs%2Cnewt_member_kache.zhiye%2Cnewt_member_kache.guanzhu%2Cnewt_member_kache.pro%2Cnewt_member_kache.jingli%2Cnewt_member_kache.luxian%2Cnewt_member_kache.rongyu%2Cnewt_member_kache.xuanyan+FROM+newt_member+left+join+newt_member_kache+on++newt_member.userid%3Dnewt_member_kache.userid+where+groupid+%3D4+order+by+regdate+desc&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT newt_member.*,newt_member_kache.gongsi,newt_member_kache.jial,newt_member_kache.licheng,newt_member_kache.cjs,newt_member_kache.xjs,newt_member_kache.zhiye,newt_member_kache.guanzhu,newt_member_kache.pro,newt_member_kache.jingli,newt_member_kache.luxian,newt_member_kache.rongyu,newt_member_kache.xuanyan FROM newt_member left join newt_member_kache on  newt_member.userid=newt_member_kache.userid where groupid =4 order by regdate desc LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								 
								 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
								 <?php $img=get_memberavatar($v[userid]+1,'','180')?>
								 <?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
								<li>
									<div class="headimg">
										<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>"><img src="<?php echo $img;?>" alt="<?php echo $v['username'];?>" onerror="src='images/club_head.jpg'"></a>
									</div>
									<p><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>"><?php if($v['nickname']) { ?> <?php echo $v['nickname'];?> <?php } else { ?> <?php echo $v['username'];?><?php } ?></a></p>
									<div class="thumbs_up">
										<span class="number"><i style="float:left;cursor: auto;background:none;width:auto;"><?php echo count($dz);?></i>个点赞</span>
										<span style="float: right;" class="dianzantext">点赞</span>
										<i class="dianzan" data-uid="<?php echo $v['userid'];?>"></i>
									</div>
								</li>
								<?php $n++;}unset($n); ?>
								 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
					</div>	
				</div>
				-->
				
				<div class="exhibition">
					<h2>会展合作</h2>
					<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0dd75878da70af6199dccafd05557e3b&action=lists&catid=56&num=10&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'56','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'10',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a></li>
								<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</ul>
				</div>
				<div class="friend_link">
					<h2>友情链接</h2>
					<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=2b1e48a9603ade7907e7c8f6de5f269d&action=type_list&linktype=0&typeid=0&order=listorder+DESC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$data = $link_tag->type_list(array('linktype'=>'0','typeid'=>'0','order'=>'listorder DESC','limit'=>'20',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
							<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['name'];?></a>&nbsp;
							</li>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		
						
					</ul>
				</div>
				<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=9"></script>
			</div>
		</div>
		
<?php include template("content","footer"); ?>
<script type="text/javascript" src="js/swiper.min.js"></script>
	<script type="text/javascript">
		new Swiper('.swiper-container', {
	        //pagination: '.swiper-pagination',
	        paginationClickable: true,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        spaceBetween: 30
	    });
		var caverling = {
			init:function(){
				this.djlp();
				this.xj();
			},
			djlp:function(){
				//独家辣评 车辆报告 经典回顾 行业动态的切换
				$("#index .pub_l .menu_item li").on("click",function(){
					var index = $(this).index();
					$("#index .pub_l .menu_item li").removeClass("active");
					$(this).addClass("active");
					$("#index .pub_l .detail .item").removeClass("active");
					$("#index .pub_l .detail .item").eq(index).addClass("active");
				});
			},
			xj:function(){
				//新品发布 精彩赛事 切换
				$("#index .r-switch .more li").on("click",function(){
					var index = $(this).index();
					$(this).parents(".more").find("li").removeClass("active");
					$(this).addClass("active");
					$(this).parents(".r-switch").find(".item").removeClass("active");
					$(this).parents(".r-switch").find(".item").eq(index).addClass("active");
				});
			}
		}
		caverling.init();
		
		
		$(".dianzan").click(function(){
			var $t = $(this);
			var userid=$(this).data('uid');
		
			var catid=0;
			var wid=0;
			$.post("index.php?m=content&c=rss&a=dianzan",{catid:catid,wid:wid,userid:userid},function(data){
				
				if(data.status){
				
					$t.siblings('.dianzantext').html("成功");
					$t.siblings('.number').children('i').text(data.num);
				}
				
				
			},"json");
		
		
		});
	</script>
<style>
.r-switch .item{display:none;}
.r-switch .active{display:block;}
</style>


