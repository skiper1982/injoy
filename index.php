<?php
/*
	Template Name: DEFAULT
*/
?>
<?php get_header(); ?>
<?php $lang= 'es' ?>
<div id="fb-root"></div>
<div id='blog'>
	<div class='banner'>
		<img src='<?php bloginfo('template_directory')?>/img/sliderabout.png' class='on' />
	</div>
	<div class='container'>
		<section class='posts'>
			<div class='space'></div>
			<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();
					//if(!in_category("tour")&&!in_category("private-charters")&&!in_category("promos")){ 
					?>
						<article>				
							<a href='<?php the_permalink() ?>' class='img' title='<?php the_title()?>'><?php if ( has_post_thumbnail() ) { the_post_thumbnail('blog-thumb'); }else{?><img src='<?php bloginfo('template_directory')?>/img/blog-img.jpg'> <?php } ?></a>
							<div class='clear'></div>
							<h2><a href='<?php the_permalink() ?>' title='<?php the_title()?>'><?= the_title()?></a></h2>
							<p class='date'><?= get_mes(get_the_time('n'),$lang) ?> <?php the_time('j') ?>, <?php the_time('Y') ?></p>
							<p class='autor'><?= $lang=="es"?"Por":"By"?> <span><?php the_author();?></span> <?php the_tags( $lang=="es"?"en ":"in "."<span>",", ","</span>.")?></p>
							<div class='content'> <?php the_excerpt();?> <a class='read_more' href='<?php the_permalink() ?>'>Leer mas</a> </div>
						</article>
					<?php //}
				}
			}else{echo "No Posts";}
			wp_reset_query();?>
		</section>
		<aside class='social'>
			<div class='search'></div>
			<div class='snet'>
				<div class='facebook'></div>
				<div class='twitter'></div>
				<div class='irc'></div>
				<div class='clear'></div>
			</div>
			<div class='cat'>
				<a href='#' class='tab on'>Popular</a>
				<a href='#' class='tab'>Recientes</a>
				<div class='clear'></div>
				<div class='post-cat on'>
					<div class='image'><?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(52,52)); } ?></div>
					<?php query_posts( 'posts_per_page=2' ); while (have_posts()) : the_post(); ?>
						<div class="article">
							<a class='title' href='<?php the_permalink() ?>' ><?php the_title(); ?></a>
							<p class='date'><?= get_mes(get_the_time('n'),$lang) ?> <?php the_time('j') ?>, <?php the_time('Y') ?></p>
						</div>						
					<?php endwhile; ?>					
				</div>
				<div class='post-cat'>
					<div class='image'><?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(52,52)); } ?></div>
					<?php query_posts( 'posts_per_page=2' ); while (have_posts()) : the_post(); ?>
						<div class="article">
							<a class='title' href='<?php the_permalink() ?>' ><?php the_title(); ?></a>
							<p class='date'><?= get_mes(get_the_time('n'),$lang) ?> <?php the_time('j') ?>, <?php the_time('Y') ?></p>
						</div>						
					<?php endwhile; ?>					
				</div>	
				<div class='clear'></div>		
			</div>
			<div class='gallery'></div>
		</aside>
	</div>
</div>
<?php get_footer(); ?>