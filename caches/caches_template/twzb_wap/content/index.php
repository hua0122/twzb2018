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
<body style="overflow-x: hidden;">
	<div id="home">
		<header>
			<a href="<?php echo APP_PATH;?>index.php" class="header-logo">
			
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=50692c0cc7fe63c7fc5c58bd38d035a6&sql=SELECT+%2A+FROM+newt_page+WHERE+catid%3D2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_page WHERE catid=2 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
					 <?php echo $val['content'];?>
					 <?php $n++;}unset($n); ?>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</a>
			<ul>
				<li><a href="<?php echo APP_PATH;?>index.php?m=member"><img style="width:0.26rem;margin-top:0.22rem" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/per_per.png" alt=""></a></li>
				<li><a class="menu-btn"><img style="width:0.33rem;margin-top:0.26rem" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/per_more.png" alt=""></a></li>
			</ul>
		</header>
		<section class="another-style" style="padding-top:0.82rem;padding-bottom: 0.91rem;overflow:hidden;">
			<div class="mui-slider banner-box">
			    <div class="mui-slider-group mui-slider-loop">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aff984f04b033a3d712165b840c1211d&action=lists&catid=38&num=1&start=1&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'38','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'1,1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="mui-slider-item mui-slider-item-duplicate" ><a <?php if($r[islink]) { ?>href="<?php echo $r['url'];?>"<?php } ?>><img src="<?php echo $r['thumb'];?>" title="<?php echo $r['title'];?>"/></a></div>
								<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c82539076107d158697d43b90c8ae6f&action=lists&catid=38&num=2&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'38','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'2',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="mui-slider-item" ><a <?php if($r[islink]) { ?>href="<?php echo $r['url'];?>"<?php } ?>><img src="<?php echo $r['thumb'];?>" title="<?php echo $r['title'];?>"/></a></div>
								<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=15ec6b6b546fd270bfaa9ec308c6a267&action=lists&catid=38&num=1&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'38','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'1',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="mui-slider-item mui-slider-item-duplicate" ><a <?php if($r[islink]) { ?>href="<?php echo $r['url'];?>"<?php } ?>><img src="<?php echo $r['thumb'];?>" title="<?php echo $r['title'];?>"/></a></div>
								<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
				
				</div>
			    <div class="mui-slider-indicator">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c82539076107d158697d43b90c8ae6f&action=lists&catid=38&num=2&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'38','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'2',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				 	<div <?php if($n==1) { ?>class="mui-indicator mui-active" <?php } else { ?> class="mui-indicator" <?php } ?> ></div>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
			    </div>
			</div>
			<form action="<?php echo APP_PATH;?>index.php?m=content&c=index&a=search_list" method="post">
			<div class="header-search">
				<input type="text" placeholder="搜索卡车要闻" name="key">
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
			<div class="menu-item">
				<ul>
				<!--
					<li>
						<a href="<?php echo APP_PATH;?>index.php">
							<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/nav_home.png" alt="首页">
							<p>首页</p>
						</a>
					</li>
				-->	
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=522dcf79f84779c8c187ca374072cc0d&action=category&catid=0&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li>
						<a href="<?php echo $r['url'];?>">
							<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/nav_<?php echo $n;?>.png" alt="<?php echo $r['catname'];?>">
							<p><?php echo $r['catname'];?></p>
						</a>
					</li>
						<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!--
					<li>
						<a href="<?php echo APP_PATH;?>index.php?m=member">
							<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/nav_grzx.png" alt="个人中心">
							<p>个人中心</p>
						</a>
					</li>
				-->
				
				</ul>
			</div>
			<div class="news-latest">
				<h3>最新动态</h3>
				<div class="prompt-box">
					<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a3aafdc496e6a4ab43129ed76fb4c015&action=lists&catid=6&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
								<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</ul>
				</div>
			</div>
			<div class="news-information parent-item">
				<nav>
					<h4>新闻</h4>
					<div class="nav-inner" style="text-align: right;">
						<ul>
						
						
							<li class="active"><a><?php echo $CATEGORYS['47']['catname'];?></a></li>
							<li><a><?php echo $CATEGORYS['6']['catname'];?></a></li>
							<li><a><?php echo $CATEGORYS['43']['catname'];?></a></li>
							<li><a><?php echo $CATEGORYS['62']['catname'];?></a></li>
							
							
						</ul>
					</div>
				</nav>
				<div class="item">
				
					<dl class="per-item">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2ad05894e4ba23167dd06045cd2f7b21&action=lists&catid=47&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'47','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
						<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r1[id])); $views = $_r[views]; ?>
						<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
						<?php list($copyfrom) = explode('|', $r1['copyfrom'])?>		
						<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r1[catid],'id'=>$r1[id])); ?>
						
						<?php $mdb = pc_base::load_model('member_model'); $_mr = $mdb->get_one(array('username'=>$r1[username])); $userid = $_mr[userid];?>
														
						<dd>
							<a href="<?php echo $r1['url'];?>">
								<img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>">
								<div class="news-desc">
									<h5><?php echo $r1['title'];?></h5>
									<div class="time-seen">
										<span class="time">  <?php echo date("m-d",$r1[inputtime]);?> <?php echo date("H:i",$r1[inputtime]);?></span>
										<span class="seen"><?php echo $views;?></span>
										<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
									</div>
									<div class="author-from">
										<?php if($userid) { ?><span class="author"> 作者：<?php echo $r1['username'];?></span><?php } ?>
										<span class="from"> 来源：<?php if($copyfrom) { ?> <?php echo $copyfrom;?> <?php } else { ?> 环球商用车 <?php } ?></span>
									</div>
									<div class="tags">
									
									<?php  
									if($pos) 
									foreach($pos as $v){ 
									if($v[posid]==1)
									{echo "<div class='yc'>原创</div>";}
									elseif($v[posid]==2)
									{echo "<div class='tt'>头条</div>";}
									else{echo "<div class='hot'>热门</div>";} 
									};?>
										
									</div>
								</div>
							</a>
						</dd>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
						
					</dl>
					
					<dl class="per-item">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a3aafdc496e6a4ab43129ed76fb4c015&action=lists&catid=6&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
						<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r1[id])); $views = $_r[views]; ?>
						<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
						<?php list($copyfrom) = explode('|', $r1['copyfrom'])?>		
						<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r1[catid],'id'=>$r1[id])); ?>
						
						<?php $mdb = pc_base::load_model('member_model'); $_mr = $mdb->get_one(array('username'=>$r1[username])); $userid = $_mr[userid];?>
														
						<dd>
							<a href="<?php echo $r1['url'];?>">
								<img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>">
								<div class="news-desc">
									<h5><?php echo $r1['title'];?></h5>
									<div class="time-seen">
										<span class="time">  <?php echo date("m-d",$r1[inputtime]);?> <?php echo date("H:i",$r1[inputtime]);?></span>
										<span class="seen"><?php echo $views;?></span>
										<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
									</div>
									<div class="author-from">
										<?php if($userid) { ?><span class="author"> 作者：<?php echo $r1['username'];?></span><?php } ?>
										<span class="from"> 来源：<?php if($copyfrom) { ?> <?php echo $copyfrom;?> <?php } else { ?> 环球商用车 <?php } ?></span>
									</div>
									<div class="tags">
									
									<?php  
									if($pos) 
									foreach($pos as $v){ 
									if($v[posid]==1)
									{echo "<div class='yc'>原创</div>";}
									elseif($v[posid]==2)
									{echo "<div class='tt'>头条</div>";}
									else{echo "<div class='hot'>热门</div>";} 
									};?>
										
									</div>
								</div>
							</a>
						</dd>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
						
					</dl>
					
					<dl class="per-item">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=57e7b63a36213f37d6bb19899ec6fe3f&action=lists&catid=43&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'43','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
						<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r1[id])); $views = $_r[views]; ?>
						<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
						<?php list($copyfrom) = explode('|', $r1['copyfrom'])?>		
						<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r1[catid],'id'=>$r1[id])); ?>
						
						<?php $mdb = pc_base::load_model('member_model'); $_mr = $mdb->get_one(array('username'=>$r1[username])); $userid = $_mr[userid];?>
														
						<dd>
							<a href="<?php echo $r1['url'];?>">
								<img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>">
								<div class="news-desc">
									<h5><?php echo $r1['title'];?></h5>
									<div class="time-seen">
										<span class="time">  <?php echo date("m-d",$r1[inputtime]);?> <?php echo date("H:i",$r1[inputtime]);?></span>
										<span class="seen"><?php echo $views;?></span>
										<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
									</div>
									<div class="author-from">
										<?php if($userid) { ?><span class="author"> 作者：<?php echo $r1['username'];?></span><?php } ?>
										<span class="from"> 来源：<?php if($copyfrom) { ?> <?php echo $copyfrom;?> <?php } else { ?> 环球商用车 <?php } ?></span>
									</div>
									<div class="tags">
									
									<?php  
									if($pos) 
									foreach($pos as $v){ 
									if($v[posid]==1)
									{echo "<div class='yc'>原创</div>";}
									elseif($v[posid]==2)
									{echo "<div class='tt'>头条</div>";}
									else{echo "<div class='hot'>热门</div>";} 
									};?>
										
									</div>
								</div>
							</a>
						</dd>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
						
					</dl>
					
					<dl class="per-item">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3f57acc11ff2a9465fb54c7db207eed3&action=lists&catid=62&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'62','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
						<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r1[id])); $views = $_r[views]; ?>
						<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r1[catid].'-'.$r1[id].'-1'));?>
						<?php list($copyfrom) = explode('|', $r1['copyfrom'])?>		
						<?php $posdb = pc_base::load_model('position_data_model'); $pos = $posdb->get_all(array('catid'=>$r1[catid],'id'=>$r1[id])); ?>
						
						<?php $mdb = pc_base::load_model('member_model'); $_mr = $mdb->get_one(array('username'=>$r1[username])); $userid = $_mr[userid];?>
														
						<dd>
							<a href="<?php echo $r1['url'];?>">
								<img src="<?php echo $r1['thumb'];?>" alt="<?php echo $r1['title'];?>">
								<div class="news-desc">
									<h5><?php echo $r1['title'];?></h5>
									<div class="time-seen">
										<span class="time">  <?php echo date("m-d",$r1[inputtime]);?> <?php echo date("H:i",$r1[inputtime]);?></span>
										<span class="seen"><?php echo $views;?></span>
										<span class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
									</div>
									<div class="author-from">
										<?php if($userid) { ?><span class="author"> 作者：<?php echo $r1['username'];?></span><?php } ?>
										<span class="from"> 来源：<?php if($copyfrom) { ?> <?php echo $copyfrom;?> <?php } else { ?> 环球商用车 <?php } ?></span>
									</div>
									<div class="tags">
									
									<?php  
									if($pos) 
									foreach($pos as $v){ 
									if($v[posid]==1)
									{echo "<div class='yc'>原创</div>";}
									elseif($v[posid]==2)
									{echo "<div class='tt'>头条</div>";}
									else{echo "<div class='hot'>热门</div>";} 
									};?>
										
									</div>
								</div>
							</a>
						</dd>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
						
					</dl>
					
							
				
				
				</div>
			</div>
			<div class="interview parent-item">
				<nav>
					<h4>一线调查</h4>
					<div class="nav-inner">
						<ul>
							<li class="active">
								<a>卡车一线</a>
							</li>
							<li>
								<a>客车一线</a>
							</li>
						</ul>
					</div>
					<a href="<?php echo $CATEGORYS['7']['url'];?>" class="more">更多</a>
				</nav>
				<div class="interview-detail">
					<div class="mui-slider per-item">
					    <div class="mui-slider-group">
						    <div class="mui-slider-item">
								<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=837a80be5eb72d649be1730f219c2c47&action=lists&catid=16&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<p><?php echo $r['title'];?></p>
										</a>
									</li>
									
											<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
						    </div>
							
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7ab5198c04bb9d82684296401f8d97c8&action=lists&catid=16&num=4&start=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4,4',));}?>
									<?php if($data) { ?>
						    <div class="mui-slider-item">
								<ul>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<p><?php echo $r['title'];?></p>
										</a>
									</li>
									<?php $n++;}unset($n); ?>
								
									
								</ul>
						    </div>
								<?php } ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0b7794d22279f0b9b4ebe833b7719767&action=lists&catid=16&num=4&start=8&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'8,4',));}?>
									<?php if($data) { ?>
						    <div class="mui-slider-item">
								<ul>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<p><?php echo $r['title'];?></p>
										</a>
									</li>
									<?php $n++;}unset($n); ?>
								
									
								</ul>
						    </div>
							<?php } ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					   	</div>
					 	<div class="mui-slider-indicator">
						 	<div class="mui-indicator mui-active"></div>
							<div class="mui-indicator"></div>
							<div class="mui-indicator"></div>
					    </div>
					</div>
					<div class="mui-slider per-item">
					    <div class="mui-slider-group">
						    <div class="mui-slider-item">
								<ul>
									<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e6eb8cf84f60cdacc0e3f2cd0aae787b&action=lists&catid=14&num=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4',));}?>
											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<p><?php echo $r['title'];?></p>
										</a>
									</li>
									
											<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								</ul>
						    </div>
						    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5d3098790879ea75337e44aecca02ab7&action=lists&catid=14&num=4&start=4&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'4,4',));}?>
									<?php if($data) { ?>
						    <div class="mui-slider-item">
								<ul>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<p><?php echo $r['title'];?></p>
										</a>
									</li>
									<?php $n++;}unset($n); ?>
								
									
								</ul>
						    </div>
							<?php } ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
							 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59180b91b5fd503f5700446e7c1751fa&action=lists&catid=14&num=4&start=8&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'8,4',));}?>
									<?php if($data) { ?>
						    <div class="mui-slider-item">
								<ul>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>
										<a href="<?php echo $r['url'];?>">
											<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
											<p><?php echo $r['title'];?></p>
										</a>
									</li>
									<?php $n++;}unset($n); ?>
								
									
								</ul>
						    </div>
							<?php } ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					   	</div>
					 	<div class="mui-slider-indicator">
						 	<div class="mui-indicator mui-active"></div>
							<div class="mui-indicator"></div>
							<div class="mui-indicator"></div>
					    </div>
					</div>
				</div>
			</div>
			<div class="video parent-item">
				<nav>
					<h4>视频播报</h4>
					<div class="nav-inner">
						<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f09ab5936b1c4d67d3acf29946769178&action=category&catid=9&num=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'3',));}?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li <?php if($n==1) { ?> class="active" <?php } ?>><?php echo $r['catname'];?></li>
									<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
						</ul>
					</div>
					<a href="<?php echo $CATEGORYS['9']['url'];?>" class="more">更多</a>
				</nav>
				<div class="video-detail">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f09ab5936b1c4d67d3acf29946769178&action=category&catid=9&num=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'3',));}?>
									<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div class="video-item per-item">
						<dl>
						
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6106dd00f94aafb0219f710634af1a8c&action=lists&catid=%24r%5Bcatid%5D&num=6&siteid=%24siteid&order=inputtime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'inputtime desc','limit'=>'6',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-1-'.$r[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$r[catid].'-'.$r[id].'-1'));?>
								<?php list($copyfrom) = explode('|', $r['copyfrom'])?>
								
										
							<dd>	
								<a href="<?php echo $r['url'];?>">
									<div class="video-infor">
										<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
										<i></i>
										<div class="infor-desc">
											
											<!--<div class="author-from">
												<span class="author"> 作者：<?php echo $r['username'];?></span>
												<span class="from"> 来源：<?php echo $copyfrom;?></span>
											</div>-->
											<h5 style="color:#fff;"><?php echo $r['title'];?></h5>
										</div>
									
										
									
									</div>
									<div class="time-seen" style="color:#3c4f60">
													<span class="time">发布时间：<?php echo date("m-d",$r[inputtime]);?> <?php echo date("H:i",$r[inputtime]);?><br/></span>
													<span class="seen">浏览：<?php echo $views;?> &nbsp;&nbsp;&nbsp;</span>
													<span class="repeat">评论：<?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></span>
									</div>
								</a>
							</dd>
							<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							
							
						</dl>
						
					</div>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
		</section>
	
<?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','footer',$default_style."_wap");
?>
	
	
	<script type="text/javascript" src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/js/mui.min.js"></script>
	<script type="text/javascript">
		CommonFun.init();
		$(function(){
			var caverling = {
				init:function(){
					this.navSwitch();
					this.promptLoop();
					this.bannerInit();
				},
				navSwitch:function(){
					$("#home section nav li").on("click",function(){
						$(this).parents("nav").find("li").removeClass("active");
						$(this).addClass("active");
						var index = $(this).index();
						$(this).parents(".parent-item").find(".per-item").hide();
						$(this).parents(".parent-item").find(".per-item").eq(index).show();
					})
				},
				promptLoop:function(){
					var $liArr = $("#home .news-latest .prompt-box ul li");
					if($liArr.length > 1){
						setInterval(function(){
							$("#home .news-latest .prompt-box ul").animate({"margin-top":'-0.6rem'},1000,function(){
								var $first = $("#home .news-latest .prompt-box ul li").first();
								var $last = $("#home .news-latest .prompt-box ul li").last();
								$first.insertAfter($last);
								$("#home .news-latest .prompt-box ul").css({'margin-top':0});
							});
						},4000);
					}
				},
				bannerInit:function(){
					mui('.banner-box').slider({
					  interval:5000//自动轮播周期，若为0则不自动播放，默认为0；
					});
				}
			}
			caverling.init();

		})

	</script>

	