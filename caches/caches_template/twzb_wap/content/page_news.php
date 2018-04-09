<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','top',$default_style."_wap");
?>
	<div id="news_list_news">
	
		
		
		<section style="margin-top:1.74rem;padding-bottom: 1.18rem;" class="another-style">
			<nav style="padding:0 0.05rem">
				<div class="nav-inner">
					<ul>
					
						<li  class="active"  data-catid="47"><a href="<?php echo $CATEGORYS['47']['url'];?>"><?php echo $CATEGORYS['47']['catname'];?></a></li>
						<li  data-catid="6"><a href="<?php echo $CATEGORYS['6']['url'];?>"><?php echo $CATEGORYS['6']['catname'];?></a></li>
						<li  data-catid="43"><a href="<?php echo $CATEGORYS['43']['url'];?>"><?php echo $CATEGORYS['43']['catname'];?></a></li>
						<li  data-catid="62"><a href="<?php echo $CATEGORYS['62']['url'];?>"><?php echo $CATEGORYS['62']['catname'];?></a></li>
						
					</ul>
				</div>
			</nav>
			<div class="article">
				<div class="nav-item wrapper" >
						<ul class="showlist0">
						</ul>
						
				</div>
				<div class="nav-item wrapper" >
						<ul class="showlist1">
						</ul>
						
				</div>
				<div class="nav-item wrapper" >
						<ul class="showlist2">
						</ul>
						
				</div>
				<div class="nav-item wrapper" >
						<ul class="showlist3">
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
$("#news_list_news section nav ul li").on("click",function(){
var index = $(this).index();
$("#news_list_news section  nav ul li").removeClass("active");
$(this).addClass("active");
$("#news_list_news section .nav-item").hide();
$("#news_list_news section .nav-item").eq(index).show();
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

	