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
								
		<div id="club_detail">
		<div class="section">
			<div class="container sec_cont">
				<div class="title_position">
				<a href="<?php echo siteurl($siteid);?>">首页</a><a><?php echo $catname;?></a>	
				</div>
				<div class="detail">
					<div class="per_infor">
						<h3><?php echo $title;?></h3>
					</div>
					<div class="desc" style="min-height:450px;">
						<?php echo $content;?>
					</div>
				
					<div style="clear:both;"></div>
					
				
				</div>
				
				
		
			</div>
		</div>
<?php include template("content","footer"); ?>