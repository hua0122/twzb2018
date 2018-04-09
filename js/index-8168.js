var audio = null;
$(function(){
	var defautl_val=$(".textarea").val();
	$(".textarea").css({"color":"#999"});
	$(".textarea").focus(function(){
		if($(this).val()==defautl_val){
			$(this).val("");
		}
		$(this).css({"color":"#000"})
	})
	$(".textarea").blur(function(){
		if($(this).val()==''){
			$(this).val(defautl_val);
			$(this).css({"color":"#999"})
		}
		
	})
	init_hover();
		$(".img_live").each(function(){
			var count = $(this).attr("count");
			if(1 < count) $(this).css({"height":$(this).width()+"px"});
		});
		$(".img_link").css({"height":$(".img_link").width()*0.66+"px"});
		if(1023 > $(window).width()) setInterval(moving,2000);
	
	if(768 < $(window).width())
	{
		$(".liveshow_share_btn").bind("mouseover", function () {
			var html = "<img src='http://qr.liantu.com/api.php?&w=200&text="+window.location.href+"' id='qr_code' style='position:absolute;width:200px;'>";
			$(this).parent().prepend(html);
			var btn_height = $(this).height();
			var btn_top = $(this).offset().top;
			var btn_width = $(this).width();
			var img_height = 200;
			var img_width = 200;
			var img_top = btn_top*1 + btn_height*1 - img_height;
			$("#qr_code").css("top", 0);
			$("#qr_code").css("right", btn_width);
			
		});
		$(".liveshow_share_btn").bind("mouseleave", function () {
			$("#qr_code").remove();
		});
	}
	if($(window).width()<=768){
		$(".video_box").css('height',$(".video_box").width()*0.5625+'px');
	}
	
	if($(window).width()<=768){
		$(".share_tips").css({"height":"1800"});
		/*var img = new Image();
		img.src = $(".tel_btn").children().attr("src");
		img.onload = function(){
			var share_height = $("body").outerHeight(true)*1 + $(".foot_area").height();
			$(".share_tips").css({"height":share_height});
		}*/
		$(".liveshow_share_btn").click(function(){
			$(".share_tips").show();
		});
		$(".share_tips_btn").click(function(){
			$(".share_tips").hide();
		});
		
		var default_H=($(window).height() - $(".fix_btn").height())/2;
		
		/*if(0 < $(".hot_news").length)
		{
			$(".fix_btn").css({"top":$(".btn_area").offset().top+"px"});
			$(window).scroll(function(){
				if(($(".hot_news").offset().top*1 - $(window).scrollTop()*1 + $(".hot_news").height()*1) < default_H){
					$(".fix_btn").css({"top":default_H+"px"});
				}else{
					$(".fix_btn").css({"top":$(".btn_area").offset().top+"px"});
				}
			});
		}*/
		
	}
	init_story_img();
	show_big_pic();
	$(window).scroll(init_story_img);
	$(".moblie_visible").click(function(){
		if(1 == global_ajax_flag) global_ajax_flag = 0;
		else return false;
		ajax_callback();
	});
	function ajax_callback(){
		var status = $("#background_div").css("display");
		if(undefined != status && 'none' != status)
		{
			global_ajax_flag = 1;
			return false;
		} 
		var status = $(".share_tips").css("display");
		if(undefined != status && 'none' != status)
		{
			global_ajax_flag = 1;
			return false;
		}
		var page = $("#page").val();
		var url = "get_liveshow_scene_more.ajax.php";
		var npage = global_cur_page*1 + 1;
		$.post(url,{page:npage,liveshow_id:return_val.liveshow_id,sort:return_val.sort},function(data){
			if("失败" != $.trim(data))
			{
				next_page_obj.ajaxCallback(true);
				topic_page_echo(npage, global_sum_page);
				$(".live_list").append(data);
				var more_flag = $("#more_flag").val();
				$("#more_flag").remove();
					$(".img_live").each(function(){
						var count = $(this).attr("count");
						if(1 < count) $(this).css({"height":$(this).width()+"px"});
					});
					$(".img_link").css({"height":$(".img_link").width()*0.66+"px"});
				
				if(1 != more_flag)
				{
					$(".moblie_visible").hide();
				}
				
				$("img").bind("error", img_reset_domain);
				init_story_img();
				show_big_pic();
				$(window).scroll(init_story_img);
				$(".sound_img").unbind("click");
				$(".sound_img").bind("click", function(){
					if(null != audio)
					{
						audio.pause();
						audio = null;
						$(this).attr("src", "http://p.yunshuren.com/liveshow/on_air/images/sound.png");
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
						$(this).attr("src", "http://p.yunshuren.com/liveshow/on_air/images/sound.gif");
						audio.play();
						var that = this;
						audio.onended = function(){
							$(that).attr("src", "http://p.yunshuren.com/liveshow/on_air/images/sound.png");
						}
					}
				});
				rewrite_img();
				if($(window).width()<=768){
					$(".video_box").css('height',$(".video_box").width()*0.5625+'px');
				}
				check_video();
				var length = $(".video_box").length;
				for(i=0;i<=length;i++)
				{
					if(undefined != document.getElementsByClassName('vjs-default-skin')[i])
					{
						videojs(document.getElementsByClassName('vjs-default-skin')[i], {}, function() {
							
						});
					}
				}
				/*$(".submit_comment_btn").unbind("click");
				$(".submit_comment_btn").click(function(){
					var user_login_flag = $("#user_login_flag").val();
					var scene_id = $(this).attr("aid");
					if(1 == user_login_flag)
					{
						var url = "submit_comment-"+return_val.liveshow_id+"-"+scene_id+".html";
						window.open(url);
					}
					else{
						hide_all();
						no_login_deal();
					}
				});
				$(".item_vote").unbind("click");
				$(".item_vote").bind("click", function(){
					init_vote_click(this, no_login_deal, vote_success_deal);
				});
				init_hover();
				init_comment_img();
				show_big_comment_pic();
				$(window).scroll(init_comment_img);*/
			}
		});
	}
	var next_page_obj = new AutoNextPage(ajax_callback);
	
	
	$("#header_img").bind("error",use_local_img);
	
	$(".sound_img").bind("click", function(){
		if(null != audio)
		{
			audio.pause();
			audio = null;
			$(this).attr("src", "http://p.yunshuren.com/liveshow/on_air/images/sound.png");
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
			$(this).attr("src", "http://p.yunshuren.com/liveshow/on_air/images/sound.gif");
			audio.play();
			var that = this;
			audio.onended = function(){
				$(that).attr("src", "http://p.yunshuren.com/liveshow/on_air/images/sound.png");
			}
		}
	});
	
	function init_vote_success_deal(obj, ret, temp_id){
		if(1 == ret[temp_id]["vote_flag"])
		{
			obj.attr("vote", 1);
			obj.find("img").attr("src", "http://p.yunshuren.com/liveshow/on_air/images/like_out.png");
			obj.unbind("hover");
		}
	}
	function no_login_deal(){
		var login_obj = new IndexLoginPlugin(login_option);
	}
	/*$(".submit_comment_btn").click(function(){
		var user_login_flag = $("#user_login_flag").val();
		var scene_id = $(this).attr("aid");
		if(1 == user_login_flag)
		{
			var url = "submit_comment-"+return_val.liveshow_id+"-"+scene_id+".html";
			window.open(url);
		}
		else{
			hide_all();
			no_login_deal();
		}
	});*/
	/**
	登录js初始化
	**/
	var login_option = {
		dataDomain:return_val.dataDomain,
		productHost: location.hostname,
		loginSuccessCallback:function(){
			getUserHead();
			setTimeout(function(){
				init_vote(init_vote_success_deal);
			},500);
			$('.login_div').css('display','none');
			$(".will_show").show();
			
		},
		regSuccessCallback:function(){
			getUserHead();
			$('.login_div').css('display','none');
			$(".will_show").show();
		}
	}
	function vote_success_deal(obj){
		obj.attr("vote", 1);
		obj.find("img").attr("src", "http://p.yunshuren.com/liveshow/on_air/images/like_out.png");
		obj.unbind("hover");
		var num = obj.parent().prev().children().find(".like_count").html()*1 + 1;
		obj.parent().prev().children().find(".like_count").html(num);
	}
	$(".item_vote").bind("click", function(){
		init_vote_click(this, no_login_deal, vote_success_deal);
	});
	init_comment_img();
	show_big_comment_pic();
	$(window).scroll(init_comment_img);
	intro_sub_words();
	init_page1();
	check_video();
});
function check_video(){
	/*var length = $(".video_box").length;
	for(i=0;i<=length;i++)
	{
		var vid = document.getElementsByClassName('vjs-default-skin')[i];
		console.log(vid.className);
		if(undefined != vid) 
		{
			vid.onerror = function(){
				$(this).parents(".video_box").hide();
			}
		}
	}*/
	$(".video_box").each(function(){
		var video_url = $(this).find("video").attr("vi_file");
		var that = this;
		function video_back(status)
		{
			if(404 == status) $(that).parent().hide();
			if(200 == status)
			{
				var img_url = $(that).find("video").attr("poster");
				var img = new Image();
				img.onerror = function(){
					var img_height = $(that).find(".vjs-poster").height();
					var img_width = $(that).find(".vjs-poster").width();
					//$(that).find(".vjs-poster").attr("style", "background-size:"+img_width+"px "+img_height+"px;background-image: url('http://p.yunshuren.com/file/watermark.png');");
					$(that).find(".vjs-poster").attr("style", "background-size:100% 100%;background-image: url('http://p.yunshuren.com/file/watermark.png');");
					$(that).find(".vjs-poster").parent().css("background-color", "#fff");
					//console.log($(that).find("video").attr("poster"));
					//$(that).find("video").style.background ='transparent url("http://p.yunshuren.com/file/watermark.png")  no-repeat';
					//console.log($(that).find(".vjs-poster").attr("style"));
					/*$(that).find("video").attr("poster", "http://p.yunshuren.com/file/watermark.png");
					$(that).find("video").get(0).load();
					alert($(that).find("video").attr("vi_file"));
					videojs($(that).find("video"), {}, function() {
						
					});
					console.log("in");*/
				}
				img.src = img_url;
			}
		}
		video_obj = new checkVideo(video_url, video_back, "");
		/*var video = document.createElement("video");
		video.onerror = function(){
			$(that).hide();
			video = null;
		}
		video.oncanplaythrough = function(){
			var img_url = $(that).find("video").attr("poster");
			var img = new Image();
			img.onerror = function(){
				$(that).find("video").attr("poster", "http://p.yunshuren.com/file/watermark.png");
				videojs(document.getElementsByClassName('vjs-default-skin')[i], {}, function() {
					
				});
			}
			img.src = img_url;
			video = null;
		}
		video.src = video_url;*/
		
	});
}
function moving(){
	$(".news_list").css({"top":0+"px"});
	$(".news_list").animate({"top":-$(".list_info").height()+"px"});
	$(".news_list").append($(".news_list>:first-child"));
	
}
function IndexLoginPlugin(option)
{
	this.prototype = new LoginPlugin(option);
	this.prototype.init();
}

function topic_page_echo(npage, sum_page){
	$(".load").hide();
	$(".page").removeClass("now");
	var link_url = $("#link_url").val();
	$(".page").each(function(){
		var cur_page = $(this).children().html();
		if(1 == cur_page) $(this).children().attr("href", link_url.substr(0, link_url.length-1)+".html");
		if(cur_page == npage) $(this).addClass("now");
	});
	
	var prev_page = npage*1 - 1;
	var next_page = npage*1 + 1;
	if(1 == prev_page) $("#prev_page").attr("href", link_url.substr(0, link_url.length-1)+".html");
	else $("#prev_page").attr("href", link_url+"p"+prev_page+".html");
	$("#next_page").attr("href", link_url+"p"+next_page+".html");
	if(npage == sum_page)
	{
		$("#next_page").hide();
		$("#next_page").parent().prev().hide();
		
	}
}