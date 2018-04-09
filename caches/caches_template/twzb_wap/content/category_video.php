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
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff5df9770fe9edf3b3f5e56d739e2d9e&action=category&catid=9&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li <?php if($catid==$r[catid]) { ?> class="active" <?php } ?> <?php if($catid==9 && $n==1) { ?> class="active" <?php } ?>><a><?php echo $r['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</div>
			</nav>
			<div class="video">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff5df9770fe9edf3b3f5e56d739e2d9e&action=category&catid=9&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="nav-item">
					<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5e2e86a2e4656aa24221bcd6ce9fb829&action=lists&catid=%24r%5Bcatid%5D&num=10&siteid=%24siteid&order=inputtime+desc&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'inputtime desc','moreinfo'=>'1','limit'=>'10',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r1[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
								<?php list($copyfrom) = explode('|', $r1['copyfrom'])?>		
								<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r1[catid],'id'=>$r1[id])); ?>
								<?php $a=string2array($r[pictureurls])?>
						<li>
							<a href="<?php echo $r1['url'];?>">
								<!--<div class="tags">
									<div class="hot">热门</div>
									<div class="tt">头条</div>
									<div class="yc">原创</div>
								</div>-->
								
								<div class="video-infor">
									<img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>">
									<i></i>
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
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			
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
