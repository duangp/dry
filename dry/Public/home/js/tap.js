$(window).ready(function(){
	$('.tab_menu li').click(function(){
		$(this).addClass('active').siblings().removeClass('active');
		var index=$('.tab_menu li').index(this);
		$('.tab-content div.item').eq(index).show().siblings().hide();
	});
})
