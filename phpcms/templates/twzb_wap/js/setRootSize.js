var RootSize = function(){
	this.init();
}
RootSize.prototype = {
	init:function(){
		this.isFirst = true;
		this.setRootSize();
		this.bindEvent();
	},
	setRootSize:function(){
		var w = $(window).width();
		var h = $(window).height();
		if(w>768 && !this.isFirst){
			return;
		}
		this.isFirst = false;
		this.fontSize = w>640?100:(w/6.4);
		$('html').css({'font-size':this.fontSize+'px'});
	},
	bindEvent:function(){
		$(window).on('resize',function(){
			this.setRootSize();
		}.bind(this));
	}
}