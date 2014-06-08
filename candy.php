<?php
/*
	Template Name: CANDY
*/
?>
<?php get_header(); ?>
<div id='candy' class='content'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class='line-top'></div>
	<div class='banner style1'>
		<img src='<?php bloginfo('template_directory')?>/img/candy/candy-slide.png' class='on' />
		<div class='content-white'>
			<h2><?php echo get_post_meta(get_the_ID(),'banner_title',true); ?></h2>
			<h3><?php echo get_post_meta(get_the_ID(),'banner_subtitle',true); ?></h3>
			<p><?php echo get_post_meta(get_the_ID(),'banner_text',true); ?></p>
		</div>
		<div class='clear'></div>
	</div>
	<div class='line-bottom'></div>
	<div class='content-slider'>
		<div class='container'>
			<a href='#' class='arrow-left'></a>
			<p><span class='comilla1'></span>Buscas la mejor calidad en barras de dulces, postres y pasteles en Cancún, Riviera Maya o Playa del Carmen para tu boda o evento?
				Injoy es la opción <span class='comilla2'></span></p>
			<a href='#' class='arrow-right'></a>			
		</div>
	</div>
	<div class='line-coffe'></div>
	<div class='candy-image'>
		<img src='<?php bloginfo('template_directory')?>/img/candy/can1.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can2.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can4.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can5.png' />
		<img src='<?php bloginfo('template_directory')?>/img/candy/can7.png' />
		<div class='clear'></div>
	</div>
	<div class='candy-menu'>
		<div class='line-top'></div>
		<div class='flower-left-top'></div>
		<div class='flower-left-bottom'></div>
		<div class='flower-right-top'></div>
		<div class='flower-right-bottom'></div>
		<img class='logo' src='<?php bloginfo('template_directory')?>/img/candy/logo.png' />

		<div class='titles'>
			<?php the_content(); ?>
			<!--h2>GRAN SURTIDO DE DULCES Y POSTRES DE LA MEJOR CALIDAD:</h2>
			<p>Dulces Tradicionales de Mexico</p>
			<p>Pasteles para bodas y ocaciones especiales (Cumpleaños y Aniversarios)</p-->
		</div>
		<div class='box-content'>
			<div class='box first'>
				<h2 class='title-desert'>DESSERT BUFFET</h2>
				<p>Crea tu propio buffet de postres, pasteles,
					macarrones, cake pops, browies, mini tortas y
					mucho mas.. una gran 
					variedad de postres para
					crear la mesa mas dulce.</p>
			</div>
			<div class='box'>
				<h2 class='title-cookie'>PASTELES</h2>
				<p>No es una fiesta hasta 
					que hay pastel! De 2, 3 o 
					4 pisos lo que quieras lo hacemos.</p>
			</div>
			<div class='box last'>
				<h2 class='title-candy'>CANDY BUFFET</h2>
				<p>Ofrecemos cinco diferentes 
					temas, diseñado 
					y decorado con productos 
					de alta calidad.
				</p>
			</div>
		</div>
		<div class='transparent-line'></div>
	</div>
<?php endwhile; endif;?></div>
<?php get_footer(); ?>
