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

	$dir = get_bloginfo('template_directory').'/img/services1.png';
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
?>
