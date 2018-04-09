<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','header',$default_style."_wap");
?>

	<div id="video_detail">
	
				
		<section style="padding-top:0.82rem;padding-bottom: 0.91rem;">
			<div class="img-box"><img src="<?php echo $thumb;?>" alt="<?php echo $title;?>"></div>
			<div class="video-detail">
				<h3><?php echo $title;?></h3>
				<div class="author-infor">
				<?php $db = pc_base::load_model('member_model'); $_r = $db->get_one(array('username'=>$username)); $userid = $_r[userid];?>
					
				<?php $avatar= get_memberavatar($userid,'','90');?>
					<img <img src="<?php echo $avatar;?>" onerror="this.src='<?php echo APP_PATH;?>phpcms/templates/twzb_wap/images/news_detail_head.png'" alt="<?php echo $title;?>">
					<div class="infor-name">
						<div class="name">
							<span><?php echo $username;?></span>
							<?php $uid=param::get_cookie('_userid');?>
									<?php $caredb = pc_base::load_model('careinfo_model'); $care = $caredb->get_one(array('uid'=>$userid,'userid'=>$uid));?>
									<?php if($care) { ?>
									<a href="javascript:;">已关注</a>
									<?php } else { ?>
									<a href="javascript:;" id="addcare" onclick="addcare('<?php echo $userid;?>','<?php echo $uid;?>')">加关注</a>
									<?php } ?>
						</div>
						<?php if($_r) { ?>
						<p><?php echo $_r['xuanyan'];?></p>
						<?php } else { ?>
						<?php } ?>
					</div>
				</div>
				<div class="addr">
					<p>直播时间：<?php echo $shijian;?></p>
					<p>直播地点：<?php echo $address;?></p>
					<p>观看次数：<span id="hits"></span>次</p>
				</div>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=659e96a50b73b41ea4aee287766d91da&sql=SELECT+newt_zhibo.id%2Cnewt_zhibo.inputtime+FROM+newt_zhibo+where+catid%3D%24catid+and+title%3D%27%24title%27+order+by+inputtime+desc&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT newt_zhibo.id,newt_zhibo.inputtime FROM newt_zhibo where catid=$catid and title='$title' order by inputtime desc LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
								 
								 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
								 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bd58c9a419b93c377327145a00f244de&sql=SELECT+newt_zhibo_data.%2A+FROM+newt_zhibo_data+where+id%3D%24v%5Bid%5D&return=data1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT newt_zhibo_data.* FROM newt_zhibo_data where id=$v[id] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data1 = $a;unset($a);?>
									<?php $n=1;if(is_array($data1)) foreach($data1 AS $v1) { ?>
				<div class="video-infor">
					<span class="time"><?php echo date("Y-m-d H:i:s",$v[inputtime]);?></span>
					<div class="music">
										<?php $arr=string2array($v1[yinpin]);?>
										<?php if($arr) { ?>
										<a href="javascript:;" class="sound_ico"><img src="<?php echo APP_PATH;?>images/sound.png" class="sound_img" myaudio="<?php echo $arr['0']['fileurl'];?>"></a>
										<?php } ?>
						
					</div>
					<?php $arr1=string2array($v1[shipin]);?>
									<?php if($arr1) { ?>
					<div class="videoBox" style="margin-top:10px;margin-bottom:10px;">
						<video preload="load" src="<?php echo $arr1['0']['fileurl'];?>" width="100%"></video>
					</div>
									<?php } ?>
					<div class="detail">
					<p class="brief"><?php echo $v1['content'];?></p>
					</div>
					
				
				</div>
				
										<?php $n++;}unset($n); ?>
									<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
			</div>
			<div class="comment-box" style="margin-top: 0.2rem">
				<?php if($allow_comment && module_exists('comment')) { ?>
				  <iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
				
				<?php } ?>
			</div>
		</section>
	</div>

<?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','menu',$default_style."_wap");
?>
<style>
.video-player .video-controls .video-seek > .viewBox {
    display: none;
    width: 100px;
    height: 70px;
    position: absolute;
    bottom: 15px;
    left: 50%;
    background-color: rgba(255, 255, 255, 0.2);
	
	}
</style>
<script src="depend/videoCT.js"></script>
	<script type="text/javascript">
		$(function(){
			CommonFun.init();	
			var caverling = {
				init:function(){
					this.hideComment();
					this.loadMoreComment();
					this.videoInit();
				},
				hideComment:function(){
					$("section .comment-box dl i.up").on("click",function(){
						$(this).parents("dl").hide();
					})
				},
				loadMoreComment:function(){
					$("section .comment-box ul i.down").on("click",function(){
						var html = '';
						for(var i=0;i<3;i++){
							html += '<li>\
								<img src="images/news_detail_comment_item.png" alt="">\
								<div class="desc">\
									<div class="name-time">\
										<span>飞天HIPPOP</span>\
										<span>3小时前</span>\
									</div>\
									<p>我有一个大胆的想法。随即大货车穿越两车之间，直接悲 剧了</p>\
								</div>\
							</li>';
						}
						$(this).parents("ul").append(html);
					})
				},
				
				
				videoInit:function(){
					$("video").each(function(){
						//$(this).trigger("click");
						$(this).videoCt({
							title: '',              //标题
				            volume: 0.2,                //音量
				            barrage: true,              //弹幕开关
				            comment: true,              //弹幕
				            reversal: true,             //镜像翻转
				            playSpeed: true,            //播放速度
				            update: true,               //下载
				            autoplay: false,            //自动播放
				            clarity: {
				                type: [],            //清晰度
				                src: [$(this).attr("src")]      //链接地址
				            },
				            //commentFile: 'comment.json'           //导入弹幕json数据
						});
					});
				}
				
				
			}
			caverling.init();
			
			$(".video-detail .detail img").attr('style','width:100%;height:auto;');
		})
	</script>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>

	<script>
	function addcare(uid,userid){
	//当前用户id  userid
	//被关注用户id  uid
	if(userid){
	
		$.post("index.php?m=content&c=rss&a=addcare",{uid:uid,userid:userid},function(data){
				
				$("#addcare").html("已关注");
				$("#addcare").attr('onclick','');
			});
	
	}else{
		alert('请登录');
				location.href="index.php?m=member&c=index&a=login";
	}
	

}

var audio = null;
$(".sound_img").bind("click", function(){

		if(null != audio)
		{
			audio.pause();
			audio = null;
			
			$(this).attr("src", "images/sound.png");
			
		}
		else
		{
		
			audio = document.createElement("audio");
			var src = $(this).attr("myaudio");
			audio.onerror = function(){
				src = src.replace(global_info.yun_domain, global_info.main_domain);
				$(this).unbind("error");
				audio.src = src;
				audio.play();
			}
			audio.src = src;
			$(this).attr("src", "images/sound.gif");
			audio.play();
			var that = this;
			audio.onended = function(){
				$(that).attr("src", "images/sound.png");
			}
		}
		
	});
	
	
	</script>