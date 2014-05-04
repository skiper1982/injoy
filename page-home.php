<?php
/*
	Template Name: HOME
*/
?>
<?php get_header(); ?>
<div id='home'>
	<div class='banner'>
		<img src='<?php bloginfo('template_directory')?>/img/slide1.png' />
	</div>
	<div class='mini-images'>
		<img src='<?php bloginfo('template_directory')?>/img/slide2.png' class='slide1' />
		<img src='<?php bloginfo('template_directory')?>/img/pic4-slide.png' class='slide2' />
		<img src='<?php bloginfo('template_directory')?>/img/slde-3.png' class='slide3' />
		<img src='<?php bloginfo('template_directory')?>/img/slide4.png' class='slide4' />
	</div>
</div>
<?php get_footer(); ?>