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
<link rel="stylesheet" href="<?php echo APP_PATH;?>css/swiper.min.css">
		<div class="section">
			<div class="container sec_cont">
				<div class="recommend" >
					<h2>推荐</h2>
					<div class="bannerbox swiper-container">
						<div class="swiper-wrapper">
						
							
							<div class="swiper-slide">
								<ul class="desc">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c183497f881a4b9cb6e5b49d74eef740&sql=SELECT+newt_member.%2A%2Cnewt_member_kache.gongsi%2Cnewt_member_kache.jial%2Cnewt_member_kache.licheng%2Cnewt_member_kache.cjs%2Cnewt_member_kache.xjs%2Cnewt_member_kache.zhiye%2Cnewt_member_kache.guanzhu%2Cnewt_member_kache.pro%2Cnewt_member_kache.jingli%2Cnewt_member_kache.luxian%2Cnewt_member_kache.rongyu%2Cnewt_member_kache.xuanyan+FROM+newt_member+left+join+newt_member_kache+on++newt_member.userid%3Dnewt_member_kache.userid+where+groupid+%3D4+order+by+regdate+desc&num=4&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT newt_member.*,newt_member_kache.gongsi,newt_member_kache.jial,newt_member_kache.licheng,newt_member_kache.cjs,newt_member_kache.xjs,newt_member_kache.zhiye,newt_member_kache.guanzhu,newt_member_kache.pro,newt_member_kache.jingli,newt_member_kache.luxian,newt_member_kache.rongyu,newt_member_kache.xuanyan FROM newt_member left join newt_member_kache on  newt_member.userid=newt_member_kache.userid where groupid =4 order by regdate desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								 
								 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
								 <?php $img=get_memberavatar($v[userid]+1,'','90')?>
								 
								
								 
								 <?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
								 <?php $caredb = pc_base::load_model('careinfo_model'); $care = $caredb->get_all(array('uid'=>$v[userid])); ?>
								 

								 
								
									<li>
										<div class="head">
											<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>"><img src="<?php echo $img;?>" alt="<?php echo $v['username'];?>" onerror="src='<?php echo APP_PATH;?>images/club_head.jpg'"></a>
										</div>
										<h5><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>"><?php if($v['nickname']) { ?> <?php echo $v['nickname'];?> <?php } else { ?> <?php echo $v['username'];?><?php } ?></a></h5>
										<p><?php echo $v['xuanyan'];?></p>		
									
											<?php $uid=param::get_cookie('_userid');?>
											<?php $caredb = pc_base::load_model('careinfo_model'); $iscare = $caredb->get_one(array('uid'=>$v[userid],'userid'=>$uid));?>
											<?php if($iscare) { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="focus addcare" >已关注</a>
											<?php } else { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="focus">加关注</a>
											<?php } ?>
										
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dfad6219fca0fb761ba27dfcb17d2a07&sql=SELECT+%2A+FROM+newt_news+WHERE+catid+in%2829%2C30%29+and+username%3D%27%24v%5Busername%5D%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_news WHERE catid in(29,30) and username='$v[username]' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
										
										<?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
										<div class="thumbs_up">
											<div class="per"><i></i><span><?php echo count($care);?></span></div>
											<div class="up" style="text-align: center;"><a class="inner"><i class="dianzan" data-uid="<?php echo $v['userid'];?>"></i><span><?php echo count($dz);?></span></a></div>
											<div class="share"><span><?php echo count($data);?></span><i></i></div>
										</div>
									</li>
									<?php $n++;}unset($n); ?>
								 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
							
							<div class="swiper-slide">
								<ul class="desc">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=97a57d9acf22e5df952a337edd6576e2&sql=SELECT+newt_member.%2A%2Cnewt_member_kache.gongsi%2Cnewt_member_kache.jial%2Cnewt_member_kache.licheng%2Cnewt_member_kache.cjs%2Cnewt_member_kache.xjs%2Cnewt_member_kache.zhiye%2Cnewt_member_kache.guanzhu%2Cnewt_member_kache.pro%2Cnewt_member_kache.jingli%2Cnewt_member_kache.luxian%2Cnewt_member_kache.rongyu%2Cnewt_member_kache.xuanyan+FROM+newt_member+left+join+newt_member_kache+on++newt_member.userid%3Dnewt_member_kache.userid+where+groupid+%3D4+order+by+regdate+desc&start=4&num=4&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT newt_member.*,newt_member_kache.gongsi,newt_member_kache.jial,newt_member_kache.licheng,newt_member_kache.cjs,newt_member_kache.xjs,newt_member_kache.zhiye,newt_member_kache.guanzhu,newt_member_kache.pro,newt_member_kache.jingli,newt_member_kache.luxian,newt_member_kache.rongyu,newt_member_kache.xuanyan FROM newt_member left join newt_member_kache on  newt_member.userid=newt_member_kache.userid where groupid =4 order by regdate desc LIMIT 4,4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								 
								 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
								 <?php $img=get_memberavatar($v[userid]+1,'','90')?>
								 
								 <?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
								 <?php $caredb = pc_base::load_model('careinfo_model'); $care = $caredb->get_all(array('uid'=>$v[userid])); ?>
								 

								 
								
									<li>
										<div class="head">
											<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>"><img src="<?php echo $img;?>" alt="<?php echo $v['username'];?>" onerror="src='<?php echo APP_PATH;?>images/club_head.jpg'"></a>
										</div>
										<h5><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>"><?php if($v['nickname']) { ?> <?php echo $v['nickname'];?> <?php } else { ?> <?php echo $v['username'];?><?php } ?></a></h5>
										<p><?php echo $v['xuanyan'];?></p>		
									
											<?php $uid=param::get_cookie('_userid');?>
											<?php $caredb = pc_base::load_model('careinfo_model'); $iscare = $caredb->get_one(array('uid'=>$v[userid],'userid'=>$uid));?>
											<?php if($iscare) { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="focus addcare" >已关注</a>
											<?php } else { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="focus">加关注</a>
											<?php } ?>
										
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dfad6219fca0fb761ba27dfcb17d2a07&sql=SELECT+%2A+FROM+newt_news+WHERE+catid+in%2829%2C30%29+and+username%3D%27%24v%5Busername%5D%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_news WHERE catid in(29,30) and username='$v[username]' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
										<?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
										
										<div class="thumbs_up">
											<div class="per"><i></i><span><?php echo count($care);?></span></div>
											<div class="up" style="text-align: center;"><a class="inner"><i class="dianzan" data-uid="<?php echo $v['userid'];?>"></i><span><?php echo count($dz);?></span></a></div>
											<div class="share"><span><?php echo count($data);?></span><i></i></div>
										</div>
									</li>
									<?php $n++;}unset($n); ?>
								 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
							
						</div>
						<div class="swiper-button-next" style="right: 30px"></div>
				        <div class="swiper-button-prev" style="left:30px"></div>
					</div>
				</div>
				<div class="all">
					<h2>全部</h2>
					<div>
						<ul class="desc">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=21301e27957a84860c913593e029f6fe&sql=SELECT+newt_member.%2A%2Cnewt_member_kache.gongsi%2Cnewt_member_kache.jial%2Cnewt_member_kache.licheng%2Cnewt_member_kache.cjs%2Cnewt_member_kache.xjs%2Cnewt_member_kache.zhiye%2Cnewt_member_kache.guanzhu%2Cnewt_member_kache.pro%2Cnewt_member_kache.jingli%2Cnewt_member_kache.luxian%2Cnewt_member_kache.rongyu%2Cnewt_member_kache.xuanyan+FROM+newt_member+left+join+newt_member_kache+on++newt_member.userid%3Dnewt_member_kache.userid+where+groupid+%3D4+order+by+regdate+desc&num=8&page=%24page&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT newt_member.*,newt_member_kache.gongsi,newt_member_kache.jial,newt_member_kache.licheng,newt_member_kache.cjs,newt_member_kache.xjs,newt_member_kache.zhiye,newt_member_kache.guanzhu,newt_member_kache.pro,newt_member_kache.jingli,newt_member_kache.luxian,newt_member_kache.rongyu,newt_member_kache.xuanyan FROM newt_member left join newt_member_kache on  newt_member.userid=newt_member_kache.userid where groupid =4 order by regdate desc) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT newt_member.*,newt_member_kache.gongsi,newt_member_kache.jial,newt_member_kache.licheng,newt_member_kache.cjs,newt_member_kache.xjs,newt_member_kache.zhiye,newt_member_kache.guanzhu,newt_member_kache.pro,newt_member_kache.jingli,newt_member_kache.luxian,newt_member_kache.rongyu,newt_member_kache.xuanyan FROM newt_member left join newt_member_kache on  newt_member.userid=newt_member_kache.userid where groupid =4 order by regdate desc LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								 
								 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
								 <?php $img=get_memberavatar($v[userid]+1,'','90')?>
								
								 <?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
								 <?php $caredb = pc_base::load_model('careinfo_model'); $care = $caredb->get_all(array('uid'=>$v[userid])); ?>
								 
								  
									<li <?php if($n==4||$n==8) { ?> style="margin-right:0px;" <?php } ?>>
										<div class="head">
											<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>"><img src="<?php echo $img;?>" alt="<?php echo $v['username'];?>" onerror="src='<?php echo APP_PATH;?>images/club_head.jpg'"></a>
										</div>
										<h5><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>"><?php if($v['nickname']) { ?> <?php echo $v['nickname'];?> <?php } else { ?> <?php echo $v['username'];?><?php } ?></a></h5>
										<p><?php echo $v['xuanyan'];?></p>		
											<?php $uid=param::get_cookie('_userid');?>
											<?php $caredb = pc_base::load_model('careinfo_model'); $iscare = $caredb->get_one(array('uid'=>$v[userid],'userid'=>$uid));?>
											<?php if($iscare) { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="focus addcare ">已关注</a>
											<?php } else { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="focus">加关注</a>
											<?php } ?>
											
											
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dfad6219fca0fb761ba27dfcb17d2a07&sql=SELECT+%2A+FROM+newt_news+WHERE+catid+in%2829%2C30%29+and+username%3D%27%24v%5Busername%5D%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_news WHERE catid in(29,30) and username='$v[username]' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
											
											<?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
										
										<div class="thumbs_up">
											<div class="per"><i></i><span><?php echo count($care);?></span></div>
											<div class="up" style="text-align: center;"><i class="dianzan" data-uid="<?php echo $v['userid'];?>"></i><span><?php echo count($dz);?></span></div>
											<div class="share"><span><?php echo count($data);?></span><i></i></div>
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
<?php include template("content","footer"); ?>
<script type="text/javascript" src="<?php echo APP_PATH;?>js/swiper.min.js"></script>
	<script type="text/javascript">
		new Swiper('.swiper-container', {
	        //pagination: '.swiper-pagination',
	        paginationClickable: true,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        spaceBetween: 95
	    });
		



$(".desc li .focus").click(function(){
	var $userid=$(this).data('userid');
	if($userid){
		
		
		if($(this).attr('class')=="focus addcare"){
			$(this).html('加关注');
			
			var uid=$(this).data('uid');//被关注用户id  uid
			$.post("<?php echo APP_PATH;?>index.php?m=content&c=rss&a=delcare",{uid:uid},function(data){
				
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
		
		location.href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login";
	}
	

});

		
		$(".dianzan").click(function(){
		 
			var userid=$(this).data('uid');
			var $t = $(this);
			
			var catid=0;
			var wid=0;
			$.post("<?php echo APP_PATH;?>index.php?m=content&c=rss&a=dianzan",{catid:catid,wid:wid,userid:userid},function(data){
				
				if(data.status){
					
					//点赞成功
					$t.next().text(data.num);
					$t.css("background","url('<?php echo APP_PATH;?>images/club_detail_up.png') no-repeat");
				}
				
			},"json");
		
			
		});

	</script>
