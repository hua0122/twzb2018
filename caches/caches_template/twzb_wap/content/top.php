<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-Type" content="text/html;charset=utf-8">
	<meta name="description" content="重庆纽腾网络科技公司">
	<meta name="keywords" content="重庆纽腾网络科技公司">
	<meta name="author" content="重庆纽腾网络科技公司">
	<meta name="copyright" content="重庆纽腾网络科技公司">
	<meta http-equiv="X-UA-Compatible" content="IE-11">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no,maximum-scale=1.0,minimum-scale=1.0">
	<title><?php if(isset($setting[meta_title]) && !empty($setting[meta_title])) { ?><?php echo $setting['meta_title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">  
	<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/css/twzb.css">
	<script type="text/javascript" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/js/setRootSize.js"></script>
	<script type="text/javascript" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/js/common.js"></script>
	<script type="text/javascript">
		var FontSize = new RootSize();
	</script>
</head>
<body>
<header class="another-style" style="height: 1.74rem">
			<nav>
				<a href="<?php echo APP_PATH;?>index.php" class="header-logo" style="width: 0.57rem;">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=50692c0cc7fe63c7fc5c58bd38d035a6&sql=SELECT+%2A+FROM+newt_page+WHERE+catid%3D2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_page WHERE catid=2 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
					 <?php echo $val['content'];?>
					 <?php $n++;}unset($n); ?>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</a>
				<ul>
					<li><a href="<?php echo APP_PATH;?>index.php"><img style="width:0.37rem;margin-top:0.21rem" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/login_home.png" alt=""></a></li>
					<li><a class="menu-btn"><img style="width:0.33rem;margin-top:0.26rem" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/per_more.png" alt=""></a></li>
				</ul>
			</nav>
			<form action="<?php echo APP_PATH;?>index.php?m=content&c=index&a=search_list" method="post">
			<div class="header-search">
				<input type="text" placeholder="搜索" name="key">
				<!--<i></i>-->
				<input style="display: block;
    position: absolute;
    top: 50%;
    left: 0.2rem;
    width: 0.7rem;
    height: 0.66rem;
    background: url(<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/interview_article_search.png) 0.3rem center no-repeat;
    background-size: 0.31rem;
    margin-top: -0.33rem;border-radius:none;border:none;" type="submit" value=""/>
			</div>
			</form>
			
		</header>