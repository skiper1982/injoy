<!DOCTYPE html>
<html >
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
	<?php 
		$uri = $_SERVER['REQUEST_URI'];
		$server = $_SERVER['SERVER_NAME'];
		$url = $server.$uri;
	?>		
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<meta charset="UTF-8">
	<meta name="google-site-verification" content="hpqpPlYGTWQCU3MlWkSgYh2xhmmHY8dtTfHec3L-2Rk" />
	<link href='<?php bloginfo('template_directory')?>/css/jquery.ui.css' rel='stylesheet'/>
	<link href='<?php bloginfo( 'stylesheet_url' ); ?>?v=10' rel='stylesheet'/>
	<title><?php single_post_title(); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet'>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" type="image/x-icon"/>
	<script async  data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
	<?php 
		$picture = isset($_GET['picture']) && trim($_GET['picture']) != ''?$_GET['picture']:false;
		$gallery = isset($_GET['gallery']) && trim($_GET['gallery']) != ''?$_GET['gallery']:false;
		if($picture && $gallery ){ ?> 
			<meta property="og:url" content="http://<?php echo $url ?>" />
			<meta property="og:title" content="www.injoy-weddings.com" />
			<meta property="og:description" content="" />
			<!--meta property="og:image" content="http://injoy-weddings.com/wp-content/gallery/<?php echo $gallery ?>/thumbs/thumbs_<?php echo base64_decode($picture) ?>" /-->
			<meta property="og:image" content="http://injoy-weddings.com/wp-content/gallery/<?php echo $gallery ?>/<?php echo base64_decode($picture) ?>" />
			<meta property="og:image:width" content="620" />
			<meta property="og:image:height" content="541" />
			<?php
		}
	?>
	<?php wp_head(); ?>	

</head>
<body>
	<!-- <div id='size'>1000px</div> -->
	<div id="overlay"><div class="cell"><div class='hidden ajax-loader'></div><div class='clickarea'></div><div class='box'><div class='close'></div><div class='content'></div></div></div></div>				
	<input type='hidden' value='<?php bloginfo('template_directory'); ?>' id='template_directory'>
<div id="wrap"><div id="main" class="clearfix"><div id="topBackRepeat">
<header>
	<div class='container'>
		<div class='menu2'>
			<div class='language'>
				<p><a href='<?= qTranslateSlug_getSelfUrl("es")?>'>ES</a> | <a href='<?= qTranslateSlug_getSelfUrl("en")?>'>EN</a></p>
			</div>
			<div class="telefono">
				<p><a href="tel:529988818753">+52 (998) 881 87 53</a></p>
			</div>
			<a href='#' class='open_nav'><img src='<?php bloginfo('template_directory')?>/img/nav-icon.png' alt='open'></a>
			<a href='/' class='logo <?= $last ?>'><img src='<?php bloginfo('template_directory')?>/img/home/logo.png' /></a>
		</div>
	<nav>
		<ul>
		<?php 
			$menus = wp_get_nav_menu_items("Header",array('order'=>'menu_order'));
			$i = 0;
			$total = count($menus);
			foreach ($menus as $menu) { ?>
				<?php $on=$menu->object_id == $post->ID || $menu->object_id == $post->post_parent?"on":""; ?>
				<?php if($i == $total -1 ){
					$last = "last";
				}?>
				<?php if($i == 3){ ?>
					<li class='<?= $on ?>' ><a href='<?= $menu->url ?>' class='<?= $on ?> <?= $last ?>' <?= $menu->title =='BLOG'?"target='_blank'":"" ?> ><?= $menu->title ?></a></li>
				<?php }else{ ?>
					<li class='<?= $on ?>'><a href='<?= $menu->url ?>' class='<?= $on ?> <?= $last ?>' <?= $menu->title =='BLOG'?"target='_blank'":"" ?>><?= $menu->title ?></a></li>
				<?php } ?>	
			<?php $i++; }  ?>
		</ul>
	</nav>
	</div>
</header>
