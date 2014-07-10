<?php
/*
	Template Name: LANDING PAGE
*/
?>
<!-- Header -->
<?php
	$params = new stdClass();
	$params->adults = 2;
	$params->children = 0;
	$params->date = date('Y-m-d',strtotime('now +2'));
	$params->currency_id = 5;
	$params->categories = array(1);
	$params->coupon="10off";
	$m = urlEncode(json_encode($params));
?>
<?php $lang= qtrans_getLanguage();?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<meta charset="UTF-8">
	<link href='<?php bloginfo('template_directory')?>/css/jquery.ui.css' rel='stylesheet'/>
	<link href='<?php bloginfo('template_directory')?>/css/landing.css' rel='stylesheet'/>
	<title><?php single_post_title(); ?></title>

	<script src='<?php bloginfo('template_directory') ?>/js/jquery.js' ></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.ui.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.validate.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jQuery.migrate.min.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/landing.js'></script>



	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" type="image/x-icon"/>	
</head>
<body class='language_<?= $lang ?>'>

<div id="opacity">
	<div id="sign">
		 <!-- <img src="<?php bloginfo("template_directory")?>/img/logo_header.png" alt="albatros"> -->
	</div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="wrap"><div id="main" class="clearfix"><div id="topBackRepeat">
	<header><div class='container'>
		<img src='<?php bloginfo('template_directory')?>/img/landing/logo.png' alt='Weddings cancun'>
		<div class='phone'>
			<?php if($lang=="en"){ ?>
				<h2>Get in Touch!</h2>
				<p>
					<span>TEL: <?= get_post_meta(get_the_ID(),"landing_tel",true) ?></span><br />
				</p>
			<?php } else{ ?>
				<h2>Contactanos!</h2>
				<p>
					<span>TEL: +52 (998) 881 87 53</span> <br />
				</p>			
			<?php } ?>
		</div>
	</div></header>
	<div id='content'><div class='container'>
		<div class='content-left'>
			<div class='picture'></div>
			<!-- <img src='<?php bloginfo('template_directory')?>/img/landing/people.png' alt='Weddings cancun'> -->

			<div class='testimonial'>
				<p class='title'>Testimonials</p>
				<p class='quote'><?= get_post_meta(get_the_ID(),"landing_testimonial1_$lang",true) ?></p>
				<p class='author'><?= get_post_meta(get_the_ID(),"landing_testimonial1_author_$lang",true) ?></p>

				<p class='quote'><?= get_post_meta(get_the_ID(),"landing_testimonial2_$lang",true) ?></p>
				<p class='author'><?= get_post_meta(get_the_ID(),"landing_testimonial2_author$lang",true) ?></p>
			</div>
		</div>
		<div class='content-right'>
			<div class='datas'>
				<h1><?= get_post_meta(get_the_ID(),"landing_h1_$lang",true) ?></h1>
				<h2><?= get_post_meta(get_the_ID(),"landing_h2_$lang",true) ?></h2>


				<p class='the_company_title'><?= get_post_meta(get_the_ID(),"the_company_title_$lang",true) ?></p>
				<p class='the_company_subtitle'><?= get_post_meta(get_the_ID(),"the_company_subtitle_$lang",true) ?></p>
					
				<p><?= get_post_meta(get_the_ID(),"the_company_content_$lang",true) ?></p>

				<a href='https://zaviaerp.com/booking/albatrossailaway/<?= $lang ?>/cart/m=<?= $m ?>'><img src='<?php bloginfo('template_directory')?>/img/reserva-<?= $lang ?>.png' class='book-here-right'></a>
			</div>
			<div class='trip-advisor'>
				
			</div>
		</div>
		<div class='clear'></div>
		<div class='banner gallery'>
			<img class='on' src='<?php bloginfo('template_directory')?>/img/landing/banner/slie-landing-page.png' alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/banner/slie-landing-page1.png' alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/banner/slie-landing-page-2.png' alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/banner/slie-landing-page-3.png' alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/banner/slie-landing-page-4.png' alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/banner/slie-landing-page-5.png' alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/banner/slie-landing-page-7.png' alt='Weddings cancun' />
			<a href='#' class='arrow-left arrow left'></a>
			<a href='#' class='arrow-right arrow right'></a>
			<div class='clear'></div>
		</div>
		<div class='text'>
				<p><?= get_post_meta(get_the_ID(),"banner_content_$lang",true) ?></p>
		</div>
		<section class='all_tours'>
		<div class='container'>
				<article class='_1'><a href='#' title='--'><a href='#'>
					<h3 class='color_1'>
						<?php if($lang == 'en'){ ?>
							CATERING
						<?php }else{ ?>
							BANQUETES
						<?php } ?>
					</h3>
					<img />
				</a></article>	

				<article class='_2'><a href='#' title='--'><a href='#'>
					<h3 class='color_2'>
						<?php if($lang == 'en'){ ?>
							CANDY BUFFET
						<?php }else{ ?>
							CANDY BUFFET
						<?php } ?>
					</h3>
					<img />
				</a></article>	

				<article class='_3'><a href='#' title='--'><a href='#'>
					<h3 class='color_3'>
						<?php if($lang == 'en'){ ?>
							PLACES
						<?php }else{ ?>
							LOCACIONES
						<?php } ?>
					</h3>
					<img />
				</a></article>	

				<article class='_4'><a href='#' title='--'><a href='#'>
					<h3 class='color_4'>
						<?php if($lang == 'en'){ ?>
							REAL WEDDINGS
						<?php }else{ ?>
							BODAS REALES
						<?php } ?>
					</h3>
					<img />
				</a></article>									


				<div class='clear'></div>
			<p class='bottom'><?= preg_replace("/\n/","<br/>",get_post_meta(get_the_ID(),"bottom_$lang",true)); ?></p>
		</div>
	</section>		
	<a href='https://zaviaerp.com/booking/albatrossailaway/<?= $lang ?>/cart/m=<?= $m ?>'><img src='<?php bloginfo('template_directory')?>/img/reserva-<?= $lang ?>.png' class='book-here-bottom'></a>
	</div></div>
</div></div></div>
<footer><div class='container'>
	<div class='menu'>
		<?php if($lang == 'en'){ ?>
			<a href='http://www.albatrossailaway.com/'>Home</a>
			<a href='http://www.albatrossailaway.com/about-us/'>About Us</a>
			<a href='http://www.albatrossailaway.com/'>Privacy</a>
		<?php }else{ ?>
			<a href='http://www.albatrossailaway.com/es'>Inicio</a>
			<a href='http://www.albatrossailaway.com/es/about-us/'>Sobre Nosotros</a>
			<a href='http://www.albatrossailaway.com/'>Privacidad</a>		
		<?php } ?>
	</div>
	<div class='social_buttons'>
		<a href="http://www.facebook.com" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/face.png'></a>
		<a href="https://twitter.com/" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/twitter.png'></a>
       	<a href="https://es.pinterest.com/" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/pinterest.png'></a>
        	<a href="https://plus.google.com/" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/google+.png'></a>
		<div class='clear'></div>
		<p>Cancún Q. Roo México</p>
		<div class='clear'></div>
	</div>
	<div class='clear'></div>	
</footer></div>

<div id='politics_content'>
	<div id="texto_politicas">
		<?php //include("politics.php") ?>
	</div>	
</div>
<?php endwhile; endif;?>
</body>
</html>