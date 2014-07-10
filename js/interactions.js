$(document).ready(function(e){
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
