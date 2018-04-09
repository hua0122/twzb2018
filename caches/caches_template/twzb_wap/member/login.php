<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>图文直播 - 会员登录</title>
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>member_common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<script language="JavaScript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#username").formValidator({onshow:"<?php echo L('input').L('username');?>",onfocus:"<?php echo L('between_2_to_20');?>"}).inputValidator({min:2,max:20,onerror:"<?php echo L('between_2_to_20');?>"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"<?php echo L('username').L('format_incorrect');?>"});
	$("#password").formValidator({onshow:"<?php echo L('input').L('password');?>",onfocus:"<?php echo L('password').L('between_6_to_20');?>"}).inputValidator({min:6,max:20,onerror:"<?php echo L('password').L('between_6_to_20');?>"});

});
//-->
</script>

<link href="<?php echo CSS_PATH;?>dialog_simp.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.submit,.pass-logo a,.form-login .input label,.item span{display:inline-block;zoom:1;*display:inline;}

.log{line-height:24px; height:24px;float:right; font-size:12px}
.log span{color:#ced9e7}
.log a{color:#049;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header{ height:94px; background:url(<?php echo IMG_PATH;?>member/h.png) repeat-x}
#header .logo{ padding-right:100px;float:left;background:url(<?php echo IMG_PATH;?>member/login-logo.png) no-repeat right 2px;}
#header .content{width:920px; margin:auto; height:60px;padding:10px 0 0 0}

.form-login{ width:360px; padding-left:0px;background-color:#fff;padding-top:50px;padding-bottom:50px;margin-top:30px;}
.form-login h2{font-size:25px;color:#494949;border-bottom: 1px dashed #CCC;padding-bottom:3px; margin-bottom:10px}
.form-login .input{ padding:15px 0;padding-left:10%;}
.form-login .take{padding-left:25%;}
.form-login .input input{height:35px;}
.form-login .input label{ width:84px;font-size:14px; color:#888; text-align:right}
.take,.reg{padding:0 0 0 84px}
.take .submit{ width:200px;margin-top:40px;background:#d03b3d;color:#fff;}
.form-login .hr{background: url(<?php echo IMG_PATH;?>member/line.png) no-repeat left center; height:50px;}
.form-login .hr hr{ display:none}

.submit{}
.submit,.submit input{height:35px;cursor:hand;width:200px;padding-bottom:10px;background:#d03b3d;color:#fff;}
.submit input{background-position: right top; border:none; padding:0 10px 0 7px; font-size:14px;cursor: pointer;}
.reg{ color:#666; line-height:24px}
.reg .submit{background-position: left -35px; height:35px}
.reg .submit input{background-position: right -35px; font-weight:700; color:#fff; height:35px}

.col-1{position:relative; float:right; border:1px solid #c4d5df; zoom:1;background: url(<?php echo IMG_PATH;?>member/member_title.png) repeat-x; width:310px; margin: auto; height:304px}
.col-1 span.o1,
	.col-1 span.o2,
	.col-1 span.o3,
	.col-1 span.o4{position:absolute;width:3px;height:3px; overflow:hidden;background: url(<?php echo IMG_PATH;?>fillet.png) no-repeat}
	.col-1 span.o1{background-position: left -6px; top:-1px; left:-1px}
	.col-1 span.o2{background-position: right -6px; top:-1px; right:-1px}
	.col-1 span.o3{background-position: left -9px; bottom:-1px; left:-1px}
	.col-1 span.o4{background-position: right -9px; bottom:-1px; right:-1px;}
.col-1 .title{color:#386ea8; padding:5px 10px 3px}
.col-1 div.content{padding:0px 10px 10px}
.col-1 div.content h5{background: url(<?php echo IMG_PATH;?>member/ext-title.png) no-repeat 2px 10px; height:34px}
.col-1 div.content h5 strong{ visibility: hidden}
.pass-logo{ margin:auto; width:261px; padding-top:15px}
.pass-logo p{border-top: 1px solid #e1e4e8; padding-top:15px}
.item{padding:10px 0; vertical-align:middle; margin-bottom:10px}
.item span{ color:#8c8686}
.login-list li{ float:left;height:26px; margin-bottom:14px;width:123px;background:url(<?php echo IMG_PATH;?>member/mbg.png) no-repeat}
.login-list li a{ display:block;background-repeat:no-repeat; background-position:6px 5px;height:26px; padding-left:36px; line-height:26px}
.login-list li a:hover{text-decoration: none;}
#footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
#footer a{color:#666;}

</style>
</head>
<body>
<!--
<div id="header">
	<div class="content">
	<div class="logo"><a href="<?php echo $siteinfo['domain'];?>"><img src="<?php echo IMG_PATH;?>v9/member_logo.jpg"/></a></div>
    <span class="rt log"></span>
    </div>
</div>
-->
<?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','header',$default_style."_wap");
?>

<div class="clear"></div>
<div id="content" style="width:auto;background-color:#fff;overflow:hidden;margin-top:1rem;">
	
<div class="col-left form-login" id="logindiv" style="border:none;margin-top:0px;background-color:#fff">

<form method="post" action="" onsubmit="save_username();" id="myform" name="myform">
<input type="hidden" name="forward" id="forward" value="<?php echo $forward;?>">
		<div style="margin-left:25%;">
    	<div class="hr" style="float:left;width:50px;height:35px;margin-right:10px;"><hr /></div>
		<div style="font-size:20px;font-weight:500px;text-align:center;float:left;">用户登录</div>
		<div class="hr" style="float:left;width:50px;height:35px;margin-left:10px;"><hr /></div>
		</div>
		<div style="clear:both;"></div>
    	<div class="input">
			<label><?php echo L('username');?>：</label><input type="text" id="username" name="username" size="22" class="input-text">
		</div>
        <div class="input">
			<label><?php echo L('password');?>：</label><input type="password" id="password" name="password" size="22" class="input-text">
		</div>
        <div class="input">
			<label><?php echo L('checkcode');?>：</label><input type="text" id="code" name="code" size="8" class="input-text"><?php echo form::checkcode('code_img', '5', '14', 120, 26);?>
		</div>
        <div class="take">
		<!--<input type="checkbox" name="cookietime" value="2592000" id="cookietime"> <?php echo L('remember');?><?php echo L('username');?>-->
		
		<div class="submit"><input type="submit" name="dosubmit" id="dosubmit" value="立即登录"></div>
		<br /><br />
		<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" style="margin-left:20px;color:#666">免费注册</a>
		<a href="index.php?m=member&c=index&a=public_get_password_type&siteid=<?php echo $siteid;?>" style="margin-left:60px;color:#666">忘记密码?</a><br />
		</div>
        
      
			</form>
</div>
    
</div>

<script language="JavaScript">
<!--

	$(function(){
		$('#username').focus();
	})

	function save_username() {
		if($('#cookietime').attr('checked')==true) {
			var username = $('#username').val();
			setcookie('username', username, 3);
		} else {
			delcookie('username');
		}
	}
	var username = getcookie('username');
	if(username != '' && username != null) {
		$('#username').val(username);
		$('#cookietime').attr('checked',true);
	}

	function show_login(site) {
		if(site == 'sina') {
			art.dialog({lock:false,title:'<?php echo L('sina_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_sina_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		} else if(site == 'snda') {
			art.dialog({lock:false,title:'<?php echo L('snda_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_snda_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		} else if(site == 'qq') {
			art.dialog({lock:false,title:'<?php echo L('qq_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_qq_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		}
	}
//-->
</script>

<?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','menu',$default_style."_wap");
?>
