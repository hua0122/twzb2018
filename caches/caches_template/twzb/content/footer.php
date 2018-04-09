<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer">
			<div class="container cont">
				<div class="copyright">
					<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=36d05c24973c5a5e7b7eabfa57085a3e&action=category&catid=32&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'32','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>" style="color:#fff;"><?php echo $r['catname'];?></a></li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						
					</ul>
					
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7b6893bdbb2b59970b80e75decea9d3c&sql=SELECT+%2A+FROM+newt_page+WHERE+catid%3D4&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_page WHERE catid=4 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
					 <?php echo $val['content'];?>
					 <?php $n++;}unset($n); ?>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="ewm">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2d77adf158771da472060cc164eea51a&sql=SELECT+%2A+FROM+newt_page+WHERE+catid%3D5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM newt_page WHERE catid=5 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
					 <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
					 <?php echo $val['content'];?>
					 <?php $n++;}unset($n); ?>
					 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
		</div>
		
		
			</div>
	
	<style>
	#club_detail .per_infor .copyfrom a{border:none;display: inherit;}
	.xuanfukuang{position: fixed;top:50%;right:0px;border:1px solid #ccc;}
	.xuanfukuang .jiaru{text-align:center;margin-bottom:10px;border-bottom:1px solid #ccc;padding:10px;}
	</style>
	<!--右侧悬浮返回顶部-->
	<div class="xuanfukuang">
		<div class="jiaru">
			<a href="<?php echo $CATEGORYS['77']['url'];?>">
				<img src="<?php echo APP_PATH;?>images/buy-car.jpg" />
				<p style="font-size:14px;">我要买车</p>
			</a>

		</div>

		<div class="jiaru">
			<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login"> 
				<img src="<?php echo APP_PATH;?>images/join.jpg" />
				<p style="font-size:14px;">加入车友会</p>
			</a>
		
		</div>
		
		<div class="jiaru">
			<a href="<?php echo $CATEGORYS['8']['url'];?>"> 
				<img src="<?php echo APP_PATH;?>images/twzb.jpg" />
				<p style="font-size:14px;">图文直播</p>
			</a>
		
		</div>
		
		<div class="jiaru" style="border-bottom:none;">
			<a href="#"> 
				<img src="<?php echo APP_PATH;?>images/fanhui.jpg" />
				<p style="font-size:14px;">返回顶部</p>
			</a>
		
		</div>
		
		
	</div>
	
</body>
</html>