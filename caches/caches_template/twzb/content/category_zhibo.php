<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script type="text/javascript">
    // borwserRedirect
    (function browserRedirect(){
      var sUserAgent = navigator.userAgent.toLowerCase();
      var bIsIpad = sUserAgent.match(/ipad/i) == 'ipad';
      var bIsIphone = sUserAgent.match(/iphone os/i) == 'iphone os';
      var bIsMidp = sUserAgent.match(/midp/i) == 'midp';
      var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == 'rv:1.2.3.4';
      var bIsUc = sUserAgent.match(/ucweb/i) == 'web';
      var bIsCE = sUserAgent.match(/windows ce/i) == 'windows ce';
      var bIsWM = sUserAgent.match(/windows mobile/i) == 'windows mobile';
      var bIsAndroid = sUserAgent.match(/android/i) == 'android';

      if(bIsIpad || bIsIphone || bIsMidp || bIsUc7 || bIsUc || bIsCE || bIsWM || bIsAndroid ){
        window.location.href = '<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>';
      }
    })();
 </script>
<?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo APP_PATH;?>depend/videoCT.css">
	

<div id="teletext">
		<div class="section">
			<div class="container sec_cont" >
				<div class="menu">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c2cd9ad4c77737316047e82b075c6e9&action=category&catid=8&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'8','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div <?php if($catid==$r[catid]) { ?> class="active" <?php } ?> ><a href="<?php echo $r['url'];?>" ><?php echo $r['catname'];?></a></div>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
				</div>
				<div class="tw-desc" style="min-height:500px;">
					<div class="desc-big">
					<?php if($catid==8) { ?>
					<?php $catid=17?>
					<?php } ?>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=12d8a91234fdc92ed231827404bde820&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D+%24catid+group+by+title+order+by+inputtime+desc&num=2&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid = $catid group by title order by inputtime desc LIMIT 2");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								
						<div class="big-item" <?php if($n==1) { ?>style="margin-right:20px;"<?php } ?> <?php if($n==2) { ?>style="margin-left:0px;"<?php } ?>>
							<a href="<?php echo $r['url'];?>">
								<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>">
								<div class="item-infor"><p><?php echo $r['title'];?></p></div>
							</a>
						</div>
								<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</div>
					
					<div class="desc-center">
						<div class="center-left">
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5ff6956efbfb901631e7727d1a6852c8&sql=SELECT+%2A+FROM+newt_zhibo+WHERE+catid+%3D%24catid+group+by+title+order+by+inputtime+desc&num=15&page=%24page&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT * FROM newt_zhibo WHERE catid =$catid group by title order by inputtime desc) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM newt_zhibo WHERE catid =$catid group by title order by inputtime desc LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								
								<?php $db = pc_base::load_model('hits_model');   $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id])); $views = $_r[views]; ?>
								<?php $comment_tag = pc_base::load_app_class("comment_tag", "comment"); $comment_total = $comment_tag->count(array('commentid'=>'content_'.$catid.'-'.$r[id].'-'.$modelid));?>
							
								<li <?php if($n%3==0) { ?> style="margin-right:0px;"<?php } ?>>
									<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" class="infor-img" alt="<?php echo $r['title'];?>"></a>
									<div class="center-infor infor-common">
										<p><?php echo $r['title'];?></p>
										<div class="time">
											<span> <?php echo date("m-d H:i",$r[inputtime]);?></span>
											<i class="repeat"><?php if($comment_total) { ?><?php echo $comment_total;?><?php } else { ?>0<?php } ?></i>
										<i class="seen"><?php echo $views;?></i>
										</div>
									</div>
								</li>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
							</ul>
							
						</div>
						
					</div>
					
					<div class="page" id="pages">
							<?php echo $pages;?>
					</div>
					
				</div>
			</div>
		</div>
<?php include template("content","footer"); ?>
	