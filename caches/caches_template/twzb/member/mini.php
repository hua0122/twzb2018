<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><style>
.log{height:30px;line-height:30px;color:#fff;}
.log a{color:#fff;text-decoration:none;}
</style>

<div class="log w27"><?php if($_username) { ?><?php echo L('hellow');?> <?php echo get_nickname();?>, <a href="<?php echo APP_PATH;?>index.php?m=member&siteid=<?php echo $siteid;?>" target="_blank"><?php echo L('member_center');?></a> <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>" target="_top"><?php echo L('logout');?></a><?php } else { ?> <span class="r"><a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" target="_blank"><?php echo L('register');?></a> <span>|</span> <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>" target="_top"><?php echo L('login');?></a></span>
<?php } ?></div>
