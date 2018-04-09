<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','top',$default_style."_wap");
?>
<style>
	.cx-list{
		margin: 10px;
	}
	.cx-list ul li{
		float: left;
		margin-right: 0.52rem;
		padding: 0 2px;
		border-bottom: 0.01rem solid #ddd;
		line-height: 0.55rem;
		height: 100%;
		position: relative;

	}
	.cx-list ul li a{
		font-size: 0.24rem;
		color: #3c3c3c;
	}

</style>
	<div id="news_list_news">

		<section style="margin-top:1.74rem;padding-bottom: 1.18rem;" class="another-style">
			<nav style="padding:0 0.05rem">
				<div class="nav-inner">
					<ul>

						<li  class="active"><a>按车系查找</a></li>

					</ul>
				</div>


			</nav>

				<div class="cx-list">
					<ul>
						<?php $n=1;if(is_array($cx)) foreach($cx AS $r) { ?>
						<li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=cx_list&id=<?php echo $r['linkageid'];?>"><?php echo $r['name'];?></a></li>
						<?php $n++;}unset($n); ?>


					</ul>

				</div>

			<div style="clear: both;"></div>
			<nav style="padding:0 0.05rem">
				<div class="nav-inner" style="text-align: left; padding-left: 10px">
					<ul>
					
						<li style="border-left: 5px solid #ff9000;height: 25px;line-height: 22px;padding-left: 5px;"><a>全部车型<span style="color: #ff9000;padding-left: 5px;">All types of cars</span></a></li>
						
					</ul>
				</div>
			</nav>
			<div class="article">
				<div class="nav-item wrapper" >
						<ul class="showlist">
						</ul>
						
				</div>

			</div>
		</section>
	
	
<?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','footer',$default_style."_wap");
?>



	
<!--上拉刷新下拉加载更多-->
<link rel="stylesheet" href="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/css/dropload.css">
<script src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/js/dropload.min.js"></script>
<script>
$(function () {
    CommonFun.init();
var page0= 1;
var id= window.location.search.substr(-4);


$('.article .wrapper').dropload({
				scrollArea: window,
				domDown: {
					domClass: 'dropload-down',
					domRefresh: '<div class="dropload-refresh">↑上拉加载更多</div>',
					domLoad: '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
					domNoData: '<div class="dropload-noData">没有更多数据了</div>'
				},
				loadDownFn: function (me) {
					
					$.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_qbcx", {
						page:page0,id:id
					}, function (data) {
						page0++;
			   
						if (data.status == 1) {
							var result='';
							$.each(data.data, function (i, v) {
							   result+='<li><a href="'+ v.url+'"><dl><dd><img src="'+v.thumb+'" alt="'+v.title+'"></dd><dd style="width:60%;"><h3 style="overflow:inherit">'+v.title+'</h3></dd><dd style="width:60%;"><p style="color:#666">参考价：<span style="color:#dc311b">￥'+v.price+'</span></p></dd>';
									result+='</dl>';
									result+='</a></li>';
									
							})

							$('.showlist').append(result);
						}

						if (data.status == 0) {
							me.lock();
							me.noData();
						}
						me.resetload();

					}, 'json')

				}
			})


});
	
</script>

	