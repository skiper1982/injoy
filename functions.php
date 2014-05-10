<?php
add_action('init','register_menus');
add_theme_support( 'post-thumbnails' );
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
			$aux=$lang=="es"?"Enero":"January";break;
		case 2:
			$aux=$lang=="es"?"Febrero":"February";break;
		case 3:
			$aux=$lang=="es"?"Marzo":"March";break;
		case 4:
			$aux=$lang=="es"?"Abril":"April";break;
		case 5:
			$aux=$lang=="es"?"Mayo":"May";break;
		case 6:
			$aux=$lang=="es"?"Junio":"Jun";break;
		case 7:
			$aux=$lang=="es"?"Julio":"July";break;
		case 8:
			$aux=$lang=="es"?"Agosto":"August";break;
		case 9:
			$aux=$lang=="es"?"Septiembre":"September";break;
		case 10:
			$aux=$lang=="es"?"Octubre":"October";break;
		case 11:
			$aux=$lang=="es"?"Noviembre":"November";break;
		case 12:
			$aux=$lang=="es"?"Diciembre":"December";break;
	}
	return $aux;
}
?>
