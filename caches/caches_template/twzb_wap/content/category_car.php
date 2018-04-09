<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','car_top',$default_style."_wap");
?>

	<div id="club">
		<section style="margin-top:1.94rem" class="another-style">
			<div class="recommend">
				<div class="title-box">
					<div>
						<h3>推荐</h3>
						<span>Recommend</span>
					</div>
				</div>
				<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login" class="join">立即加入</a>
				<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c183497f881a4b9cb6e5b49d74eef740&sql=SELECT+newt_member.%2A%2Cnewt_member_kache.gongsi%2Cnewt_member_kache.jial%2Cnewt_member_kache.licheng%2Cnewt_member_kache.cjs%2Cnewt_member_kache.xjs%2Cnewt_member_kache.zhiye%2Cnewt_member_kache.guanzhu%2Cnewt_member_kache.pro%2Cnewt_member_kache.jingli%2Cnewt_member_kache.luxian%2Cnewt_member_kache.rongyu%2Cnewt_member_kache.xuanyan+FROM+newt_member+left+join+newt_member_kache+on++newt_member.userid%3Dnewt_member_kache.userid+where+groupid+%3D4+order+by+regdate+desc&num=4&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT newt_member.*,newt_member_kache.gongsi,newt_member_kache.jial,newt_member_kache.licheng,newt_member_kache.cjs,newt_member_kache.xjs,newt_member_kache.zhiye,newt_member_kache.guanzhu,newt_member_kache.pro,newt_member_kache.jingli,newt_member_kache.luxian,newt_member_kache.rongyu,newt_member_kache.xuanyan FROM newt_member left join newt_member_kache on  newt_member.userid=newt_member_kache.userid where groupid =4 order by regdate desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								 
								 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
								 <?php $img=get_memberavatar($v[userid],'','90')?>
								 
								
								 
								 <?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
								 <?php $caredb = pc_base::load_model('careinfo_model'); $care = $caredb->get_all(array('uid'=>$v[userid])); ?>
					<li>
						<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>">
							<img src="<?php echo $img;?>" alt="<?php echo $v['username'];?>" onerror="src='images/club_head.jpg'">
							<p class="username"><?php if($v['nickname']) { ?> <?php echo $v['nickname'];?> <?php } else { ?> <?php echo $v['username'];?><?php } ?></p>
							<?php $uid=param::get_cookie('_userid');?>
											<?php $caredb = pc_base::load_model('careinfo_model'); $iscare = $caredb->get_one(array('uid'=>$v[userid],'userid'=>$uid));?>
											<?php if($iscare) { ?>
											<span data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="active addcare" >已关注</span>
											<?php } else { ?>
											<span  data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="active">加关注</span>
											<?php } ?>
							
							
							<p><?php echo $v['xuanyan'];?></p>
							
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dfad6219fca0fb761ba27dfcb17d2a07&sql=SELECT+%2A+FROM+newt_news+WHERE+catid+in%2829%2C30%29+and+username%3D%27%24v%5Busername%5D%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_news WHERE catid in(29,30) and username='$v[username]' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
										
							<?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
							<dl>
								<dd class="fans">粉丝:<?php echo count($care);?></dd>
								<dd class="works">作品:<?php echo count($data);?></dd>
								<dd class="up" data-uid="<?php echo $v['userid'];?>"><?php echo count($dz);?></dd>
							</dl>
						</a>
					</li>
					
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
					
				</ul>
			</div>
			<div class="all">
				<div class="title-box">
					<div>
						<h3>全部</h3>
						<span>Recommend</span>
					</div>
				</div>
				<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=cac95d3880d70bc53e2ecacf1e791cda&sql=SELECT+newt_member.%2A%2Cnewt_member_kache.gongsi%2Cnewt_member_kache.jial%2Cnewt_member_kache.licheng%2Cnewt_member_kache.cjs%2Cnewt_member_kache.xjs%2Cnewt_member_kache.zhiye%2Cnewt_member_kache.guanzhu%2Cnewt_member_kache.pro%2Cnewt_member_kache.jingli%2Cnewt_member_kache.luxian%2Cnewt_member_kache.rongyu%2Cnewt_member_kache.xuanyan+FROM+newt_member+left+join+newt_member_kache+on++newt_member.userid%3Dnewt_member_kache.userid+where+groupid+%3D4+order+by+regdate+desc&num=8&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT newt_member.*,newt_member_kache.gongsi,newt_member_kache.jial,newt_member_kache.licheng,newt_member_kache.cjs,newt_member_kache.xjs,newt_member_kache.zhiye,newt_member_kache.guanzhu,newt_member_kache.pro,newt_member_kache.jingli,newt_member_kache.luxian,newt_member_kache.rongyu,newt_member_kache.xuanyan FROM newt_member left join newt_member_kache on  newt_member.userid=newt_member_kache.userid where groupid =4 order by regdate desc LIMIT 8");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								 
								 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
								 <?php $img=get_memberavatar($v[userid],'','90')?>
								 
								
								 
								 <?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
								 <?php $caredb = pc_base::load_model('careinfo_model'); $care = $caredb->get_all(array('uid'=>$v[userid])); ?>
					<li>
						<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=show_memberdetail&uid=<?php echo $v['userid'];?>">
							<img src="<?php echo $img;?>" alt="<?php echo $v['username'];?>" onerror="src='images/club_head.jpg'">
							<p class="username"><?php if($v['nickname']) { ?> <?php echo $v['nickname'];?> <?php } else { ?> <?php echo $v['username'];?><?php } ?></p>
							<?php $uid=param::get_cookie('_userid');?>
											<?php $caredb = pc_base::load_model('careinfo_model'); $iscare = $caredb->get_one(array('uid'=>$v[userid],'userid'=>$uid));?>
											<?php if($iscare) { ?>
											<span data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="active addcare" >已关注</span>
											<?php } else { ?>
											<span  data-userid="<?php echo $uid;?>" data-uid="<?php echo $v['userid'];?>" class="active">加关注</span>
											<?php } ?>
											
							<p><?php echo $v['xuanyan'];?></p>
							
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dfad6219fca0fb761ba27dfcb17d2a07&sql=SELECT+%2A+FROM+newt_news+WHERE+catid+in%2829%2C30%29+and+username%3D%27%24v%5Busername%5D%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_news WHERE catid in(29,30) and username='$v[username]' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
										
							<?php $db = pc_base::load_model('dianzan_model'); $dz = $db->get_all(array('userid'=>$v[userid])); ?>
							<dl>
								<dd class="fans">粉丝:<?php echo count($care);?></dd>
								<dd class="works">作品:<?php echo count($data);?></dd>
								<dd class="up" data-uid="<?php echo $v['userid'];?>"><?php echo count($dz);?></dd>
							</dl>
						</a>
					</li>
					
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>	

		</section>
	</div>
	
</body>
</html>
<script>
$(function(){
	$("#club li span").click(function(){
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

	$(".up").click(function(){
		var userid=$(this).data('uid');
		
		var catid=0;
		var wid=0;
		$.post("index.php?m=content&c=rss&a=dianzan",{catid:catid,wid:wid,userid:userid},function(data){
				
				$("#dianzan").html("点赞成功");
				location.reload();
			});
	
	});


});

	</script>

