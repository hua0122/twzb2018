<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','top',$default_style."_wap");
?>

	<div id="twsp_video">
		
		<section style="margin-top:1.74rem;padding-bottom: 1.18rem;" class="another-style">
			<nav>
				<div class="nav-inner">
					<ul>
					
						<li  class="active"  data-catid="8"><a href="<?php echo $CATEGORYS['8']['url'];?>"><?php echo $CATEGORYS['8']['catname'];?></a></li>
						<li  data-catid="9"><a href="<?php echo $CATEGORYS['9']['url'];?>"><?php echo $CATEGORYS['9']['catname'];?></a></li>
						<li  data-catid="10"><a href="<?php echo $CATEGORYS['10']['url'];?>"><?php echo $CATEGORYS['10']['catname'];?></a></li>
						
					</ul>
				</div>
			</nav>
			<div class="video article">
			
				<div class="nav-item wrapper">
					<ul class="showlist0">
					
						
					</ul>
				</div>
						
			</div>
		</section>
	

<?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','footer',$default_style."_wap");
?>
	
	<script type="text/javascript">
		$(function(){
			CommonFun.init();
			$("#twsp_video section nav ul li").on("click",function(){
				var index = $(this).index();
				$("#twsp_video section  nav ul li").removeClass("active");
				$(this).addClass("active");
				$("#twsp_video section .nav-item").hide();
				$("#twsp_video section .nav-item").eq(index).show();
			})
		})
	</script>
	
	<!--上拉刷新下拉加载更多-->
<link rel="stylesheet" href="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/css/dropload.css">
<script src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/js/dropload.min.js"></script>
<script>
$(function () {

var itemIndex = 0;
var page0= 1;
var page1 = 1;
var page2 = 1;
var page3 = 1;
var catid = 0;
var dropload ='';

function dropload2(catid,itemIndex){

	dropload = $('.article .wrapper').dropload({
			scrollArea: window,
			domDown: {
				domClass: 'dropload-down',
				domRefresh: '<div class="dropload-refresh">↑上拉加载更多</div>',
				domLoad: '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
				domNoData: '<div class="dropload-noData">没有更多数据了</div>'
			},
			loadDownFn: function (me) {
				if(itemIndex==0){
					
					$.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_lists", {
						page:page0,catid:catid
					}, function (data) {
							page0++;
							if (data.status == 1) {
								var result='';
								$.each(data.data, function (i, v) {
								   result+='<li><a href="'+ v.url+'"><dl><dd><img src="'+v.thumb+'" alt="'+v.title+'"></dd><dd style="width:60%;"><h3 style="overflow:inherit">'+v.title+'</h3></dd><dd style="width:60%;"><p style="color:#666">'+v.description+'</p></dd>';
										result+='<dd style="width:60%;"><div class="tags" style="float:right;">'+v.tjbq+'</div></dd></dl>';
										result+='<div class="article-time"><span class="time"> '+v.inputtime+' </span><span class="seen">'+v.views+'</span><span class="repeat">'+v.comment_total+'</span><span class="user" style="margin-right: 0.16rem;">  作者：'+v.username+'</span><span class="from"> 来源：'+v.copyfrom+'</span></div></a></li>';
										
								})
						
								$('.wrapper .showlist0').append(result);
								me.resetload();
							}

							if (data.status == 0) {
								me.lock();
								me.noData();
							}
							me.resetload();

						}, 'json')
				
					
					
				}else if (itemIndex==1){
					
					$.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_lists", {
						page:page1,catid:catid
					}, function (data) {
							page1++;
							if (data.status == 1) {
								var result='';
								$.each(data.data, function (i, v) {
								   result+='<li><a href="'+ v.url+'"><dl><dd><img src="'+v.thumb+'" alt="'+v.title+'"></dd><dd style="width:60%;"><h3 style="overflow:inherit">'+v.title+'</h3></dd><dd style="width:60%;"><p style="color:#666">'+v.description+'</p></dd>';
										result+='<dd style="width:60%;"><div class="tags" style="float:right;">'+v.tjbq+'</div></dd></dl>';
										result+='<div class="article-time"><span class="time"> '+v.inputtime+' </span><span class="seen">'+v.views+'</span><span class="repeat">'+v.comment_total+'</span><span class="user" style="margin-right: 0.16rem;">  作者：'+v.username+'</span><span class="from"> 来源：'+v.copyfrom+'</span></div></a></li>';
										
								})
						
								$('.wrapper .showlist1').append(result);
								me.resetload();
							}

							if (data.status == 0) {
								me.lock();
								me.noData();
							}
							me.resetload();

						}, 'json')
					
					
					
				}else if (itemIndex==2){
					
					$.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_lists", {
						page:page2,catid:catid
					}, function (data) {
							page2++;
							if (data.status == 1) {
								var result='';
								$.each(data.data, function (i, v) {
								   result+='<li><a href="'+ v.url+'"><dl><dd><img src="'+v.thumb+'" alt="'+v.title+'"></dd><dd style="width:60%;"><h3 style="overflow:inherit">'+v.title+'</h3></dd><dd style="width:60%;"><p style="color:#666">'+v.description+'</p></dd>';
										result+='<dd style="width:60%;"><div class="tags" style="float:right;">'+v.tjbq+'</div></dd></dl>';
										result+='<div class="article-time"><span class="time"> '+v.inputtime+' </span><span class="seen">'+v.views+'</span><span class="repeat">'+v.comment_total+'</span><span class="user" style="margin-right: 0.16rem;">  作者：'+v.username+'</span><span class="from"> 来源：'+v.copyfrom+'</span></div></a></li>';
										
								})
						
								$('.wrapper .showlist2').append(result);
								me.resetload();
							}

							if (data.status == 0) {
								me.lock();
								me.noData();
							}
							me.resetload();

						}, 'json')
					
				}else if(itemIndex==3){
					
					$.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_lists", {
						page:page3,catid:catid
					}, function (data) {
							page3++;
							if (data.status == 1) {
								var result='';
								$.each(data.data, function (i, v) {
								   result+='<li><a href="'+ v.url+'"><dl><dd><img src="'+v.thumb+'" alt="'+v.title+'"></dd><dd style="width:60%;"><h3 style="overflow:inherit">'+v.title+'</h3></dd><dd style="width:60%;"><p style="color:#666">'+v.description+'</p></dd>';
										result+='<dd style="width:60%;"><div class="tags" style="float:right;">'+v.tjbq+'</div></dd></dl>';
										result+='<div class="article-time"><span class="time"> '+v.inputtime+' </span><span class="seen">'+v.views+'</span><span class="repeat">'+v.comment_total+'</span><span class="user" style="margin-right: 0.16rem;">  作者：'+v.username+'</span><span class="from"> 来源：'+v.copyfrom+'</span></div></a></li>';
										
								})
						
								$('.wrapper .showlist3').append(result);
								me.resetload();
							}

							if (data.status == 0) {
								me.lock();
								me.noData();
							}
							me.resetload();

						}, 'json')
					
				}
				
				
				
				
				
				
				

			}
		})
		
}	
					
$(".nav-inner ul li").click(function(){
		
		$(".dropload-down").remove();
	
		catid=$(this).data('catid');

		itemIndex = $(this).index();
		
		dropload2(catid,itemIndex);

});	

		
if(itemIndex == 0){
 catid = $(".nav-inner ul li").data('catid');

$('.article .wrapper').dropload({
				scrollArea: window,
				domDown: {
					domClass: 'dropload-down',
					domRefresh: '<div class="dropload-refresh">↑上拉加载更多</div>',
					domLoad: '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
					domNoData: '<div class="dropload-noData">没有更多数据了</div>'
				},
				loadDownFn: function (me) {
					
					$.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_tuwenlists", {
						page:page0,catid:catid
					}, function (data) {
					console.log(data);
						page0++;
			   
						if (data.status == 1) {
							var result='';
							$.each(data.data, function (i, v) {
							  
							 result+='<li><a href="'+ v.url+'"><div class="video-infor"><img src="'+v.thumb+'" alt="'+v.title+'"><h3>'+v.title+'</h3></div>\
							 <div class="video-time"><span class="time"> '+v.inputtime+' </span>\
							 <span class="seen">'+v.views+'</span>\
							 <span class="repeat">'+v.comment_total+'</span> \
							 <span class="user" style="margin-right: 0.16rem;">  作者：'+v.username+'</span> \
							 <span class="from"> 来源：'+v.copyfrom+'</span></div></a></li>';
							
							
							})

							$('.showlist0').append(result);
						}

						if (data.status == 0) {
							me.lock();
							me.noData();
						}
						me.resetload();

					}, 'json')

				}
			})
	}

});
	
</script>
