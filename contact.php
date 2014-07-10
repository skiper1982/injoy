<?php
/*
	Template Name: CONTACT
*/
?>
<?php get_header(); ?>
<?php $lang = qtrans_getLanguage();?>
<div class='clear'></div>
<div id='contact'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class='map'>
		<iframe style='width:100%;border:none;overflow:hidden;height:100%'  src="https://maps.google.com.mx/maps/ms?msa=0&amp;msid=206393643423893916463.0004ea9e62a8c608dad9e&amp;ie=UTF8&amp;t=h&amp;ll=21.150635,-86.772079&amp;spn=0.06564,0.17149&amp;z=13&amp;output=embed"></iframe>
	</div>
	<section class='formulario'>
		<div class='container'>
			<form id='form1' method='post' action="<?php bloginfo("template_directory") ?>/do-contact.php">
			<p class='title'><?php echo get_post_meta(get_the_ID(),"contact_title_{$lang}",true); ?></p>
			<p><input type='text' name='Name' id='Name' class='gris2' required></p>
			<p><label for='Name'><?php echo get_post_meta(get_the_ID(),"name_title_{$lang}",true); ?></label></p>
			<div class='clear'></div>
			<p><input type='email' name='Email' id='Email' class='gris2' required></p>
			<p><label for='Email'><?php echo get_post_meta(get_the_ID(),"email_title_{$lang}",true); ?></label></p>
			<div class='clear'></div>
			<p><input type='text' name='subject' id='subject' class='gris2' required></p>
			<p><label for='subject'><?php echo get_post_meta(get_the_ID(),"subject_title_{$lang}",true); ?></label></p>
			<div class='clear'></div>
			<p><label for='message'></label></p>
			<p><textarea  name='Message' id='Message' class='gris2'></textarea></p>
			<div class='clear'></div>
			<p><input type="submit" class='submit gris2' value=<?php echo get_post_meta(get_the_ID(),"button_title_{$lang}",true); ?>></p>
			<p class='success note' style='display:none'><?= $lang=="es"?"Mensaje Enviado, Gracias !":"Mensaje Enviado, Gracias !"?></p>
			<p class='error note' style='display:none'><?= $lang=="es"?"Error Intente de nuevo":"Error"?></p>

		</form>
		<div class='address'>
			<p class='title'><?php echo get_post_meta(get_the_ID(),"information_title_{$lang}",true); ?></span></p>
			<div class='text'>
				<p><?php echo get_post_meta(get_the_ID(),"information_text_{$lang}",true); ?></p>
			</div>
			<div class='direccion'>
				<p><?php echo get_post_meta(get_the_ID(),"direccion",true); ?></p>
			</div>

			<div class='telefonos'>
				<p><?php echo get_post_meta(get_the_ID(),"telefono",true); ?></p>
			</div>
			<div class='hours'>
				<p><?php echo get_post_meta(get_the_ID(),"telefono",true); ?></p>
				
			</div>			
		</div>
	</section>
<?php endwhile; endif;?></div>
<?php get_footer(); ?>
