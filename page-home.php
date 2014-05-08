<?php
/*
	Template Name: HOME
*/
?>
<?php get_header(); ?>
<div id='home'>
	<div class='banner style1'>
		<img src='<?php bloginfo('template_directory')?>/img/slide1.png' class='on' />
		<img src='<?php bloginfo('template_directory')?>/img/slide1.png' style='display:none' />
		<img src='<?php bloginfo('template_directory')?>/img/slide1.png' style='display:none'/>
		<img src='<?php bloginfo('template_directory')?>/img/slide1.png' style='display:none'/>
		<img src='<?php bloginfo('template_directory')?>/img/slide1.png' style='display:none'/>
		<img src='<?php bloginfo('template_directory')?>/img/slide1.png' style='display:none'/>
		<div class='box-bullets'></div>
	</div>
	<div class='mini-images'>
		<img src='<?php bloginfo('template_directory')?>/img/slide2.png' class='slide1' />
		<img src='<?php bloginfo('template_directory')?>/img/pic4-slide.png' class='slide2' />
		<img src='<?php bloginfo('template_directory')?>/img/slde-3.png' class='slide3' />
		<img src='<?php bloginfo('template_directory')?>/img/slide4.png' class='slide4' />
	</div>



	<div class='content'>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif;?>		
	</div>
</div>
<?php get_footer(); ?>