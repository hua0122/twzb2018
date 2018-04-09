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
	<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/css/mui.min.css">
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

		<header class="another-style" style="height: 1.94rem">
			<nav style="margin-bottom: 0.22rem;">
				<div class="nav-left">
					<a href="<?php echo APP_PATH;?>index.php">
						<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/home_focus.png" alt="">
						<p>首页</p>
					</a>
				</div>
				<div class="nav-right">
				<a href="<?php echo $CATEGORYS['15']['url'];?>">
						<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/club_article.png" alt="<?php echo $r['catname'];?>">
						<p>车友</p>
					</a>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=99918918ae1342ea6ac5126ec7ae3cd9&action=category&catid=15&num=2&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'15','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'2',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<a href="<?php echo $r['url'];?>">
						<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/club_<?php echo $n;?>.png" alt="<?php echo $r['catname'];?>">
						<p><?php echo $r['catname'];?></p>
					</a>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
					
					
				</div>
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