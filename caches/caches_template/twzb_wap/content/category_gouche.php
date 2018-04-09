<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','top',$default_style."_wap");
?>
<style>
	.article .brand ul li {
		width:105px;
		height:85px;
		border:1px solid #ddd;
		padding: 10px;
		margin-top: 5px;
		float: left;
		margin-right: 10px;
	}
	.article .brand ul li img{
		width:80px;
		height:60px;
	}
	.price{
		color: #dc311b;
	}
	.brand-content{
		margin-top: 0.2rem;
	}
	.letter_check_box_each {
		float: left;
		display: block;
		width: 0.5rem;
		line-height: 18px;
		text-align: center;
		color: #323232;
		background-color: #e5e5e5;
		font-size: 12px;
		font-family: "Helvetica Neue","Microsoft YaHei","Simsun","Arial";
		margin-bottom: 7px;
		margin-right: 7.5px;
	}
	.letter_check_box_each_effect {
		background: #3c4f60;
		color: #fff;
	}
	.brand_contentbox a{
		display: block;
		float: left;
		width:2.0rem;
		border: 1px solid #ddd;
		margin: 3px;
		text-align: center;
		padding: 0.1rem;
		color: #666;
		border-radius: 5px;
	}
	.brand_contentbox .active{
		background: #3c4f60;
		color: #fff;
	}
	.dropload-refresh{
		display: none;
	}
</style>
	<div id="news_list_news">
	
		
		
		<section style="margin-top:1.74rem;padding-bottom: 1.18rem;" class="another-style">
			<div class="brand_topbox">
				<div class="letter_check_box"  style="padding: 0.1rem;">
					<div class="letter_check_box_innerblock">
						<a href="javascript:;" data-letter="A" class="letter_check_box_each letter_check_box_each_effect">A</a>
						<a href="javascript:;" data-letter="B" class="letter_check_box_each">B</a>
						<a href="javascript:;" data-letter="C" class="letter_check_box_each">C</a>
						<a href="javascript:;" data-letter="D" class="letter_check_box_each">D</a>
						<a href="javascript:;" data-letter="E" class="letter_check_box_each">E</a>
						<a href="javascript:;" data-letter="F" class="letter_check_box_each">F</a>
						<a href="javascript:;" data-letter="G" class="letter_check_box_each">G</a>
						<a href="javascript:;" data-letter="H" class="letter_check_box_each">H</a>
						<!--<a data-letter="I" class="letter_check_box_nonclick clear_right">I</a>-->
						<a href="javascript:;" data-letter="I" class="letter_check_box_each">I</a>
						<a href="javascript:;" data-letter="J" class="letter_check_box_each">J</a>
						<a href="javascript:;" data-letter="K" class="letter_check_box_each">K</a>
						<a href="javascript:;" data-letter="L" class="letter_check_box_each">L</a>
						<a href="javascript:;" data-letter="M" class="letter_check_box_each">M</a>
						<a href="javascript:;" data-letter="N" class="letter_check_box_each">N</a>
						<a href="javascript:;" data-letter="O" class="letter_check_box_each">O</a>
						<a href="javascript:;" data-letter="P" class="letter_check_box_each">P</a>
						<a href="javascript:;" data-letter="Q" class="letter_check_box_each">Q</a>
						<a href="javascript:;" data-letter="R" class="letter_check_box_each">R</a>
						<a href="javascript:;" data-letter="S" class="letter_check_box_each">S</a>
						<a href="javascript:;" data-letter="T" class="letter_check_box_each">T</a>
						<a href="javascript:;" data-letter="U" class="letter_check_box_each">U</a>
						<a href="javascript:;" data-letter="V" class="letter_check_box_each">V</a>
						<a href="javascript:;" data-letter="W" class="letter_check_box_each">W</a>
						<a href="javascript:;" data-letter="X" class="letter_check_box_each">X</a>
						<a href="javascript:;" data-letter="Y" class="letter_check_box_each">Y</a>
						<a href="javascript:;" data-letter="Z" class="letter_check_box_each">Z</a>
					</div>
				</div>
				<div style="clear: both;"></div>
				<div class="brand_contentbox">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6dfa8e73ee8d5a987f820fd1924da7fd&sql=SELECT+%2A+from+newt_linkage+where+keyid+%3D3360+and+parentid+%3D0+and+description%3D%27A%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from newt_linkage where keyid =3360 and parentid =0 and description='A' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=cx_list&id=<?php echo $r['linkageid'];?>"><?php echo $r['name'];?></a>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


				</div>

			</div>



			<div style="clear: both;"></div>
			<nav style="padding:0 0.05rem" class="brand">
				<div class="nav-inner">
					<ul>

						<li  class="active"><a>卡车品牌</a></li>
						<li><a>客车品牌</a></li>
						<li><a>房车品牌</a></li>
						<li><a>环卫车品牌</a></li>
						
					</ul>
				</div>
			</nav>
			<div class="article">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d114b805f2602edda39eb110d0b6bb82&action=category&catid=72&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'72','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="nav-item wrapper brand-content" >
						<ul >
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1d8f224379b26f248dcad697521559af&action=lists&catid=%24r%5Bcatid%5D&num=6&siteid=%24siteid&order=updatetime+desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'updatetime desc','limit'=>'6',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
							<li><a <?php if($r1[islink]) { ?>href="<?php echo $r1['url'];?>"<?php } ?>><img src="<?php echo $r1['thumb'];?>" width="110" height="90"> </a></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
						
				</div>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

			</div>

			<div style="clear: both;"></div>
			<nav style="padding:0 0.05rem">
				<div class="nav-inner" style="text-align: left; padding-left: 10px">
					<ul>

						<li style="border-left: 5px solid #ff9000;height: 25px;line-height: 22px;padding-left: 5px;"><a>推荐车型<span style="color: #ff9000;padding-left: 5px;">Recommended model</span></a></li>

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
	
	
<script type="text/javascript">
$(function(){
CommonFun.init();
$("#news_list_news section .brand ul li").on("click",function(){
var index = $(this).index();
$("#news_list_news section  .brand ul li").removeClass("active");
$(this).addClass("active");
$("#news_list_news section .brand-content").hide();
$("#news_list_news section .brand-content").eq(index).show();
});

	//点击字母切换对应的品牌
	$(".letter_check_box_innerblock a").click(function(){
	    var letter = $(this).data('letter');

        $.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_brand", {
            letter:letter
        }, function (data) {

            if (data.status == 1) {
                var result='';
                $.each(data.data, function (i, v) {
                    result+= '<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=cx_list&id='+v.linkageid+'">'+v.name+'</a>';

                });
                $(".brand_contentbox").html(result);

            }

            if (data.status == 0) {
                me.lock();
                me.noData();
            }
            me.resetload();

        }, 'json');


	});

    $(".letter_check_box_each").click(function(){
        $(this).addClass("letter_check_box_each_effect");
        $(this).siblings("a").removeClass("letter_check_box_each_effect");
    });

})


</script>
	
<!--上拉刷新下拉加载更多-->
<link rel="stylesheet" href="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/css/dropload.css">
<script src="<?php echo APP_PATH;?>phpcms/templates/twzb_wap/js/dropload.min.js"></script>
<script>
$(function () {
var page0= 1;
var catid = 65;

$('.article .wrapper').dropload({
				scrollArea: window,
				domDown: {
					domClass: 'dropload-down',
					domRefresh: '<div class="dropload-refresh">↑上拉加载更多</div>',
					domLoad: '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
					domNoData: '<div class="dropload-noData">没有更多数据了</div>'
				},
				loadDownFn: function (me) {
					
					$.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_tjcx", {
						page:page0,catid:catid
					}, function (data) {
						page0++;
			   
						if (data.status == 1) {
							var result='';
							$.each(data.data, function (i, v) {
							   result+='<li><a href="'+ v.url+'"><dl><dd><img src="'+v.thumb+'" alt="'+v.title+'"></dd><dd style="width:60%;"><h3 style="overflow:inherit">'+v.title+'</h3></dd><dd style="width:60%;"><p style="color:#666"> 参考价：<span class="price">￥'+v.price+'</span></p></dd>';
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

	