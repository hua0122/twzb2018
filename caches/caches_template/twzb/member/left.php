<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="re_user_all" style="margin-right:20px;">
					<h5>全部功能</h5>
					<div class="itembox">
						<div class="item">
							<span>个人资料</span>
							<ul class="active">
								<li><a href="index.php?m=member&c=index&a=account_manage_info&t=1" <?php if(ROUTE_A=="account_manage_info") { ?> class="active"<?php } ?>>编辑信息</a></li>
								<li><a href="index.php?m=member&c=index&a=account_manage_password&t=1" <?php if(ROUTE_A=="account_manage_password") { ?> class="active"<?php } ?>>修改密码</a></li>
								<li><a href="index.php?m=member&c=index&a=account_manage_avatar&t=1" <?php if(ROUTE_A=="account_manage_avatar") { ?> class="active"<?php } ?>>编辑头像</a></li>
							</ul>
						</div>
						<div class="item">
							<span>我的收藏</span>
							<ul class="active">
								<li><a href="index.php?m=member&c=index&a=favorite&t=2" <?php if(ROUTE_A=="favorite") { ?> class="active"<?php } ?>>收藏列表</a></li>
								
							</ul>
						</div>
						<div class="item">
							<span >我的订阅</span>
							<ul class="active">
								<li ><a href="index.php?m=content&c=rss&a=rsslist&siteid=1" <?php if(ROUTE_A=="rsslist" ) { ?> class="active"<?php } ?>>订阅列表</a></li>
								<li ><a href="index.php?m=content&c=rss&siteid=1" <?php if(ROUTE_C=="rss" && ROUTE_A!="rsslist") { ?> class="active"<?php } ?>>订阅管理</a></li>
								
							</ul>
						</div>
						<div class="item">
							<span>我的评论</span>
							<ul class="active">
								<li><a href="index.php?m=member&c=index&a=commentlist" <?php if(ROUTE_A=="commentlist" ) { ?> class="active"<?php } ?>>评论列表</a></li>
							
							</ul>
						</div>
						<div class="item">
							<span>投诉/建议</span>
							<ul class="active">
								<li><a href="index.php?m=member&c=index&a=tousu" <?php if(ROUTE_A=="tousu" ) { ?> class="active"<?php } ?>>提交投诉</a></li>
								
							</ul>
						</div>
						
						<?php if($memberinfo[groupid]==2) { ?>
						
						<?php } else { ?>
						<div class="item">
							<span>我的发布</span>
							<ul class="active">
								<li><a href="index.php?m=member&c=content&a=publish">在线投稿</a></li>
								<li><a href="index.php?m=member&c=content&a=published">已发布稿件</a></li>
								
							</ul>
						</div>
						<?php } ?>
						<div class="item">
							<span>系统设置</span>
							<ul class="active">
								<li><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout">退出登录</a></li>
							</ul>
						</div>
					</div>
				</div>






<!--
<div class="col-left col-1 left-memu">
 <h5 class="title">个人资料</h5>
  <ul>
            	<li<?php if(ROUTE_A=="account_manage_info" && ROUTE_C=="index") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_info&t=1"> 编辑信息</a></li>
                <li<?php if(ROUTE_A=="account_manage_avatar" && ROUTE_C=="index") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_avatar&t=1">编辑头像</a></li>
                <li<?php if(ROUTE_A=="account_manage_password" && ROUTE_C=="index") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_password&t=1">修改密码</a></li>

      </ul>
	  <h6 class="title">我的收藏</h6>
		<ul>
		<li<?php if(ROUTE_A=="favorite" && ROUTE_C=="index") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=favorite&t=2"> 收藏列表</a></li>
                
		 </ul>
		 
		 <h6 class="title">我的订阅</h6>
		<ul>
		<li<?php if(ROUTE_C=="rss") { ?> class="on"<?php } ?>><a href="index.php?m=content&c=rss&siteid=1"> 订阅列表</a></li>
                
		 </ul>
		 
		 <h6 class="title">我的评论</h6>
		<ul>
		<li<?php if(ROUTE_A=="favorite" && ROUTE_C=="index") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=favorite&t=2"> 评论列表</a></li>
                
		 </ul>
		 <h6 class="title">投诉/建议</h6>
		<ul>
		<li<?php if(ROUTE_A=="favorite" && ROUTE_C=="index") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=favorite&t=2"> 投诉列表</a></li>
                
		 </ul>
		 <!--
		 <h6 class="title">车友会(卡车用户)</h6>
		<ul>
		    <li<?php if(ROUTE_A=="published") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=content&a=published"> 故事列表</a></li>
            <li<?php if(ROUTE_A=="publish") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=content&a=publish"> 发布故事</a></li>
         
		 </ul>
		 
<?php if($memberinfo[groupid]==2) { ?><?php } else { ?>
        	<h6 class="title">我的发布</h6>
            <ul>
       	    <li <?php if(ROUTE_A=="publish") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=content&a=publish"> <?php echo L('online_publish');?></a></li>
            <li <?php if(ROUTE_A=="published") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=content&a=published"> <?php echo L('published_content');?></a></li>
            </ul>
<?php } ?>	
		
<h6 class="title">系统设置</h6>
 <ul>
 <li><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout">退出登录</a></li>
 </ul>
			
            <?php if(module_exists('pay')) { ?>
<h6 class="title"><?php echo L('financial_management');?></h6>
            <ul>
            	<li<?php if(ROUTE_A=="pay" && ROUTE_C=="deposit") { ?> class="on"<?php } ?>><a href="index.php?m=pay&c=deposit&a=pay"><img src="<?php echo IMG_PATH;?>icon/m_4.png" width="15" height="16" /> <?php echo L('online_charge');?></a></li>
                <li<?php if(ROUTE_A!="pay" && ROUTE_C=="deposit") { ?> class="on"<?php } ?>><a href="index.php?m=pay&c=deposit&a=init"><img src="<?php echo IMG_PATH;?>icon/m_8.png" width="16" height="16" /> <?php echo L('pay_log');?></a></li>
                <li<?php if(ROUTE_A!="pay" && ROUTE_C=="spend_list") { ?> class="on"<?php } ?>><a href="index.php?m=pay&c=spend_list&a=init"><img src="<?php echo IMG_PATH;?>icon/table-information.png" width="16" height="16" /> <?php echo L('cost_log');?></a></li>
				<li<?php if(ROUTE_A=="change_credit") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=change_credit"><img src="<?php echo IMG_PATH;?>icon/coins_add.png" width="16" height="16" /> <?php echo L('credit_change');?></a></li>
      </ul>
      <?php } ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"message\" data=\"op=message&tag_md5=6148979e8152595f69c4eb2d2a5ebab7&action=check_new\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$message_tag = pc_base::load_app_class("message_tag", "message");if (method_exists($message_tag, 'check_new')) {$data = $message_tag->check_new(array('limit'=>'20',));}?>
<?php $new_arr = $data;?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      <h6 class="title"><?php echo L('message');?></h6>
          <ul>
           	  <li<?php if(ROUTE_A=="send") { ?> class="on"<?php } ?>><a href="index.php?m=message&c=index&a=send"><img src="<?php echo IMG_PATH;?>icon/m_9.png" width="16" height="14" /> <?php echo L('send_message');?></a></li>
           	  <li<?php if(ROUTE_A=="inbox") { ?> class="on"<?php } ?>><a href="index.php?m=message&c=index&a=inbox"><img src="<?php echo IMG_PATH;?>icon/m_11.png" width="16" height="16" /> <?php echo L('input_box');?><?php if($new_arr['new_count'] >0) { ?><font color=red>(<?php echo $new_arr['new_count'];?>)</font><?php } ?></a></li>
              <li<?php if(ROUTE_A=="outbox") { ?> class="on"<?php } ?>><a href="index.php?m=message&c=index&a=outbox"><img src="<?php echo IMG_PATH;?>icon/m_10.png" width="16" height="16" /> <?php echo L('output_box');?></a></li>
			   <li<?php if(ROUTE_A=="group") { ?> class="on"<?php } ?>><a href="index.php?m=message&c=index&a=group"><img src="<?php echo IMG_PATH;?>icon/lightbulb.png" width="16" height="16" /> <?php echo L('system_message');?><?php if($new_arr['new_group_count'] >0) { ?><font color=red>(<?php echo $new_arr['new_group_count'];?>)</font><?php } ?></a></li>
          </ul>
      <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
</div>-->