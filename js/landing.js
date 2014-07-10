
var px1=0;
var px2=73;
var px3=-32;
var timer;
var aux;

/***********************************************/
$(document).ready(function(e){
	$("#privacy").click(function(e){
		e.preventDefault();
		var contenido = $("#politics_content").html();
		$("#sign").html(contenido);
		$("#opacity").fadeIn(600);
	});
});

$(document).ready(function(e){
	$("#sign").click(function(e){
		$("#opacity").fadeOut(500);
	});
});

$(document).ready(function(e){
	$("#opacity").click(function(e){
		$("#opacity").fadeOut(600);
	});
});

/***********************************************/
$(document).ready(function(e){
	$(".gallery img").load(function(e)
	{
		$(".gallery").height($(".gallery img").height());
	});
	banner_init();
	$(".gallery .arrow.right").click(function(e){
		e.preventDefault();
		clearTimeout(timer);
		var size=$(".gallery img").size();
		var actual=$(".gallery img.on").index();
		var next=(actual + 1) % size;
		move_banner(actual,next);
		banner_init();
	});
	$(".gallery .arrow.left").click(function(e)
	{
		e.preventDefault();
		clearTimeout(timer);
		var size=$(".gallery img").size();
		var actual=$(".gallery img.on").index();
		var next=(actual -1);
		next= next<0?size-1:next;
		move_banner(actual,next);
		banner_init();
	});
});
function banner_init()
{
	timer=setTimeout("banner()",8000);

}
function banner()
{	
	timer=setTimeout("banner()",8000);
	$(".gallery .arrow.right").click();
}
function move_banner(actual,next)
{
	var imgs=$(".gallery img");
	imgs.eq(actual).fadeOut(1000).removeClass('on');
	imgs.eq(next).fadeIn(1000).addClass('on');
}