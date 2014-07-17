<?php
/*
	Template Name: SPECIALIST
*/
?>
<?php get_header(); ?>
<?php $lang = qtrans_getLanguage();?>
<div id='specialist' class='content'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class='line-top'></div>
	<div class='banner style1'><?php $on = 'on'; $style="style='display: inline;'"; if(get_post_gallery()) { ?>
		<?php $gallery = get_post_gallery(get_the_ID(), false ); ?>
		<?php  foreach( $gallery['src'] AS $src ){ ?>
			<img src="<?php echo $src; ?>" class="<?= $on ?>" <?= $style ?> alt="Cancun Weddings" />
			<?php $on = '';?>
			<?php $style = ''; ?>
		<?php } ?>
		<div class='content-white'>
			<p class='title'><?php echo get_post_meta(get_the_ID(),"banner_title_{$lang}",true); ?></p>
			<h3><?php echo get_post_meta(get_the_ID(),"banner_subtitle_{$lang}",true); ?></h3>
			<p><?php echo get_post_meta(get_the_ID(),"banner_text_{$lang}",true); ?></p>
		</div>
		<div class='clear'></div>
	<?php } ?></div>
	<div class='pictures'>
		<img src='<?php bloginfo('template_directory')?>/img/home/2.png' class='home-image1' />
		<img src='<?php bloginfo('template_directory')?>/img/home/3.png' class='home-image2' />
		<img src='<?php bloginfo('template_directory')?>/img/home/4.png' class='home-image3' />
		<img src='<?php bloginfo('template_directory')?>/img/home/5.png' class='home-image4' />
		<div class='clear'></div>
	</div>
	<div class='line-bottom'></div>
	<div class='text-banner'><div class='container'><div class='reel'>
		<p>
			<span class='comilla'>"</span>
			<?php echo get_post_meta(get_the_ID(),"quote_home1_{$lang}",true); ?> 
			<span class='comilla'>"</span>
			<br />
			<span class='author'><?php echo get_post_meta(get_the_ID(),"quote_author1_{$lang}",true); ?></span>
		</p>

		<p>
			<span class='comilla'>"</span>
			<?php echo get_post_meta(get_the_ID(),"quote_home2_{$lang}",true); ?> 
			<span class='comilla'>"</span>
			<br />
			<span class='author'><?php echo get_post_meta(get_the_ID(),"quote_author2_{$lang}",true); ?></span>
		</p>

		<p>
			<span class='comilla'>"</span>
			<?php echo get_post_meta(get_the_ID(),"quote_home3_{$lang}",true); ?> 
			<span class='comilla'>"</span>
			<br />
			<span class='author'><?php echo get_post_meta(get_the_ID(),"quote_author3_{$lang}",true); ?></span>
		</p>

		<p>
			<span class='comilla'>"</span>
			<?php echo get_post_meta(get_the_ID(),"quote_home4_{$lang}",true); ?> 
			<span class='comilla'>"</span>
			<br />
			<span class='author'><?php echo get_post_meta(get_the_ID(),"quote_author4_{$lang}",true); ?></span>
		</p>		



		<!-- <p><span class='comilla1'></span> <span><?php echo get_post_meta(get_the_ID(),"quote_home_{$lang}",true); ?></span> <span class='comilla2'></span></p> -->
		<!-- <p><span class='comilla1'></span> <span><?php echo get_post_meta(get_the_ID(),"quote_home_{$lang}",true); ?></span> <span class='comilla2'></span></p> -->
		<!-- <p><span class='comilla1'></span> <span><?php echo get_post_meta(get_the_ID(),"quote_home_{$lang}",true); ?></span> <span class='comilla2'></span></p> -->
		<!-- <p><span class='comilla1'></span> <span><?php echo get_post_meta(get_the_ID(),"quote_home_{$lang}",true); ?></span> <span class='comilla2'></span></p> -->
	</div></div></div>
	<div class='conten-text'>
		<?php
			$pattern = get_shortcode_regex();
			preg_match_all('/'.$pattern.'/s', get_the_content(),$matches);
			foreach($matches as $match){
				foreach($match as $key=>$row){
					if($row == 'specialist_content'){
						echo do_shortcode($matches[0][$key]);
					}else if($row == 'specialist_left_info'){
						echo do_shortcode($matches[0][$key]);
					}else if($row == 'specialist_right_info'){
						echo do_shortcode($matches[0][$key]);
					}
				}
			}
		?>
		<div class='center-column'>
			<img src='<?php bloginfo('template_directory')?>/img/home/dani.png' />
		</div>
	</div>
	<div class='clear'></div>
<?php endwhile; endif;?></div>
<?php get_footer(); ?>
