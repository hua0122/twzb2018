$(document).ready(function(){
	new SelectPlugin("brand_id", "brand_name");
	new SelectPlugin("range_id", "range_name");
	new SelectPlugin("product_id", "product_name");
	new SelectPlugin("province_id", "province_name");
	new SelectPlugin("city_id", "city_name");
	new SelectPlugin("want_brand_id1", "want_brand_id1_name");
	new SelectPlugin("want_brand_id2", "want_brand_id2_name");
	new SelectPlugin("want_brand_id3", "want_brand_id3_name");
	$("#brand_id").change(function(){
		var brand_id = $(this).val();
		loadAnimation();
		$("#range_name").html("请选择系列");
		$("#product_name").html("请选择产品");
		$("#product_id").html("<option value=''>请选择产品</option>");
		$.post("/get_range_list.ajax.php",{brand_id:brand_id},function(data){
			
			var ret = eval("("+data+")");
			var str = '<option value="">请选择系列</option>';
			for($i=0;$i<ret.length;$i++)
			{
				str += '<option value="'+ret[$i]['id']+'">'+ret[$i]['name_zh']+'</option>';
			}
			$('#range_id').html(str);
			$(".load_gif").remove();
			$(".load_bg").remove();
		});
	});
	$("#range_id").change(function(){
		var range_id = $(this).val();
		loadAnimation();
		$("#product_name").html("请选择产品");
		$.post("/get_product_by_range.ajax.php",{range_id:range_id},function(data){
			
			var ret = eval("("+data+")");
			var str = '<option value="">请选择产品</option>';
			for($i=0;$i<ret.length;$i++)
			{
				str += '<option value="'+ret[$i]['id']+'">'+ret[$i]['name_cn']+'</option>';
			}
			$('#product_id').html(str);
			$(".load_gif").remove();
			$(".load_bg").remove();
		});
	});
	$(".check_btn input").click(function(){
		var checked = $(this).prop('checked');
		if(checked){
			$(this).prev().attr('src','images/check_in.png');
		}else{
			$(this).prev().attr('src','images/check_out.png');
		}
		
	});
	$(".radio_img ").click(function(){
		$(".radio_img").removeClass("current");
		$(this).addClass("current");
	});
	var init_municipality_flag = $('#province_id').find("option:selected").attr("municipality_flag");
    var init_province_name = $('#province_id').find('option:selected').text();
    if(1 == init_municipality_flag) 
    {
		$("#city_id").html('<option value="0">'+init_province_name+'</option>');
		$("#city_name").html(init_province_name);
    }
	
	function get_city(province,id_name){
		$.post("/city_list.ajax.php",{province:province},function(data){
			var ret = eval("("+data+")");
			$("#city_name").html("请选择市");
			var str = '<option value="">请选择市</option>';
			for($i=0;$i<ret.length;$i++)
			{
				str += '<option value="'+ret[$i]['id']+'">'+ret[$i]['initial_zh']+'-'+ret[$i]['name']+'</option>';
			}
			$('#'+id_name).html(str);
			$(".load_gif").remove();
			$(".load_bg").remove();
			new SelectPlugin("city_id", "city_name");
		});
	}
	$("#province_id").change(function(){
		loadAnimation();
		var province = $(this).val();
        var province_name = $(this).find('option:selected').text();
		var municipality_flag = $(this).find("option:selected").attr("municipality_flag");
		if(1 == municipality_flag) 
		{
			$("#city_id").html('<option value="0">'+province_name+'</option>');
			$("#city_name").html(province_name);
			$(".load_gif").remove();
			$(".load_bg").remove();
			return false;
		}
		$("#city_id").parent().removeClass("colorgray");
		get_city(province, "city_id");
	});
	var flag = 0;
	$("#submit_wantbuy").click(function(){
		if(1 == flag) return false;
		flag = 1;
		var brand_id = $("#brand_id option:selected").val();
		if('' == brand_id)
		{
			flag = 0;
			var html = "品牌不能为空";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var range_id = $("#range_id option:selected").val();
		if('' == range_id)
		{
			flag = 0;
			var html = "系列不能为空";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var product_id = $("#product_id option:selected").val();
		if('' == product_id)
		{
			flag = 0;
			var html = "产品不能为空";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var user_name = $("#user_name").val();
		if('' == user_name)
		{
			flag = 0;
			var html = "姓名不能为空";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var reg_name = /^[\u4e00-\u9fa5]+$/;
		if(false === reg_name.test(user_name) || 4 > getByteLen(user_name) || 40 < getByteLen(user_name))
		{
			flag = 0;
			var html = "姓名为2-20个汉字";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var mobile = $("#mobile").val();
		if('' == mobile)
		{
			flag = 0;
			var html = "手机不能为空";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var reg_phone = /1[3458]{1}\d{9}$/;
		if(false === reg_phone.test(mobile))
		{
			flag = 0;
			var html = "手机格式错误";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var buy_time = $("input[name='buy_time']:checked").val();
		if('' == buy_time || undefined == buy_time)
		{
			flag = 0;
			var html = "预购时间不能为空";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var province_id = $("#province_id option:selected").val(); 
		var city_id = $("#city_id option:selected").val();
		if('' == province_id || '' == city_id)
		{
			flag = 0;
			var html = "上牌城市不能为空";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		var trait_str = "";
		$("input[name='trait']:checked").each(function(){
			trait_str += $(this).val()+",";
		});
		if('' == trait_str)
		{
			flag = 0;
			var html = "产品特点不能为空";
			message_obj = new general_dialog(html, function(){message_obj.close();});
			return false;
		}
		trait_str = trait_str.substr(0, trait_str.length - 1);
		var want_brand_id1 = $("#want_brand_id1 option:selected").val();
		var want_brand_id2 = $("#want_brand_id2 option:selected").val();
		var want_brand_id3 = $("#want_brand_id3 option:selected").val();
		
		$.post("/product_wantbuy_add.ajax.php",{brand_id:brand_id,range_id:range_id,product_id:product_id,user_name:user_name,mobile:mobile,buy_time:buy_time,province_id:province_id,city_id:city_id,trait_str:trait_str,want_brand_id1:want_brand_id1,want_brand_id2:want_brand_id2,want_brand_id3:want_brand_id3},function(data){
			var ret = eval("("+data+")");
			if(false !== ret.result)
			{
				message_obj = new general_dialog(ret.message, function(){
					window.location.href = "/brand/index-"+brand_id+".html";
				});
			}
			else
			{
				flag = 0;
				var html = ret.message;
				message_obj = new general_dialog(html, function(){message_obj.close();});
			}
		});
		
	});

});

function loadAnimation(){
		var clientHeight = document.documentElement.clientHeight;
		var clientWidth = document.documentElement.clientWidth;
		var scrolltop = document.body.scrollTop;
		var top = parseInt(clientHeight/2) + parseInt(scrolltop)-60; 
		var left = clientWidth/2-15;
		if(-1 != ua.search("Android") || -1 != ua.search("iPhone") || -1 != ua.search('iPad')) $("body").append("<div class='load_bg' style='position:absolute;z-index:99;top:0;left:0;width:100%;height:300%;background-color:#000;opacity:0.5;filter: alpha(opacity=50);'></div><img src='images/preloader.gif' class='load_gif' style='position:absolute;top:"+top+"px;left:"+left+"px;z-index:99;'>");
		else $("body").append("<div class='load_bg' style='position:absolute;z-index:1000;top:0;left:0;width:100%;height:300%;background-color:#000;opacity:0.5;filter: alpha(opacity=50);'></div><img src='images/preloader.gif' class='load_gif' style='position:absolute;top:"+top+"px;left:"+left+"px;z-index:1000;'>");
	};