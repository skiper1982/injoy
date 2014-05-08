<?php
/*
	Template Name: SERVICES
*/
?>
<?php get_header(); ?>
<div id="services">
	<div class='banner style3'>
		<img src='<?php bloginfo('template_directory')?>/img/sliderservices.png' class='on' />
		<img src='<?php bloginfo('template_directory')?>/img/sliderservices.png' style='display:none' />
		
		<div class='box-bullets'></div>
	</div>

	<div class='contenido'>
		<div class='imagen'><img src='<?php bloginfo('template_directory')?>/img/leftservices.png' /></div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif;?>		
		<!--div class='colum'>
			<div class='space'><h1 class="titleservices">CONOCE NUESTROS SERVICIOS</h1></div>
			<img src='<?php bloginfo('template_directory')?>/img/services1.png' class='slide1' />
		</div>
		<div class='colum'>
			<div class='space'></div>
			<img src='<?php bloginfo('template_directory')?>/img/services2.png' class='slide1' />
		</div>
		<div class='colum'>
			<div class='space'></div>
			<img src='<?php bloginfo('template_directory')?>/img/services3.png' class='slide1' />
		</div-->
		<div class='clear'></div>			
	</div>
</div>
<?php get_footer(); ?>
