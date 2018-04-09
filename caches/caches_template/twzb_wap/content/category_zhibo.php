<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','top',$default_style."_wap");
?>

	<div id="twsp_video">
		
		<section style="margin-top:1.74rem;padding-bottom: 1.18rem;" class="another-style">
			<nav>
				<div class="nav-inner">
					<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c2cd9ad4c77737316047e82b075c6e9&action=category&catid=8&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'8','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li <?php if($catid==$r[catid]) { ?> class="active" <?php } ?> <?php if($catid==8 && $n==1) { ?> class="active" <?php } ?>><a><?php echo $r['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</div>
			</nav>
			<div class="video">
			
				<div class="nav-item">
					<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1789664f87a671a2f1eeb047450ea5e3&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D17+group+by+title+order+by+inputtime+desc&num=15&page=%24page&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT * FROM newt_zhibo WHERE catid =17 group by title order by inputtime desc) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid =17 group by title order by inputtime desc LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r1[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
								<?php list($copyfrom) = explode('|', $r1['copyfrom'])?>		
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r1[catid],'id'=>$r1[id])); ?>
								<?php $a=string2array($r1[pictureurls])?>
						<li>
							<a href="<?php echo $r1['url'];?>">
								<!--<div class="tags">
									<div class="hot">热门</div>
									<div class="tt">头条</div>
									<div class="yc">原创</div>
								</div>-->
								
								<div class="video-infor">
									<img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>">
									<!--<i></i>-->
									<h3><?php echo $r1['title'];?></h3>
								</div>
								<div class="video-time">
									<span class="time"> <?php echo date("m-d",$r1[inputtime]);?> </span>
									<span class="seen"><?php echo $views;?></span>
									<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
									<span class="user" style="margin-right: 0.16rem;">  作者：<?php echo $r1['username'];?></span>
									<span class="from"> 来源：<?php echo $copyfrom;?></span>
								</div>
							</a>
						</li>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</ul>
				</div>
				<div class="nav-item">
					<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fae17803011853a4cafeb44e20eb3dc6&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D18+group+by+title+order+by+inputtime+desc&num=15&page=%24page&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT * FROM newt_zhibo WHERE catid =18 group by title order by inputtime desc) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid =18 group by title order by inputtime desc LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r1[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
								<?php list($copyfrom) = explode('|', $r1['copyfrom'])?>		
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r1[catid],'id'=>$r1[id])); ?>
								<?php $a=string2array($r1[pictureurls])?>
						<li>
							<a href="<?php echo $r1['url'];?>">
								<!--<div class="tags">
									<div class="hot">热门</div>
									<div class="tt">头条</div>
									<div class="yc">原创</div>
								</div>-->
								
								<div class="video-infor">
									<img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>">
									<!--<i></i>-->
									<h3><?php echo $r1['title'];?></h3>
								</div>
								<div class="video-time">
									<span class="time"> <?php echo date("m-d",$r1[inputtime]);?> </span>
									<span class="seen"><?php echo $views;?></span>
									<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
									<span class="user" style="margin-right: 0.16rem;">  作者：<?php echo $r1['username'];?></span>
									<span class="from"> 来源：<?php echo $copyfrom;?></span>
								</div>
							</a>
						</li>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</ul>
				</div>
				<div class="nav-item">
					<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=afbe2eb36650556161f40120551e2c22&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D19+group+by+title+order+by+inputtime+desc&num=15&page=%24page&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT * FROM newt_zhibo WHERE catid =19 group by title order by inputtime desc) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid =19 group by title order by inputtime desc LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r1[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
								<?php list($copyfrom) = explode('|', $r1['copyfrom'])?>		
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r1[catid],'id'=>$r1[id])); ?>
								<?php $a=string2array($r1[pictureurls])?>
						<li>
							<a href="<?php echo $r1['url'];?>">
								<!--<div class="tags">
									<div class="hot">热门</div>
									<div class="tt">头条</div>
									<div class="yc">原创</div>
								</div>-->
								
								<div class="video-infor">
									<img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>">
									<!--<i></i>-->
									<h3><?php echo $r1['title'];?></h3>
								</div>
								<div class="video-time">
									<span class="time"> <?php echo date("m-d",$r1[inputtime]);?> </span>
									<span class="seen"><?php echo $views;?></span>
									<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
									<span class="user" style="margin-right: 0.16rem;">  作者：<?php echo $r1['username'];?></span>
									<span class="from"> 来源：<?php echo $copyfrom;?></span>
								</div>
							</a>
						</li>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</ul>
				</div>
			
			</div>
		</section>
	

<?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','footer',$default_style."_wap");
?>
	
	<script type="text/javascript">
		$(function(){
			CommonFun.init();
			$("#twsp_video section nav ul li").on("click",function(){
				var index = $(this).index();
				$("#twsp_video section  nav ul li").removeClass("active");
				$(this).addClass("active");
				$("#twsp_video section .nav-item").hide();
				$("#twsp_video section .nav-item").eq(index).show();
			})
		})
	</script>
