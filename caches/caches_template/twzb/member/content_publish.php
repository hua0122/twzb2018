<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?>
<script type="text/javascript">
<!--
	var charset = '<?php echo CHARSET;?>';
	var uploadurl = '<?php echo pc_base::load_config('system','upload_url')?>';
//-->
</script>
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>content_addtop.js"></script>
<div id="memberArea">
	<?php include template('member', 'left'); ?>
	<div class="col-auto">
		<div class="col-1 ">
			<h5 class="title"><?php echo L('online_publish');?></h5>
			<div class="content">
				
			<form method="post" action="" id="myform" name="myform">
				<table width="100%" cellspacing="0" class="table_form">
				<?php if(ROUTE_A=='publish') { ?>
				<script language="JavaScript">
				<!--
					function c_c(catid) {
						location.href='index.php?m=member&c=content&a=publish&siteid=<?php echo $siteid;?>&catid='+catid;
					}
				//-->
				</script>
					<tr>
						<th><?php echo L('please_select_cat');?>：</th>
						<td><?php echo form::select_category('', $catid, 'name="info[catid]" onchange="javascript:c_c(this.value);"','','',0,1,$siteid,'1');?></td>
					</tr>
				<?php } ?>
					<?php $n=1; if(is_array($forminfos)) foreach($forminfos AS $k => $v) { ?>
					<tr>
						<th width="100"><?php if($v['star']) { ?> <font color="red">*</font><?php } ?> <?php echo $v['name'];?>：</th> 
						<td><?php echo $v['form'];?><?php if($v['tips']) { ?><?php echo $v['tips'];?><?php } ?></td>
					</tr>
					<?php $n++;}unset($n); ?>
					<tr>
						<th></th>
						<td>
						<input name="forward" type="hidden" value="<?php echo HTTP_REFERER;?>">
						<input name="id" type="hidden" value="<?php echo $id;?>">
						<input name="dosubmit" type="submit" id="dosubmit" value="<?php echo L('submit');?>" class="button"></td>
					</tr>
				</table>
			</form>

			</div>
			<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
		</div>
	</div>
</div>
<div class="clear"></div>
<script type="text/javascript"> 
<!--
//只能放到最下面
$(function(){
	$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, 	function(){$(obj).focus();
	boxid = $(obj).attr('id');
	if($('#'+boxid).attr('boxid')!=undefined) {
		check_content(boxid);
	}
	})}});
	<?php echo $formValidator;?>
})
//-->
</script>
<?php include template('member', 'footer'); ?>