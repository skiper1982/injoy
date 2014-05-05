var timer_banner_1;
var px1=0;
var px2=73;
var px3=-32;
var timer;
var aux;
$(document).ready(function(e){
	timer_banner_1=setTimeout("init_move_banner1()",8000);
});
function init_move_banner1(){
	move_banner1(true);
}
function move_banner1(right){
	clearTimeout(timer_banner_1);
	var imgs = $(".bannerbanner.style1 img");
		var size =imgs.size();
		if(size>1){
			var actual= $(".banner.style1 img.on").index();
			var next =right?(actual+1)%size:actual-1;
			next=next<0?size-1:next;
			imgs.eq(next).show();
			imgs.eq(actual).fadeOut(800,function()
			{
				$(this).removeClass("on");
				imgs.eq(next).addClass("on");
				timer_banner_1=setTimeout("init_move_banner1()",8000);
			});
		}
}
