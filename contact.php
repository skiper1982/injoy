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
		<iframe style='width:100%;border:none;overflow:hidden;height:100%'   src="https://maps.google.com.mx/maps/ms?ie=UTF8&amp;t=m&amp;ecpose=21.17570938,-86.82919239,5252.45,1.235,19.153,0&amp;oe=UTF8&amp;msa=0&amp;msid=214937501704490531195.00048781a7a25a158b691&amp;ll=21.196056,-86.840487&amp;spn=0,0&amp;output=embed"></iframe>
	</div>
	<section class='formulario'>
		<div class='container'>
			<form id='contact-form' method='post' action="<?php bloginfo("template_directory") ?>/do-contact.php">

			<p class='title'><?php echo get_post_meta(get_the_ID(),"contact_title_{$lang}",true); ?></p>

			<p><input type='text' name='Name' id='Name' class='gris2' required /></p>
			<p><label for='Name'><?php echo get_post_meta(get_the_ID(),"name_title_{$lang}",true); ?></label></p>
			<div class='clear'></div>

			<p><input type='text' name='nationality' id='nationality' class='gris2' required></p>
			<p><label for='nationality'><?php echo get_post_meta(get_the_ID(),"nationality_{$lang}",true); ?></label></p>
			<div class='clear'></div>			

			<p><input type='email' name='Email' id='Email' class='gris2' required></p>
			<p><label for='Email'><?php echo get_post_meta(get_the_ID(),"email_title_{$lang}",true); ?></label></p>
			<div class='clear'></div>


			<p><input type='text' name='skypename' id='skypename' class='gris2' required></p>
			<p><label for='skypename' >Skype Name</label></p>
			<div class='clear'></div>

			<p><input type='text' name='knowus' id='knowus' class='gris2' required /></p>
			<p><label for='knowus'><?php echo get_post_meta(get_the_ID(),"you_now_us_{$lang}",true); ?></label></p>
			<div class='clear'></div>

			<p><input type='text' name='subject' id='subject' class='gris2' required /></p>
			<p><label for='subject'><?php echo get_post_meta(get_the_ID(),"subject_title_{$lang}",true); ?></label></p>
			<div class='clear'></div>						


			<p><input type='text' name='date' id='date' class='gris2' required></p>
			<p><label for='date'><?php echo get_post_meta(get_the_ID(),"date_event_{$lang}",true); ?></label></p>
			<div class='clear'></div>										


			<p><label for='message'></label></p>
			<p><textarea  name='Message' id='Message' class='gris2'></textarea></p>
			<div class='clear'></div>

			<p>
				<input type="submit" class='submit gris2' value=<?php echo get_post_meta(get_the_ID(),"button_title_{$lang}",true); ?> />
				<span class='loader hidden'></span>
			</p>
			<p class='success note' style='display:none'><?= $lang=="es"?"Mensaje Enviado, Gracias !":"Message sent, Thank you !"?></p>
			<p class='error note' style='display:none'><?= $lang=="es"?"Error Intente de nuevo":"Error, Try Again"?></p>

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
