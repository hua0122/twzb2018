<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?>
<div id="memberArea">
	<?php include template('member', 'left'); ?>
	<div class="col-auto">
		<div class="col-1 ">
			<h5 class="title"><?php echo L('modify').L('email');?>/<?php echo L('password');?></h5>
			<div class="content">
			<form method="post" action="" id="myform" name="myform">
				<table width="100%" cellspacing="0" class="table_form">
					<tr>
						<th width="80"><?php echo L('email');?>：</th>        
						<td><input name="info[email]" type="text" id="email" size="30" value="<?php echo $memberinfo['email'];?>" class="input-text"></td>
					</tr>
					<tr>
						<th width="80"><?php echo L('old_password');?>：</th>        
						<td><input name="info[password]" type="password" id="password" size="30" value="" class="input-text"></td>
					</tr>
					<tr>
						<th><?php echo L('new_password');?>：</th>
						<td><input name="info[newpassword]" type="password" id="newpassword" size="30" value="" class="input-text"></td>
					</tr>
					<tr>
						<th><?php echo L('re_input').L('new_password');?>：</th>
						<td><input name="info[renewpassword]" type="password" id="renewpassword" size="30" value="" class="input-text"></td>
					</tr>
					<tr>
						<th></th>
						<td><input name="dosubmit" type="submit" id="dosubmit" value="<?php echo L('submit');?>" class="button"></td>
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
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#password").formValidator({onshow:"<?php echo L('input').L('password');?>",onfocus:"<?php echo L('password').L('between_6_to_20');?>"}).inputValidator({min:6,max:20,onerror:"<?php echo L('password').L('between_6_to_20');?>"});
	$("#newpassword").formValidator({onshow:"<?php echo L('input').L('password');?>",onfocus:"<?php echo L('password').L('between_6_to_20');?>"}).inputValidator({min:6,max:20,onerror:"<?php echo L('password').L('between_6_to_20');?>"}).regexValidator({regexp:"password",datatype:"enum",onerror:"密码只能是数字,字母 和 -_()等字符"});
	$("#renewpassword").formValidator({onshow:"<?php echo L('input').L('cofirmpwd');?>",onfocus:"<?php echo L('input').L('passwords_not_match');?>",oncorrect:"<?php echo L('passwords_match');?>"}).compareValidator({desid:"newpassword",operateor:"=",onerror:"<?php echo L('input').L('passwords_not_match');?>"});	
	$("#email").formValidator({onshow:"<?php echo L('input').L('email');?>",onfocus:"<?php echo L('email').L('format_incorrect');?>",oncorrect:"<?php echo L('email').L('format_right');?>"}).inputValidator({min:2,max:32,onerror:"<?php echo L('email').L('between_2_to_32');?>"}).regexValidator({regexp:"email",datatype:"enum",onerror:"<?php echo L('email').L('format_incorrect');?>"}).ajaxValidator({
	    type : "get",
		url : "",
		data :"m=member&c=index&a=public_checkemail_ajax",
		datatype : "html",
		async:'false',
		success : function(data){	
            if( data == "1" ) {
                return true;
			} else {
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "<?php echo L('deny_register').L('or').L('email_already_exist');?>",
		onwait : "<?php echo L('connecting_please_wait');?>"
	}).defaultPassed();
})
//-->
</script>
<?php include template('member', 'footer'); ?>