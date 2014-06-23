<?php
/*
	Template Name: SPECIALIST
*/
?>
<?php get_header(); ?>
<?php $lang = qtrans_getLanguage();?>
<div id='specialist' class='content'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class='line-top'></div>
	<div class='banner style1'>
		<img src='<?php bloginfo('template_directory')?>/img/home/slide-home.png' class='on' />
		<div class='content-white'>
			<p class='title'><?php echo get_post_meta(get_the_ID(),"banner_title_{$lang}",true); ?></p>
			<h3><?php echo get_post_meta(get_the_ID(),"banner_subtitle_{$lang}",true); ?></h3>
			<p><?php echo get_post_meta(get_the_ID(),"banner_text_{$lang}",true); ?></p>
		</div>
		<div class='clear'></div>
	</div>
	<div class='pictures'>
		<img src='<?php bloginfo('template_directory')?>/img/home/2.png' class='home-image1' />
		<img src='<?php bloginfo('template_directory')?>/img/home/3.png' class='home-image2' />
		<img src='<?php bloginfo('template_directory')?>/img/home/4.png' class='home-image3' />
		<img src='<?php bloginfo('template_directory')?>/img/home/5.png' class='home-image4' />
		<div class='clear'></div>
	</div>
	<div class='line-bottom'></div>
	<div class='text-banner'>
		<p><span class='comilla1'></span> <span><?php echo get_post_meta(get_the_ID(),"quote_home_{$lang}",true); ?></span> <span class='comilla2'></span></p>
		<div class='clear'></div>
		<p class='author'><?php echo get_post_meta(get_the_ID(),"quote_author_{$lang}",true); ?></p>
	</div>
	<div class='conten-text'>
		<?php the_content(); ?>	
		<div class='center-column'>
			<img src='<?php bloginfo('template_directory')?>/img/home/dani.png' />
		</div>
	</div>
	<div class='clear'></div>
<?php endwhile; endif;?></div>
<?php get_footer(); ?>
