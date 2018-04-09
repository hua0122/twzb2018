<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div id="menu-switch">
		<div class="menu-title">
			<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/nav_del.png" alt="">
		</div>
		<ul>
			<li>
				<a href="<?php echo APP_PATH;?>index.php">
					<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/nav_home.png" alt="">
					<p>首页</p>
				</a>
			</li>
			
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8248b6e14f55ae7ab7445fed168915d&action=category&catid=0&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li>
						<a href="<?php echo $r['url'];?>">
							<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/nav_<?php echo $n;?>.png" alt="<?php echo $r['catname'];?>">
							<p><?php echo $r['catname'];?></p>
						</a>
					</li>
						<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
					<li>
						<a href="<?php echo APP_PATH;?>index.php?m=member">
							<img src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/nav_grzx.png" alt="个人中心">
							<p>个人中心</p>
						</a>
					</li>
					
		
		</ul>
	</div>
	
	</body>
</html>