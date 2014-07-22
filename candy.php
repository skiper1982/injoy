<?php
/*
	Template Name: CANDY
*/
?>
<?php get_header(); ?>
<?php $lang = qtrans_getLanguage();?>
<div id='candy' class='content'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class='line-top'></div>
	<div class='banner style1'><?php $on = 'on'; $style="style='display: inline;'"; if(get_post_gallery()) { ?>
		<?php $gallery = get_post_gallery(get_the_ID(), false ); ?>
		<?php  foreach( $gallery['src'] AS $src ){ ?>
			<img src="<?php echo $src; ?>" class="<?= $on ?>" <?= $style ?> alt="Cancun Weddings" />
			<?php $on = '';?>
			<?php $style = ''; ?>
		<?php } ?>		
		<?php } ?>
		<div class='content-candy'>
			<p class='title'><?php echo get_post_meta(get_the_ID(),"banner_title_{$lang}",true); ?></p>
			<h3><?php echo get_post_meta(get_the_ID(),"banner_subtitle_{$lang}",true); ?></h3>
			<p><?php echo get_post_meta(get_the_ID(),"banner_text_{$lang}",true); ?></p>
		</div>
		<div class='clear'></div>
	</div>
	<div class='line-bottom'></div>
	<div class='content-slider'>
		<div class='container'>
			<a href='#' class='arrow-left' id='carocandy_prev'></a>
			<p><span class='comilla1'></span><?php echo get_post_meta(get_the_ID(),"quote_home_{$lang}",true); ?><span class='comilla2'></span></p>
			<a href='#' class='arrow-right' id='carocandy_next'></a>			
		</div>
	</div>
	<div class='line-coffe'></div>
	<div class='container-candy'><div id='carocandy'>
		<img src='<?php bloginfo('template_directory')?>/img/candy/can1.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can2.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can4.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can5.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can7.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can2.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can5.png' />
	</div><div class='clear'></div></div>
	<div class='candy-menu'>
		<div class='line-top'></div>
		<div class='flower-left-top'></div>
		<div class='flower-left-bottom'></div>
		<div class='flower-right-top'></div>
		<div class='flower-right-bottom'></div>
		<img class='logo' src='<?php bloginfo('template_directory')?>/img/candy/logo.png' />

		<div class='titles'>
			
			<!--h2>GRAN SURTIDO DE DULCES Y POSTRES DE LA MEJOR CALIDAD:</h2>
			<p>Dulces Tradicionales de Mexico</p>
			<p>Pasteles para bodas y ocaciones especiales (Cumpleaños y Aniversarios)</p-->
		</div>
		<div class='box-content'>
			<div class='box first'>
				<h2 class='title-desert'><?php echo get_post_meta(get_the_ID(),"desert_title_{$lang}",true); ?></h2>
				<p><?php echo get_post_meta(get_the_ID(),"desert_text_{$lang}",true); ?></p>
			</div>
			<div class='box'>
				<h2 class='title-cookie'><?php echo get_post_meta(get_the_ID(),"cake_title_{$lang}",true); ?></h2>
				<p><?php echo get_post_meta(get_the_ID(),"cake_text_{$lang}",true); ?></p>
			</div>
			<div class='box last'>
				<h2 class='title-candy'><?php echo get_post_meta(get_the_ID(),"candy_title_{$lang}",true); ?></h2>
				<p><?php echo get_post_meta(get_the_ID(),"candy_text_{$lang}",true); ?></p>
			</div>
		</div>
		<div class='transparent-line'></div>
	</div>
<?php endwhile; endif;?></div>
<?php get_footer(); ?>
