<?php
/*
	Template Name: CATERING
*/
?>
<?php get_header(); ?>
<?php $lang = qtrans_getLanguage();?>
<div id='catering' class='content'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class='line-top'></div>
	<div class='banner style1'><div class='banner-container'><?php $on = 'on'; $style="style='display: inline;'"; if(get_post_gallery()) { ?>
		<?php $gallery = get_post_gallery(get_the_ID(), false ); ?>
		<?php  foreach( $gallery['src'] AS $src ){ ?>
			<img src="<?php echo $src; ?>" class="<?= $on ?>" <?= $style ?> alt="Cancun Weddings" />
			<?php $on = '';?>
			<?php $style = ''; ?>
		<?php } ?>		
		<?php } ?>
		<div class='content-white'>
			<p class='title'><?php echo get_post_meta(get_the_ID(),"banner_title_{$lang}",true); ?></p>
			<h3><?php echo get_post_meta(get_the_ID(),"banner_subtitle_{$lang}",true); ?></h3>
			<p><?php echo get_post_meta(get_the_ID(),"banner_text_{$lang}",true); ?></p>
		</div>
		<div class='clear'></div>
	</div></div>
	<div class='line-bottom'></div>
	<div class='content-slider'>
		<div class='container'>
			<a href='#' class='arrow-left' id='carousel_prev'></a>
			<p><span class='comilla1'></span><?php echo get_post_meta(get_the_ID(),"quote_home_{$lang}",true); ?><span class='comilla2'></span></p>
			<a href='#' class='arrow-right' id='carousel_next'></a>			
		</div>
	</div>
	<div class='line-coffe'></div>
	<div class='container-catering2'><div id='carousel'>
		<img src='<?php bloginfo('template_directory')?>/img/catering/cat1.png' width='218' height='224' />
		<img src='<?php bloginfo('template_directory')?>/img/catering/cat2.png' width='218' height='224'/>
		<img src='<?php bloginfo('template_directory')?>/img/catering/cat3.png' width='218' height='224'/>
		<img src='<?php bloginfo('template_directory')?>/img/catering/cat5.png' width='218' height='224'/>
		<img src='<?php bloginfo('template_directory')?>/img/catering/cat6.png' width='218' height='224'/>
		<img src='<?php bloginfo('template_directory')?>/img/catering/cat7.png' width='218' height='224'/>
		<img src='<?php bloginfo('template_directory')?>/img/catering/cat1.png' width='218' height='224'/>
		<img src='<?php bloginfo('template_directory')?>/img/catering/catering-subslide1.png' width='218' height='224'/> 
		<img src='<?php bloginfo('template_directory')?>/img/catering/catering-subslide2.png' width='218' height='224'/> 
		<img src='<?php bloginfo('template_directory')?>/img/catering/catering-subslide3.png' width='218' height='224'/> 
		<img src='<?php bloginfo('template_directory')?>/img/catering/catering-subslide4.png' width='218' height='224'/> 
		<img src='<?php bloginfo('template_directory')?>/img/catering/catering-subslide5.png' width='218' height='224'/> 
		<img src='<?php bloginfo('template_directory')?>/img/catering/catering-subslide6.png' width='218' height='224'/> 
	</div><div class='clear'></div></div>
	<div class='container-catering'>
		<div class='colum'>
			<div class='green-text'>
				<p><?php echo get_post_meta(get_the_ID(),"green_text_{$lang}",true); ?></p>
			</div>
			<img class='banner1' src='<?php bloginfo('template_directory')?>/img/catering/cat8.png' />
			<div class='normal-text'>
				<p><?php echo get_post_meta(get_the_ID(),"normal_text1_{$lang}",true); ?>
					<br />
					<br />
					<?php echo get_post_meta(get_the_ID(),"normal_text2_{$lang}",true); ?>
				</p>
			</div>
		</div>
		<div class='colum last'>
			<div class='servicios'>
				<h2><?php echo get_post_meta(get_the_ID(),"services_title_{$lang}",true); ?></h2>
				<ul>
					<li><?php echo get_post_meta(get_the_ID(),"services_option1_{$lang}",true); ?></li>
					<li><?php echo get_post_meta(get_the_ID(),"services_option2_{$lang}",true); ?></li>
					<li><?php echo get_post_meta(get_the_ID(),"services_option3_{$lang}",true); ?></li>
					<li><?php echo get_post_meta(get_the_ID(),"services_option4_{$lang}",true); ?></li>
					<li><?php echo get_post_meta(get_the_ID(),"services_option5_{$lang}",true); ?></li>
					<li><?php echo get_post_meta(get_the_ID(),"services_option6_{$lang}",true); ?></li>
				</ul>
			</div>
			<img class='logo' src='<?php bloginfo('template_directory')?>/img/catering/veggie.png' />
			
			<div class='clear clear-no-display'></div>
			<img class='chef' src='<?php bloginfo('template_directory')?>/img/catering/chef.png' />
			<div class='vegans'><p><?php echo get_post_meta(get_the_ID(),"veggies_text_{$lang}",true); ?></p></div>
			<img class='pina' src='<?php bloginfo('template_directory')?>/img/catering/pinas.png' />
		</div>		
	</div>
	<div class='clear'></div>
<?php endwhile; endif;?></div>
<?php get_footer(); ?>
