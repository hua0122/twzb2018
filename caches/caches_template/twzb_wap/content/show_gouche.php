<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','header',$default_style."_wap");
?>
<style>
	.article .nav-item .parameter_cnt_item .parameter_cnt_list{
		width:100%;
	}
</style>
<link rel="stylesheet" href="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/css/gouche_show.css">
	<div id="news_detail">
		
		<section style="padding-top:0.82rem;padding-bottom: 0.7rem;" class="gouche another-style">
			<div class="news-infor">
				<div><img src="<?php echo $thumb;?>" style="width: 100%;"> </div>
				<h3><?php echo $title;?></h3>
				<div class="price">报价：<span>￥<?php echo $price;?></span></span></div>
				

			</div>
			<div class="xinxi">
				<span class="first">基本信息：</span>
				<span>驱动形式：<?php echo $qd;?></span>
				<span>总质量：<?php echo $zl;?></span>
				<span>发动机：<?php echo $fdj;?></span>
				<span>排放标准：<?php echo $bz;?></span>
				<span>最大马力：<?php echo $ml;?></span>
				<span>变速箱：<?php echo $bsx;?></span>


			</div>

			<div class="relate-article">
				<h3 class="title">实拍图</h3>
				<ul>
					<li>
						<?php $n=1; if(is_array($pics)) foreach($pics AS $pic_k => $r) { ?>
						<img src="<?php echo thumb($r[url]);?>" width="49%" alt="<?php echo $r['alt'];?>" rel="<?php echo $r['url'];?>"/>
						<?php $n++;}unset($n); ?>

					</li>
				</ul>
			</div>

				<nav style="padding:0 0.05rem">
					<div class="nav-inner">
						<ul>

							<li  class="active"><a>参数展示</a></li>
							<li><a>车型特点</a></li>
							<li><a href="<?php echo $CATEGORYS['77']['url'];?>">我要买车</a></li>


						</ul>
					</div>
				</nav>
				<div class="article">
					<div class="nav-item wrapper" >
						<?php echo $cs;?>

					</div>
					<div class="nav-item wrapper" >
						<?php echo $content;?>

					</div>


				</div>







		</section>
	</div>

<?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','menu',$default_style."_wap");
?>


<script type="text/javascript">
    $(function(){
        CommonFun.init();
        $("#news_detail section nav ul li").on("click",function(){
            var index = $(this).index();
            $("#news_detail section nav ul li").removeClass("active");
            $(this).addClass("active");
            $("#news_detail section .nav-item").hide();
            $("#news_detail section .nav-item").eq(index).show();
        })
    })
</script>