<?php
add_action('init','register_menus');
add_theme_support('post-thumbnails' );
add_shortcode('specialist_content','specialist_content_func');
add_shortcode('specialist_left_info','specialist_content_left_func');
add_shortcode('specialist_right_info','specialist_content_right_func');
add_shortcode('home_banner','home_banner_func');
function register_menus() {
	register_nav_menus(array(
		'header-menu' => __('Header Menu'),
		'footer-menu' => __('Footer Menu'),
	));
}
function specialist_content_func($attrs,$content = ""){
	return $content;
}
function specialist_content_left_func($attrs,$content = ""){
	$dir = get_bloginfo('template_directory');
	return "<img src='{$dir}/img/home/dani.png' class='hidden-image-home'/><div class='column-left'>$content</div>";
}
function specialist_content_right_func($attrs,$content = ""){
	return "<div class='column-right'>$content</div>";
}

function candy_box1_func($attrs,$content = ""){
	return "<div class='box first'></div>";
}
function candy_box2_func($attrs,$content = ""){
	return "<div class='box'></div>";
}
function candy_box3_func($attrs,$content = ""){
	return "<div class='box last'></div>";
}

?>
