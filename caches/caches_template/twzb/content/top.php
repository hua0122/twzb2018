<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name=renderer content=webkit>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta charset="UTF-8">
	<meta http-equiv="content-Type" content="text/html;charset=utf-8">
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">  

	<meta name="author" content="重庆纽腾网络科技公司">
	<meta name="copyright" content="重庆纽腾网络科技公司">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>css/twzb.css">
	<script type="text/javascript" src="<?php echo APP_PATH;?>js/jquery.min.js"></script>
	

</head>
<body style="background: #f7f7f7;">
	<div id="club">
		<div class="header" style="background: #fff">
			<div class="welcome">
				<div class="cont container">
					<h3><a href="<?php echo APP_PATH;?>index.php" style="color:#fff">图文直播首页</a></h3>
					<div class="group" style="background:#465b70">
					<script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="60" frameborder="0" scrolling="no" style="background:#465b70"></iframe>')</script>
						
					</div>
				</div>
			</div>
			<div class="search container">
				<a href="<?php echo APP_PATH;?>" class="logo">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=50692c0cc7fe63c7fc5c58bd38d035a6&sql=SELECT+%2A+FROM+newt_page+WHERE+catid%3D2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_page WHERE catid=2 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
					 <?php echo $val['content'];?>
					 <?php $n++;}unset($n); ?>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</a>
				<div class="input">
					<form action="<?php echo APP_PATH;?>index.php?m=content&c=index&a=search_list
" method="post">

						<div class="in">
							<span>搜索</span>
							<input type="text" name="key">
							
							<input class="button" type="submit" value=""/>
						</div>
					</form>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c88cfb56e70273333042fc83c6d2b33d&sql=SELECT+%2A+FROM+newt_page+WHERE+catid%3D37&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_page WHERE catid=37 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
					 <?php echo $val['content'];?>
					 <?php $n++;}unset($n); ?>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
				</div>
				<div class="ewm">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dbe76e5af6f81a38a6bc599c8efcc44d&sql=SELECT+%2A+FROM+newt_page+WHERE+catid%3D3&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_page WHERE catid=3 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
					 <?php echo $val['content'];?>
					 <?php $n++;}unset($n); ?>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
			<div class="nav">
				<ul class="container">
					<li><a <?php if($catid==15) { ?>class="active"<?php } ?> href="<?php echo $CATEGORYS['15']['url'];?>">首页</a></li>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c7b6e9b609fefa617e384fec6026283&action=category&catid=15&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'15','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li ><a <?php if($catid==$r[catid]) { ?> class="active" <?php } ?> href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>" ><?php echo $r['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php $uid=param::get_cookie('_userid');?>
				<?php $db = pc_base::load_model('member_model'); $memberinfo = $db->get_one(array('userid'=>param::get_cookie('_userid'))); ?>
				<?php if($uid) { ?>
				
				<?php } else { ?>
					<li><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login">我要加入</a></li>
				<?php } ?>
				</ul>
			</div>
		</div>
		
		<script>
		$(function(){
				$('.ewm').click(function(){
					alert(111);
				});
		})
		
		</script>