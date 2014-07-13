var timer
$(document).ready(function(e){
	banner_init();

	$('#size').html($(window).width());
	$(window).resize(function(e){
		var width = $(window).width();
		$('#size').html(width);
	});
	$(".popup_text").click(function(e){
		e.preventDefault();
		$("#overlay").css({"z-index":"7","display":'table'});
		$("#overlay .box .content").html($(this).children('.answer').html());
		var new_height = $(window).height() - 150;
		$("#overlay .box").css("max-height",new_height+"px");
		$("#overlay .box").show();
	});
		
	$("#overlay .clickarea,#overlay .box .close,.zoom-out").live("click",function(e){
		e.preventDefault();
		$("#overlay").css({"z-index":"3","display":'none'});
		$("#overlay .box .content").html("");
		$("#overlay .box").hide();
		$(".details .content").html("");
		$(".details").hide();
	});
	$(".open_nav").click(function(e)
	{
		e.preventDefault();
		if($(this).hasClass("on"))
		{
			$("header").animate({right:100 + "%"},"fast");
			$(this).removeClass("on");
		}
		else
		{
			$("header").animate({right:20 + "%"},"fast");
			$(this).addClass("on");
		}
	});
});
function banner_init(){
	timer=setTimeout("banner()",8000);
}
function banner(){	
	timer=setTimeout("banner()",8000);
	banner_right()
}
function move_banner(actual,next){
	//var texts = $('.content .banner .text-banner')
	var imgs=$(".content .banner img");
	imgs.eq(actual).fadeOut(1200).removeClass('on');
	imgs.eq(next).fadeIn(1000).addClass('on');

	//texts .eq(actual).fadeOut(1200).removeClass('on');
	//texts .eq(next).fadeIn(1000).addClass('on');

}
function banner_right(){
	clearTimeout(timer);
	var size=$(".content .banner img").size();
	var actual=$(".content .banner img.on").index('.content .banner img');
	var next=(actual + 1) % size;
	move_banner(actual,next);
	banner_init();
}
