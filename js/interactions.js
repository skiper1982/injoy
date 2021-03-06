var timer
$(document).ready(function(e){
	banner_init();
	init_reel_home_timer();
	$('#size').html($(window).width());
	$(window).resize(function(e){
		var width = $(window).width();
		$('#size').html(width);
		if(width > 665){
			$('header').attr('style','');
			$('header a.open_nav').removeClass('on')
		}
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
	$('.thumbnail-info').click(function(e){
		//$('#top-share').removeClass('hidden');
	})
	$("#contact-form").submit(function(e){
		e.preventDefault();
		$('#contact-form .submit').addClass('hidden');
		$('#contact-form .loader').removeClass('hidden');
		$.post($(this).attr("action"),{
			subject     : $("#subject").val(),
			nationality : $('#nationality').val(),
			skypename   : $('#skypename').val(),
			Message     : $("#Message").val(),
			Email       : $("#Email").val(),
			Name        : $("#Name").val(),
			date        : $("#date").val(),
			knowus      : $("#knowus").val(),
			ajax_contact: true 
		},function(r){
			$(".note").hide();
			$("." + r).show();
			$('#contact-form .submit').removeClass('hidden');
			$('#contact-form .loader').addClass('hidden');
		});
	});
	$("body").on("click",'#see-link',function(e){
		e.preventDefault();
		$('#sharelink').fadeIn('fast').removeClass('hidden');
		$('#link-share').selectText();
	});
	$('#sharelink .close').click(function(e){
		e.preventDefault();
		$('#sharelink').fadeOut('fast').addClass('hidden');
	});

});
jQuery.fn.selectText = function(){
   var doc = document;
   var element = this[0];
   console.log(this, element);
   if (doc.body.createTextRange) {
       var range = document.body.createTextRange();
       range.moveToElementText(element);
       range.select();
   } else if (window.getSelection) {
       var selection = window.getSelection();        
       var range = document.createRange();
       range.selectNodeContents(element);
       selection.removeAllRanges();
       selection.addRange(range);
   }
};
function init_reel_home_timer(){
	setTimeout("init_reel_home(720)",5000);	
}
function init_reel_home(left){
	$('#specialist .text-banner .reel').animate({left:-1*left},"slow",function(){
		left = left + 720
		if(left <= 2160){
			setTimeout("init_reel_home(" + left  + ")",5000);
		}else{
			$('#specialist .text-banner .reel').css('left',0);
			setTimeout("init_reel_home(720)",5000);
		}
	});
}
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

jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function
    $('#carousel').carouFredSel({
			align: 'left',
			items: {
                  	visible: 6,
                   	start: 0
                  },
		    	scroll : {
				items		: 1,
				duration: 1000
			},
			prev : { 
				button : "#carousel_prev",
				key : "left",
				items           : 1,
			},
			next : { 
				button : "#carousel_next",
				key : "right",
				items           : 1,
			}
	});
});

jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function
    $('#carocandy').carouFredSel({
			//width: '100%',
			align: 'left',
			items: {
                   visible: 5,
                   start:0
                   },
            scroll : {
					items: 1,
					duration: 1000
					},
			prev : { 
				button : "#carocandy_prev",
				key : "left",
				items           : 1,
			},
			next : { 
				button : "#carocandy_next",
				key : "right",
				items           : 1,
			}
		});
});
