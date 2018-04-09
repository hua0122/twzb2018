<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
$sitelist  = getcache('sitelist','commons');
$default_style = $sitelist[$siteid]['default_style'];
include template('content','top',$default_style."_wap");
?>
<link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>css/buy_car.css">
<style>
	.select_area{width:5.6rem;}

</style>
	<div id="news_list_news">
		<section style="margin-top:1.74rem;padding-bottom: 1.18rem;" class="another-style">
			<div class="buy_car">
				<div class="content">
					<form method="post" action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show1&formid=17&action=js&siteid=1" name="" class="">
						<div class="review_form">


							<div class="select_box" >
								<div class="select_name">品牌：

									<script type="text/javascript" src="<?php echo APP_PATH;?>statics/js/linkage/js/jquery.ld.js"></script>
									<input type="hidden" name="info[brand]" id="brand" value="">
									<select class="pc-select-brand" name="brand-1" id="brand-1" style="width:5.6rem;height:38px;margin-bottom: 10px;">
										<option value="">请选择菜单</option>
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c47185196946209a6d960128fd3320da&sql=SELECT+%2A+from+newt_linkage+where+keyid+%3D3360+and+parentid+%3D0+order+by+description+asc+&num=500&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from newt_linkage where keyid =3360 and parentid =0 order by description asc  LIMIT 500");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

										<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
										<option value="<?php echo $r['linkageid'];?>" class="ld-option"><?php echo $r['description'];?>-<?php echo $r['name'];?></option>
										<?php $n++;}unset($n); ?>
										<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									</select>
									<select class="pc-select-brand" name="brand-2" id="brand-2" style="width:5.6rem;height:38px;">
										<option value="">请选择菜单</option>
									</select>
									<script type="text/javascript">
                                        $(function(){
                                            var $ld5 = $(".pc-select-brand");
                                            $ld5.ld({ajaxOptions : {"url" : "<?php echo APP_PATH;?>api.php?op=get_linkage&act=ajax_select&keyid=3360"},defaultParentId : 0});
                                            var ld5_api = $ld5.ld("api");
                                            ld5_api.selected();
                                            $ld5.bind("change",onchange);
                                            function onchange(e){
                                                var $target = $(e.target);
                                                var index = $ld5.index($target);
                                                $("#brand-3").remove();
                                                $("#brand").val($ld5.eq(index).show().val());
                                                index ++;
                                                $ld5.eq(index).show();								}
                                        })
									</script>

								</div>

							</div>

							<div class="err_tips"></div>
							<div class="select_box">
								<div class="select_name">产品：</div>
								<div class="select_area">
									<select name="info[pro]" id="pro">
										<option value="0" selected>请选择产品</option>

										<script type="text/javascript">
												$(function(){

													$("#brand-2").bind("change",function(){
													    $('#pro').html('<option value="0" selected>请选择产品</option>');
                                                        var id = $(this).val();
                                                        $.post("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_qbcx", {id:id}, function (data) {
                                                            if (data.status == 1) {
                                                                var result='';
                                                                $.each(data.data, function (i, v) {
                                                                    result+='<option value="'+v.title+'">'+v.title+'</option>';

                                                                });

                                                                $('#pro').append(result);
                                                            }

                                                        }, 'json');



													});
                                                    $("#brand-1").bind("change",function(){
                                                        $('#pro').html('<option value="0" selected>请选择产品</option>');
                                                    });


												})

										</script>

									</select>
								</div>
							</div>
							<div class="err_tips"></div>
							<div class="input_box">
								<div class="select_name">姓名：</div>
								<div class="input_area">
									<input id="name" name="info[name]">
								</div>
							</div>
							<div class="err_tips"></div>
							<div class="input_box">
								<div class="select_name">手机：</div>
								<div class="input_area">
									<input id="tel" name="info[tel]">
								</div>
							</div>
							<div class="err_tips"></div>
							<div class="form_item_txt">预计购车时间：</div>
							<div class="radio_box">
								<div class="radio_btn">

									<div class="radio_img current">
										<input type="radio" name="info[time]" checked="checked" value="1">

									</div>
									<span>一个月内</span>
								</div>
								<div class="radio_btn">
									<div class="radio_img">
										<input type="radio" name="info[time]" value="2">

									</div>
									<span>三个月内</span>
								</div>
								<div class="radio_btn">
									<div class="radio_img">
										<input type="radio" name="info[time]" value="3">

									</div>
									<span>六个月内</span>
								</div>
								<div class="radio_btn">
									<div class="radio_img">
										<input type="radio" name="info[time]" value="4">

									</div>
									<span>六个月以上</span>
								</div>

							</div>
							<div class="err_tips"></div>
							<div class="select_box two_select">
								<div class="select_name">上牌城市：
									<td><input type="hidden" name="info[city]" id="city" value="">
										<select class="pc-select-city" name="city-1" id="city-1" style="width:5.6rem;height:38px;margin-bottom: 10px;">
											<option value="">请选择菜单</option>
											<option value="2" class="ld-option">北京市</option>
											<option value="3" class="ld-option">上海市</option>
											<option value="4" class="ld-option">天津市</option>
											<option value="5" class="ld-option">重庆市</option>
											<option value="6" class="ld-option">河北省</option>
											<option value="7" class="ld-option">山西省</option>
											<option value="8" class="ld-option">内蒙古</option>
											<option value="9" class="ld-option">辽宁省</option><option value="10" class="ld-option">吉林省</option><option value="11" class="ld-option">黑龙江省</option><option value="12" class="ld-option">江苏省</option><option value="13" class="ld-option">浙江省</option><option value="14" class="ld-option">安徽省</option><option value="15" class="ld-option">福建省</option><option value="16" class="ld-option">江西省</option><option value="17" class="ld-option">山东省</option><option value="18" class="ld-option">河南省</option><option value="19" class="ld-option">湖北省</option><option value="20" class="ld-option">湖南省</option><option value="21" class="ld-option">广东省</option><option value="22" class="ld-option">广西</option><option value="23" class="ld-option">海南省</option><option value="24" class="ld-option">四川省</option><option value="25" class="ld-option">贵州省</option><option value="26" class="ld-option">云南省</option><option value="27" class="ld-option">西藏</option><option value="28" class="ld-option">陕西省</option><option value="29" class="ld-option">甘肃省</option><option value="30" class="ld-option">青海省</option><option value="31" class="ld-option">宁夏</option><option value="32" class="ld-option">新疆</option><option value="33" class="ld-option">台湾省</option><option value="34" class="ld-option">香港</option><option value="35" class="ld-option">澳门</option><option value="3358" class="ld-option">钓鱼岛</option></select>
										<select class="pc-select-city" name="city-2" id="city-2" style="width:5.6rem;height:38px;">
											<option value="">请选择菜单</option></select>
										<script type="text/javascript">
                                            $(function(){
                                                var $ld5 = $(".pc-select-city");
                                                $ld5.ld({ajaxOptions : {"url" : "<?php echo APP_PATH;?>api.php?op=get_linkage&act=ajax_select&keyid=1"},defaultParentId : 0});
                                                var ld5_api = $ld5.ld("api");
                                                ld5_api.selected();
                                                $ld5.bind("change",onchange);
                                                function onchange(e){
                                                    var $target = $(e.target);
                                                    var index = $ld5.index($target);
                                                    $("#city-3").remove();
                                                    $("#city").val($ld5.eq(index).show().val());
                                                    index ++;
                                                    $ld5.eq(index).show();								}
                                            })
										</script>  </td>

								</div>

							</div>
							<div class="err_tips"></div>
							<div class="form_item_txt">该产品的哪些特点吸引了您：
							</div>
							<div class="check_area">
								<div class="check_item">
									<div class="check_btn">
										<input type="checkbox" name="info[td][]" value="1">
									</div>
									<div class="check_text">发动机动力性能</div>
								</div>
								<div class="check_item">
									<div class="check_btn">
										<input type="checkbox" name="info[td][]" value="2">
									</div>
									<div class="check_text">出勤率</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="3">
									</div>
									<div class="check_text">安全性</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="4">
									</div>
									<div class="check_text">操控性</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="5">
									</div>
									<div class="check_text">制动性</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="6">
									</div>
									<div class="check_text">节油性</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="7">
									</div>
									<div class="check_text">舒适性</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="8">
									</div>
									<div class="check_text">排放系统性能</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="9">
									</div>
									<div class="check_text">智能性</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="10">
									</div>
									<div class="check_text">轻量化</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="11">
									</div>
									<div class="check_text">配件供应率</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="12">
									</div>
									<div class="check_text">内饰做工</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="13">
									</div>
									<div class="check_text">金融支持</div>
								</div>
								<div class="check_item">
									<div class="check_btn">

										<input type="checkbox" name="info[td][]" value="14">
									</div>
									<div class="check_text">二手车残值</div>
								</div>
							</div>
							<div class="err_tips"></div>

							<div class="form_item_txt">您是否还会考虑其它品牌？如果有，请选择：
							</div>
							<div class="line">
								<div class="select_box left">
									<div class="select_area">
										<select name="info[other1]" id="other1">
											<option value="">全部</option>
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c47185196946209a6d960128fd3320da&sql=SELECT+%2A+from+newt_linkage+where+keyid+%3D3360+and+parentid+%3D0+order+by+description+asc+&num=500&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from newt_linkage where keyid =3360 and parentid =0 order by description asc  LIMIT 500");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
											<option value="<?php echo $r['name'];?>"><?php echo $r['description'];?>-<?php echo $r['name'];?></option>
											<?php $n++;}unset($n); ?>
											<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

										</select>
									</div>
								</div>
								<div class="select_box left">
									<div class="select_area">
										<select name="info[other2]" id="other2">
											<option value="">全部</option>
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c47185196946209a6d960128fd3320da&sql=SELECT+%2A+from+newt_linkage+where+keyid+%3D3360+and+parentid+%3D0+order+by+description+asc+&num=500&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from newt_linkage where keyid =3360 and parentid =0 order by description asc  LIMIT 500");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
											<option value="<?php echo $r['name'];?>"><?php echo $r['description'];?>-<?php echo $r['name'];?></option>
											<?php $n++;}unset($n); ?>
											<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
										</select>
									</div>
								</div>
								<div class="select_box left">
									<div class="select_area">

										<select name="info[other3]" id="other3">
											<option value="">全部</option>
											<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c47185196946209a6d960128fd3320da&sql=SELECT+%2A+from+newt_linkage+where+keyid+%3D3360+and+parentid+%3D0+order+by+description+asc+&num=500&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from newt_linkage where keyid =3360 and parentid =0 order by description asc  LIMIT 500");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

											<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
											<option value="<?php echo $r['name'];?>"><?php echo $r['description'];?>-<?php echo $r['name'];?></option>
											<?php $n++;}unset($n); ?>
											<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
										</select>
									</div>
								</div>
							</div>
							<input class="submit_btm" style="border:none;display: block;" type="submit" name="dosubmit" id="dosubmit" value="提交">

						</div>
					</form>



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
})
</script>


	