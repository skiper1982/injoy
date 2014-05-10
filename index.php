<?php
/*
	Template Name: DEFAULT
*/
?>
<?php get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id='blog'>
	<div class='container'>
		<aside class='archives'>
			<p class='title'><?= $lang=="es"?"CATEGORIAS":"CATEGORIES"?></p>
			<ul class='cat'>
				<?php 
				$cat1=get_category_by_slug("promos");
				$cat1=$cat1->cat_ID;
				$cat2=get_category_by_slug("tour");
				$cat2=$cat2->cat_ID;
				$cat3=get_category_by_slug("private-charters");
				$cat3=$cat3->cat_ID;
				wp_list_categories(array("title_li" => "","exclude"=> $cat1.",".$cat2.",".$cat3)); ?>
			</ul>
			<div class='separador'></div>
			<p class='title'><?= $lang=="es"?"ARCHIVOS":"ARCHIVES" ?></p>
			<ul class='archivos'>
				<li>June 2013</li>
				<li>May 2013</li>
				<li>April 2013</li>
			</ul>
		</aside>
		<section class='posts'>
			<?php
			if(have_posts())
			{
				while(have_posts())
				{
					the_post();
					if(!in_category("tour")&&!in_category("private-charters")&&!in_category("promos")){
					?>
			<article>
				<h2><a href='<?php the_permalink() ?>' title='<?php the_title()?>'><?= the_title()?></a></h2>
				<p class='autor'><?= $lang=="es"?"Por":"By"?> <span><?php the_author();?></span> <?php the_tags( $lang=="es"?"en ":"in "."<span>",", ","</span>.")?></p>
				<div class='line-icon'></div>
				<p class='date'><?= get_mes(get_the_time('n'),$lang) ?> <?php the_time('j') ?>, <?php the_time('Y') ?></p>
				<a href='<?php the_permalink() ?>' class='img' title='<?php the_title()?>'><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog-img' ); }else{?><img src='<?php bloginfo('template_directory')?>/img/blog-img.jpg'> <?php } ?></a>
				<div class='content'>
					<?php the_excerpt();?>
				</div>
				<a class='read_more' href='<?php the_permalink() ?>'><?= $lang=="es"?"Leer más":"Continue Reading"?></a>
			</article>
				<?php 
				}
			}
			}else{echo "No Posts";}
			 wp_reset_query();
			 ?>
		</section>
		<aside class='social'>
			<?php require_once "social-buttons.php"; ?>
			<div class='separador'></div>
			<div class='tabs'>
				<ul>
					<li><a href='#tab_1'><?= $lang=="es"?"Entradas":"Posts"?></a></li>
					<li><a href='#tab_2' class='on'>Twitter</a></li>
					<li class='last-child'><a href='#tab_3'><?= $lang=="es"?"Etiquetas":"Tags"?></a></li>
				</ul>
				<div class='clear'></div>
				<div id="tab_1" class='tab'>
				<?php
				if(have_posts())
				{
					while(have_posts())
					{
					the_post();
					if(!in_category("tour")&&!in_category("private-charters")&&!in_category("promos")){
					?>
					<a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><div class='post'>
						<p class='content'><?php the_title(); ?></p>
						<p class='date'><?= get_mes(get_the_time('n'),$lang) ?> <?php the_time('j') ?>, <?php the_time('Y') ?></p>
					</div></a>
					<?php 
					}
				}
			}else{echo "No posts";}
			 wp_reset_query();
			 ?>
				</div>
				<div id="tab_2" class='tab on'>
					<a class="twitter-timeline"  href="https://twitter.com/sailing_tours"  data-widget-id="398524351613370368">Tweets por @sailing_tours</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



				</div>
				<div id="tab_3" class='tab'>
					<p>
					<?php $valores = array( 'smallest' => 15, 'largest' => 22, 'unit' => 'px', 'orderby' => 'name', 'order' => 'ASC'); wp_tag_cloud($valores); ?>
					</p>
				</div>
			</div>
			<div class='separador'></div>
			<div class='redes'>
				<a href='#' class='header on'>Facebook</a>
				<div class='box'>
					<div class="fb-like-box" data-href="https://www.facebook.com/AlbatrosSailAway"  data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
				</div>
			</div>
		</aside>
	</div>
</div>
<?php get_footer(); ?>