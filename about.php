<?php
/*
	Template Name: ABOUT US
*/
?>
<?php get_header(); ?>
<div id="about-us">
	<div class='banner style2'>
		<img src='<?php bloginfo('template_directory')?>/img/sliderabout.png' class='on' />
		<img src='<?php bloginfo('template_directory')?>/img/sliderabout.png' style='display:none' />
		
		<div class='box-bullets'></div>
	</div>
	<div class='content'>
 		<div class="contenido">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif;?>
	 	</div>
	 	<img src='<?php bloginfo('template_directory')?>/img/imagen.png' />	 	
	</div>

</div>
<?php get_footer(); ?>