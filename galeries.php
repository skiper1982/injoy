<?php
/*
	Template Name: GALERIES
*/
?>
<?php get_header(); ?>
<div id='gallery'>
<div class='container-galleries'>
	<h1>GALERÍAS</h1>
	<div class='dot-points'></div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif;?>
</div>
<div class='clear'></div>
</div>
<?php get_footer(); ?>