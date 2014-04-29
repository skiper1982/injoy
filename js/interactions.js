
var px1=0;
var px2=73;
var px3=-32;
var timer;
var aux;
$(document).ready(function(e){
	$(".gallery img").load(function(e)
	{
		$(".gallery").height($(".gallery img").height());
	});
	banner_init();
	change_inputs_type()
	 $(".book-here").click(function()
	 {
		$("html,body").animate({scrollTop: 0},400,function()
		{
			$("#booking .submit").click();
		});
	 	// $("#booking #type_input").focus();
	 });
	$(window).resize(function(e)
	{
		$("#alerta-campo").fadeOut(100);
		$("#booking input,#booking select").css("border","none");
		nav_height();
	});

	$(window).scroll(function(e)
	{
		$("#alerta-campo").fadeOut(100);
		$("#booking input,#booking select").css("border","none");
	});
	$("#menu").click(function(e)
	{
		$("header nav ul").slideToggle("fast");
	});
	$(".gallery .arrow.right").click(function(e)
	{
		e.preventDefault();
		clearTimeout(timer);
		var size=$("#home .gallery .reel.img img").size();
		var actual=$("#home .gallery .reel.img img.on").index();
		var next=(actual + 1) % size;
		move_banner(actual,next);
		banner_init();
	});
	$(".gallery .arrow.left").click(function(e)
	{
		e.preventDefault();
		clearTimeout(timer);
		var size=$("#home .gallery .reel.img img").size();
		var actual=$("#home .gallery .reel.img img.on").index();
		var next=(actual -1);
		next= next<0?size-1:next;
		move_banner(actual,next);
		banner_init();
	});
	$("header nav ul li a.submenu").click(function(e)
	{
		e.preventDefault();
		$(this).next().slideToggle("fast");
	});
	$("#blog .social .tabs ul li a").click(function(e)
	{
		e.preventDefault(e);
		$("#blog .social .tabs ul li a.on").removeClass("on");
		$(this).addClass("on");
		$("#blog .social .tabs .tab.on").removeClass("on");
		$($(this).attr("href")).addClass("on");

	});
	$("#blog .social .redes a.header").click(function(e)
	{
		e.preventDefault(e);
		$(this).toggleClass("on");
		$(this).next().slideToggle();

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
	$("#charters .privados .list li a").click(function(e){

		e.preventDefault(e);
		$("#charters .privados .list li.on").removeClass("on");
		$("#charters .privados .fichas article.on").removeClass("on");
		$($(this).attr("href")).addClass("on");
		$(this).parent().addClass("on");
	});
	$("#contact #form1").submit(function(e)
	{
		e.preventDefault();
		$.post($(this).attr("action"),
		{
			subject : $("#subject").val(),
			Message : $("#Message").val(),
			Email : $("#Email").val(),
			Name : $("#Name").val()
		},function(r)
		{
			$(".note").hide();
			$("." + r).show();
		});
	});
	$("#booking").click(function(e)
	{
		$("#alerta-campo").fadeOut(100);
		$("#booking input,#booking select").css("border-color","transparent");
	});
	$("#booking").submit(function(e)
	{
		e.preventDefault();
		var date=$(this).find("#date_input_fake");
		var type=$(this).find("#type_input");
		if(type.val()=="")
		{
			mostrar_alerta(type);
			type.css("border","1px solid white");

		}
		else if(date.val()=="")
		{
			mostrar_alerta(date);
			date.css("border","1px solid white");
		}
		else
		{

			$(this).unbind("submit").submit();
		}

	});
	/*$('#home .gallery').hover(function(e){
		$('#home .gallery .arrow').fadeIn(300);
	}).mouseout(function(e){
		$('#home .gallery .arrow').fadeOut(200);
	});*/
	$("#creditcard #creditcard-form").submit(function(e){e.preventDefault();});

	$("#creditcard #creditcard-form").validate({
		submitHandler: function(form){
			$("#creditcard #creditcard-form button").hide();
			$("#creditcard #creditcard-form .loader").show();
			$.post(form.action,{
					token : $("#token").val(),
					owner_tc_input : $("#owner_tc_input").val(),
					tc_number_input : $("#tc_number_input").val(),
					tc_type : $("#tc_type").val(),
					expiration : $("#month_expiration_date").val()+"/"+$("#year_expiration_date").val(),
					csv_input : $("#csv_input").val(),						
				},function(result){
					if(result.confirm)
					{
						window.location = "http://booking.hotelaldeathai.com/"+$("#current-lang").val()+"/cart/success";
					}else
					{
						window.location = "http://booking.hotelaldeathai.com/"+$("#current-lang").val()+"/cart/error";
					}
				},"json");
		}
		// showErrors: function(errorMap, errorList){
		// }
	});
	setTimeout("nav_height()",1000);


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
	var imgs=$("#home .gallery .reel.img img");
	var texts=$("#home .gallery .reel.text .words");
	var promo=$("#home #promo-online");
	imgs.eq(actual).fadeOut(1000).removeClass('on');
	texts.eq(actual).fadeOut(1000).removeClass('on');
	promo.fadeOut(500,function(){$(this).attr("class","slide_"+next);promo.fadeIn(500);});
	imgs.eq(next).fadeIn(1000).addClass('on');
	texts.eq(next).fadeIn(1000).addClass('on');
}
function nav_height()
{
	// $("header nav").width($("header .container").width()-171);
	if($("header").width()<601)
	{
		//$("header nav").height($(window).height());

	}
	else
	{
		//$("header nav").css("height","100%");
		$("header").attr("style","");
		$(".open_nav").removeClass("on");
	}
	$(".gallery").height($(".gallery img").height());

	if($(window).width()<$(".gallery img").width()){
		var left=($(".gallery img").width()-$(window).width())/2;
		$(".gallery img").css("left","-" + left + "px");
	}else{$(".gallery img").css("left","0");}

	$("#offers .box article .info").width($("#offers .box article").width()-270);
}
function mostrar_alerta(campo){
	$("#alerta-campo").css("top",(campo.offset().top - $("#alerta-campo").height()) + "px");
	$("#alerta-campo").css("left",(campo.offset().left + (campo.width()/2) - ($("#alerta-campo").width()/2)) +  "px");
	$("#alerta-campo").fadeIn(100);
}
function set_datepickers()
{
	$( "#booking .box-select #date_input_fake" ).datepicker({
		showOn: "button",
		buttonImage:  $("#template_directory").val() + "/img/calendar.gif",
		buttonImageOnly: true,
		altField: '#date_input',
		altFormat : 'yy-mm-dd',
		minDate:0
	});
}
function change_inputs_type()
{
	// console.log($.browser);
	if(($.browser.safari || $.browser.opera || $.browser.webkit) && $(window).width()<750 )
	{
		$("#date_input_fake").attr("type","date").attr("disabled",false);
		$("#date_input_fake").change(function()
		{
			$("#date_input").val($(this).val());
		});
	}
	else
	{
		set_datepickers();
	}
	
}