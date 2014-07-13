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
	<title><?php single_post_title(); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700,100italic,300italic,400italic,900,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet'>	

	<script src='<?php bloginfo('template_directory') ?>/js/jquery.js' ></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.ui.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jquery.validate.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/jQuery.migrate.min.js'></script>
	<script src='<?php bloginfo('template_directory') ?>/js/landing.js'></script>



	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" type="image/x-icon"/>	
</head>
<body class='language_<?= $lang ?>'>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&appId=622309971197041&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>	

<div id="opacity">
	<div id="sign">

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
					<span>TEL: </span><?= get_post_meta(get_the_ID(),"landing_tel",true) ?></span>
				</p>
			<?php } else{ ?>
				<h2>¡Contactanos!</h2>
				<p>
					<span>TEL: </span>+52 (998) 881 87 53
				</p>			
			<?php } ?>
		</div>
	</div></header>
	<div id='content'><div class='container'>
		<div class='content-left'>
			<img src='<?php bloginfo('template_directory')?>/img/landing/imgbegin.png' alt='Weddings cancun'>

			<div class='testimonial'>
				<p class='title'>Testimonials</p>
				<p class='quote'><?= get_post_meta(get_the_ID(),"landing_testimonial1_$lang",true) ?></p>
				<p class='author'><?= get_post_meta(get_the_ID(),"landing_testimonial1_author_$lang",true) ?></p>

				<p class='quote'><?= get_post_meta(get_the_ID(),"landing_testimonial2_$lang",true) ?></p>
				<p class='author'><?= get_post_meta(get_the_ID(),"landing_testimonial2_author_$lang",true) ?></p>
			</div>
		</div>
		<div class='content-right'>
			<div class='datas'>
				<h1><?= get_post_meta(get_the_ID(),"landing_h1_$lang",true) ?></h1>
				<h2><?= get_post_meta(get_the_ID(),"landing_h2_$lang",true) ?></h2>


				<p class='the_company_title'><?= get_post_meta(get_the_ID(),"the_company_title_$lang",true) ?></p>
				<p class='the_company_subtitle'><?= get_post_meta(get_the_ID(),"the_company_subtitle_$lang",true) ?></p>
					
				<p><?= get_post_meta(get_the_ID(),"the_company_content_$lang",true) ?></p>
				<?php $link = $lang == 'es'?"/es/":"/en/" ?>
				<a href='<?php $link ?>'><img src='<?php bloginfo('template_directory')?>/img/landing/iwanttoknow_<?= $lang ?>.png' class='book-here-right'></a>
			</div>
			<div class='trip-advisor'>
				<div class="fb-like-box" data-href="https://www.facebook.com/injoyevents?fref=ts" data-width="580px" data-height="226px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>				
			</div>
		</div>
		<div class='clear'></div>
		<div class='banner gallery'>
			<img src='<?php bloginfo('template_directory')?>/img/landing/slide-home5.png' class='on' style="display:inline" alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/slide-home7.png' alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/candy-slide5.png' alt='Weddings cancun' />
			<img src='<?php bloginfo('template_directory')?>/img/landing/slide-catering6.png' alt='Weddings cancun' />
			<a href='#' class='arrow-left arrow left'></a>
			<a href='#' class='arrow-right arrow right'></a>
			<div class='clear'></div>
		</div>
		<div class='text'>
				<p><?= get_post_meta(get_the_ID(),"banner_content_$lang",true) ?></p>
		</div>
		<section class='all_tours'>
		<div class='container'>
				<?php $link = $lang == 'es'?"/es/banquetes-y-catering-en-cancun-y-riviera-maya/":"/en/catering-in-cancun-playa-del-carmen-and-riviera-maya/" ?>
				<article class='_1'><a href='<?= $link ?>'>
					<h3 class='color_1'>
						<?php if($lang == 'en'){ ?>
							· CATERING ·
						<?php }else{ ?>
							· BANQUETES ·
						<?php } ?>
					</h3>
					<img src='<?php bloginfo('template_directory')?>/img/landing/banquetes.png' alt='Weddings cancun'>
				</a></article>	

				<?php $link = $lang == 'es'?"/es/barra-de-postres-y-dulces-en-cancun-riviera-maya/":"/en/wedding-cakes-and-candy-buffet-in-cancun/" ?>
				<article class='_2'><a href='<?= $link ?>'>
					<h3 class='color_2'>
						<?php if($lang == 'en'){ ?>
							· CANDY BUFFET ·
						<?php }else{ ?>
							· CANDY BUFFET ·
						<?php } ?>
					</h3>
					<img src='<?php bloginfo('template_directory')?>/img/landing/candy.png' alt='Weddings cancun'>
				</a></article>	

				<?php $link = $lang == 'es'?"/es/":"/en/" ?>
				<article class='_3'><a href='<?= $link ?>'>
					<h3 class='color_3'>
						<?php if($lang == 'en'){ ?>
							· PLACES ·
						<?php }else{ ?>
							· LOCACIONES ·
						<?php } ?>
					</h3>
					<img src='<?php bloginfo('template_directory')?>/img/landing/locaciones.png' alt='Weddings cancun'>
				</a></article>	

				<?php $link = $lang == 'es'?"/es/":"/en/" ?>
				<article class='_4'><a href='<?= $link ?>'>
					<h3 class='color_4'>
						<?php if($lang == 'en'){ ?>
							· REAL WEDDINGS ·
						<?php }else{ ?>
							· BODAS REALES ·
						<?php } ?>
					</h3>
					<img src='<?php bloginfo('template_directory')?>/img/landing/bodas.png' alt='Weddings cancun'>
				</a></article>									


				<div class='clear'></div>
			<p class='bottom'><?= preg_replace("/\n/","<br/>",get_post_meta(get_the_ID(),"bottom_$lang",true)); ?></p>
		</div>
	</section>
	<?php $link = $lang == 'es'?"/es/":"/en/" ?>		
	<a href='<?= $link ?>'><img src='<?php bloginfo('template_directory')?>/img/landing/weddinggallery_<?= $lang ?>.png' class='book-here-bottom'></a>
	</div></div>
</div></div></div>
<footer><div class='container'>
	<div class='menu'>
		<?php if($lang == 'en'){ ?>
			<a href='#'>Home</a>
			<a href='#'>About Us</a>
			<a href='#'>Privacy</a>
		<?php }else{ ?>
			<a href='#'>Inicio</a>
			<a href='#'>Sobre Nosotros</a>
			<a href='#'>Privacidad</a>		
		<?php } ?>
	</div>
	<div class='social_buttons'>
		<a href="https://www.facebook.com/injoyevents" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/face.png'></a>
		<a href="https://twitter.com/InJoyweddings" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/twitter.png'></a>
       	<a href="http://www.pinterest.com/danyplanny/" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/pinterest.png'></a>
        	<a href="#" target="_blank"><img src='<?php bloginfo('template_directory')?>/img/social/google+.png'></a>
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