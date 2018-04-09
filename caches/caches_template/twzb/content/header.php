<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name=renderer content=webkit>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />

	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">  

	<meta name="author" content="环球商用车">
	<meta name="copyright" content="环球商用车">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>css/twzb.css">
	<script type="text/javascript" src="<?php echo APP_PATH;?>js/jquery.min.js"></script>
	<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>


</head>
<body>
	
		<div class="header">
			<div class="welcome">
				<div class="cont container">
					<h3>欢迎来到《环球商用车网》！</h3>
					<div class="group">
						<a href="<?php echo APP_PATH;?>index.php?m=member&c=content&a=publish" style="margin-top:0px;">
							<img src="<?php echo APP_PATH;?>images/index_tg.png" alt="">
							<p>投稿</p>
						</a>
						<a href="<?php echo $CATEGORYS['35']['url'];?>" style="margin-top:0px;">
							<img src="<?php echo APP_PATH;?>images/index_jm.png" alt="">
							<p>经销商加盟</p>
						</a>
						<a href="<?php echo $CATEGORYS['34']['url'];?>" style="margin-top:0px;">
							<img src="<?php echo APP_PATH;?>images/index_hz.png" alt="">
							<p>广告合作</p>
						</a>
					</div>
				</div>
				<div class="contact">
				<?php $uid=param::get_cookie('_userid');?>
				<?php $dbm = pc_base::load_model('member_model'); $member = $dbm->get_one(array('userid'=>param::get_cookie('_userid'))); ?>
				
				<?php if($uid) { ?>
				<a href="<?php echo APP_PATH;?>index.php?m=member"><?php if($member['nickname']) { ?><?php echo $member['nickname'];?> <?php } else { ?> <?php echo $memberinfo['nickname'];?> <?php } ?></a>
				<?php } else { ?>
					<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login">会员登录</a>
				<?php } ?>
					<a href="<?php echo $CATEGORYS['36']['url'];?>">联系我们</a>
				</div>
			</div>
			<div class="search container">
				<a href="<?php echo APP_PATH;?>index.php" class="logo">
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
			<style>
			.nav .container ul{width:210px;float:left;height:65px;border-right:1px dashed #E0E0E0;margin:5px;}
			.nav .container ul span{display:block;width:auto;margin:10px;float:left;font-size:16px;font-weight:800;margin-top:20px;}
			.nav .container ul span a{color:#fff;}
			.nav .container ul span a:hover{color:#0068ab}
			.nav .container ul li{width:75px;float:left;height:30px;margin-top:2px;}
			.header .nav ul li a{text-align:center;font-size:14px;line-height:30px;}
			
			</style>
			<div class="nav" style="height:75px;">
				<div class="container" style="height:75px;">
					<ul style="width:60px;"><span><a <?php if($catid==0) { ?>class="active"<?php } ?> href="<?php echo APP_PATH;?>index.php">首页</a></span></ul>
					<ul>
							<span><a href="<?php echo $CATEGORYS['63']['url'];?>">新闻</a></span>
							<li><a href="<?php echo $CATEGORYS['47']['url'];?>">卡车</a></li>
							<li><a href="<?php echo $CATEGORYS['6']['url'];?>">客车</a></li>
							<li><a href="<?php echo $CATEGORYS['43']['url'];?>">房车</a></li>
							<li><a href="<?php echo $CATEGORYS['62']['url'];?>">环卫车</a></li>
							
					</ul>
					
					<ul>
							<span><a href="<?php echo $CATEGORYS['57']['url'];?>">独家</a></span>
							<li><a href="<?php echo $CATEGORYS['59']['url'];?>">解读市场</a></li>
							<li><a href="<?php echo $CATEGORYS['58']['url'];?>">采购公告</a></li>
							<li><a href="<?php echo $CATEGORYS['61']['url'];?>">车型PK</a></li>
							<li><a href="<?php echo $CATEGORYS['60']['url'];?>">车迷故事</a></li>
							
					</ul>
					<ul>
							<span><a href="<?php echo $CATEGORYS['64']['url'];?>">图文</a></span>
							<li><a href="<?php echo $CATEGORYS['8']['url'];?>">图文直播</a></li>
							<li><a href="<?php echo $CATEGORYS['9']['url'];?>">视频播报</a></li>
							<li><a href="<?php echo $CATEGORYS['10']['url'];?>">专题报道</a></li>
							
							
					</ul>
					<ul>
							<span><a href="<?php echo $CATEGORYS['65']['url'];?>">购车</a></span>
							<li><a href="<?php echo $CATEGORYS['66']['url'];?>">卡车购</a></li>
							<li><a href="<?php echo $CATEGORYS['67']['url'];?>">客车购</a></li>
							<li><a href="<?php echo $CATEGORYS['68']['url'];?>">房车购</a></li>
							<li><a href="<?php echo $CATEGORYS['69']['url'];?>">环卫车购</a></li>
							
					</ul>
					<ul style="border:none">
							<span><a href="<?php echo $CATEGORYS['15']['url'];?>">车友会</a></span>
							<li><a href="<?php echo $CATEGORYS['29']['url'];?>">车友活动</a></li>
							<li><a href="<?php echo $CATEGORYS['30']['url'];?>">车友故事</a></li>
							
							
					</ul>
				
				</div>
			</div>
		</div>