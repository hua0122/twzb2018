var CommonFun = {
	init:function(){
		this.menuSwitch();
	},
	//infor为提示信息 fn为回调函数
	selfConfirm:function(infor,fn){
		var html = '<div id="confirm">\
						<div class="infor">\
							<p>'+infor+'</p>\
							<ul>\
								<li><span class="sure">确定</span></li>\
								<li><span class="cancel">取消</span></li>\
							</ul>\
						</div>\
					</div>';
		$('body').append(html);
		$('#confirm').fadeIn(function(){
			$("#confirm li span.sure").on("click",function(){
				fn();
				$("#confirm").remove();
			});
			$("#confirm li span.cancel").on("click",function(){
				$("#confirm").remove();
			});
		});
	},
	//单纯的提示框信息
	selfAlert:function(infor){
		var html = '<div id="confirm">\
						<div class="infor">\
							<p>'+infor+'</p>\
							<ul>\
								<li style="width: 100%;"><span style="margin:0 auto;float: none;" class="sure">确定</span></li>\
							</ul>\
						</div>\
					</div>';
		$('body').append(html);
		$('#confirm').fadeIn(function(){
			$("#confirm li span.sure").on("click",function(){
				$("#confirm").remove();
			});
		});

	},
	//导航栏的切换
	menuSwitch:function(){
		$("header li a.menu-btn").on("click",function(){
			$("#menu-switch").fadeIn();
		});
		$("#menu-switch .menu-title img").on("click",function(){
			$("#menu-switch").hide();
		});
	}
}