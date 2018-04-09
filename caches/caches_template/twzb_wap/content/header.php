<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-Type" content="text/html;charset=utf-8">
	<meta name="description" content="环球商用车">
	<meta name="keywords" content="环球商用车">
	<meta name="author" content="环球商用车">
	<meta name="copyright" content="环球商用车">
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
<header>
			<a href="<?php echo APP_PATH;?>index.php" class="header-logo">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=50692c0cc7fe63c7fc5c58bd38d035a6&sql=SELECT+%2A+FROM+newt_page+WHERE+catid%3D2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_page WHERE catid=2 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
					 <?php echo $val['content'];?>
					 <?php $n++;}unset($n); ?>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</a>
			<ul>
			<?php $uid=param::get_cookie('_userid');?>
			<?php if($uid) { ?>
				<li><a href="<?php echo APP_PATH;?>index.php?m=member"><img style="width:0.26rem;margin-top:0.22rem" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/per_per.png" alt=""></a></li>
			<?php } else { ?>
				<li><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login"><img style="width:0.26rem;margin-top:0.22rem" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/per_per.png" alt=""></a></li>
			<?php } ?>
				<li><a class="menu-btn"><img style="width:0.33rem;margin-top:0.26rem" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/per_more.png" alt=""></a></li>
			</ul>
		</header>