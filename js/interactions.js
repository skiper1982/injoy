$(document).ready(function(e){
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
});
