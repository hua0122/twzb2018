<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><title>车友会--会员详情</title>
<?php include template("content","header"); ?>
		<div id="interview_desc">
		<div class="section">
			<div class="container sec_cont">
				<div class="title_position">
				<a href="<?php echo siteurl($siteid);?>">首页</a>
				<a>会员详情</a>
					
				</div>
				<div class="person">
					<div class="imgBox">
						<?php if($m[groupid]==4) { ?>
						<img src="<?php echo $img;?>" alt="<?php echo $m['nickname'];?>" onerror="src='images/club_head.jpg'">
						<?php } else { ?>
						<img src="<?php echo $img;?>" alt="<?php echo $m['nickname'];?>" onerror="src='images/index_publis_head.png'">
						<?php } ?>
						
					</div>
					<div class="infor">
						<div class="name">
							<h3><?php if($m[nickname]) { ?> <?php echo $m['nickname'];?><?php } else { ?> <?php echo $m['username'];?> <?php } ?></h3>
							<?php $uid=param::get_cookie('_userid');?>
							<?php $caredb = pc_base::load_model('careinfo_model'); $iscare = $caredb->get_one(array('uid'=>$m[userid],'userid'=>$uid));?>
											<?php if($iscare) { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $m['userid'];?>" class="focus addcare">已关注</a>
											<?php } else { ?>
											<a href="javascript:;" data-userid="<?php echo $uid;?>" data-uid="<?php echo $m['userid'];?>" class="focus">加关注</a>
											<?php } ?>
											
											
							 <?php $caredb = pc_base::load_model('careinfo_model'); $care = $caredb->get_all(array('uid'=>$m[userid])); ?>
							
							<i style="background: url(<?php echo APP_PATH;?>images/club_per.png) no-repeat;width:18px;height:18px;display:block;float:left;padding-left:20px;margin-top:12px;margin-left:5px;font-style: normal;font-size:14px;color:#666"><?php echo count($care);?></i>
							
						</div>
						<?php if($m[groupid]==4) { ?>
						<p>
						所在城市：<?php echo $citypro;?><br/>
						职业：<?php echo $m_d['zhiye'];?><br/>
						所在公司：<?php echo $m_d['gongsi'];?><br/>
						关注信息：<?php echo $m_d['guanzhu'];?><br/>
						驾龄：<?php echo $m_d['jial'];?>年<br/>
						驾驶累计里程：<?php echo $m_d['licheng'];?>公里<br/>
						曾驾驶车辆：<?php echo $m_d['cjs'];?><br/>
						现驾驶车辆：<?php echo $m_d['xjs'];?><br/>
						主要运输路线：<?php echo $m_d['luxian'];?><br/>
						工作经历：<?php echo $m_d['jingli'];?><br/>
						获得荣誉：<?php echo $m_d['rongyu'];?><br/>
						个人宣言：<?php echo $m_d['xuanyan'];?><br/>
						</p>
						<?php } else { ?>
						<p>
						所在城市：<?php echo $citypro;?><br/>
						职业：<?php echo $m_d['zhiye'];?><br/>
						所在公司：<?php echo $m_d['gongsi'];?><br/>
						关注信息：<?php echo $m_d['guanzhu'];?><br/>
						从业年限：<?php echo $m_d['nianxian'];?><br/>
						工作经历：<?php echo $m_d['jingli'];?><br/>
					
						</p>
						<?php } ?>
					</div>
					
					
				</div>
				<!--<div style="margin-top:20px;line-height:25px;min-height:300px;"><?php echo $content;?></div>-->
				
				<div class="relate_article relate" style="min-height:200px;">
					<h5>相关文章</h5>
					<ul>
						
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=90df596cff934e11e4110b91dc40ad96&sql=SELECT+%2A+FROM+newt_news+WHERE+username%3D%27%24m%5Busername%5D%27+order+by+inputtime+desc&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_news WHERE username='$m[username]' order by inputtime desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
							<?php if($data) { ?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r[id])); $views = $_r[views]; ?>
							<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r[catid].'-'.$r[id].'-'.$modelid));?>
							<?php list($copyfrom) = explode('|', $r['copyfrom'])?>
							
							<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r[catid],'id'=>$r[id])); ?>
															
						<li>
							<div class="imgbox">
								<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>"></a>
							</div>
							<div class="right">
								<h6><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><?php  if($pos) foreach($pos as $v){ if($v[posid]==1){echo "<i>原创</i>";}elseif($v[posid]==2){echo "<i>头条</i>";}else{echo "<i>热门</i>";} };?></h6>
								<p>
								<?php echo $r['description'];?> <a href="<?php echo $r['url'];?>">[详细]</a></p>
								<div class="timebox">
									<span class="time"> <?php echo date("Y-m-d H:i",$r[inputtime]);?></span>
									<span class="user"> 作者：<?php echo $r['username'];?></span>
									<span class="from"> 来源：<?php if($copyfrom) { ?> <?php echo $copyfrom;?> <?php } else { ?> 环球商用车 <?php } ?></span>
									<i class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></i>
									<i class="seen"><?php echo $views;?></i>
								</div>
							</div>
						</li>
						<?php $n++;}unset($n); ?>
						<?php } ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</ul>
				</div>
				
			</div>
		</div>
<?php include template("content","footer"); ?>

<script>
$(".infor .name a").click(function(){
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