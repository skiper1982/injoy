<?php
add_action('init','register_menus');
add_theme_support('post-thumbnails' );
add_shortcode('service_info','service_info_func');
function register_menus() {
	register_nav_menus(array(
		'header-menu' => __('Header Menu'),
		'footer-menu' => __('Footer Menu'),
	));
}

function service_info_func($attrs,$content = ""){
	if (isset($attrs['title'])){
		$title = "<h1 class='titleservices'>{$attrs['title']}</h1>";
	}
	else{
		$title = '';
	}

	$dir = get_bloginfo('template_directory')."/img/{$attrs['image']}.png";
	return "
		<div class='colum'>
			<div class='space'>$title</div>
			<img src='$dir' class='slide1' />
			<div class='text'>
				$content
			</div>
		</div>
	";
}

function get_mes($mes,$lang)
{
	switch($mes)
	{
		case 1:
			$aux=$lang=="es"?"ENERO":"JANUARY";break;
		case 2:
			$aux=$lang=="es"?"FEBRERO":"FEBRUARY";break;
		case 3:
			$aux=$lang=="es"?"MARZ0":"March";break;
		case 4:
			$aux=$lang=="es"?"ABRIL":"APRIL";break;
		case 5:
			$aux=$lang=="es"?"MAYO":"MAY";break;
		case 6:
			$aux=$lang=="es"?"JUNIO":"JUN";break;
		case 7:
			$aux=$lang=="es"?"JULIO":"JULY";break;
		case 8:
			$aux=$lang=="es"?"AGOSTO":"AUGUSY";break;
		case 9:
			$aux=$lang=="es"?"SEPTIEMBRE":"SEPTEMBER";break;
		case 10:
			$aux=$lang=="es"?"OCTUBRE":"OCTOBER";break;
		case 11:
			$aux=$lang=="es"?"NOVIEMBRE":"NOVEMBER";break;
		case 12:
			$aux=$lang=="es"?"DICIEMBRE":"DECEMBER";break;
	}
	return $aux;
}
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'blog-thumb', 509, 338 ); 
}
?>
