<?php
/*
	Template Name: DEFAULT
*/
?>
<?php get_header(); ?>
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
							<div class='content'> <?php the_excerpt();?> <a class='read_more' href='<?php the_permalink() ?>'>[...]</a> </div>
						</article>
					<?php //}
				}
			}else{echo "No Posts";}
			wp_reset_query();?>
		</section>
		<aside class='social'>
			
		</aside>
	</div>
</div>
<?php get_footer(); ?>