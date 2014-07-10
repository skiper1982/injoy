<!DOCTYPE html>
<html >
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<meta charset="UTF-8">
	<meta name="google-site-verification" content="hpqpPlYGTWQCU3MlWkSgYh2xhmmHY8dtTfHec3L-2Rk" />
	<link href='<?php bloginfo('template_directory')?>/css/jquery.ui.css' rel='stylesheet'/>
	<link href='<?php bloginfo( 'stylesheet_url' ); ?>?v=10' rel='stylesheet'/>
	<title><?php single_post_title(); ?></title>
	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet'> -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" type="image/x-icon"/>

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
			<div class="telefono">
				<p>+52 (998) 881 87 53</p>
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
					<li class='<?= $on ?>' ><a href='<?= $menu->url ?>' class='<?= $on ?> <?= $last ?>' ><?= $menu->title ?></a></li>
				<?php }else{ ?>
					<li class='<?= $on ?>'><a href='<?= $menu->url ?>' class='<?= $on ?> <?= $last ?>'><?= $menu->title ?></a></li>
				<?php } ?>	
			<?php $i++; }  ?>
		</ul>
	</nav>
	</div>
</header>
