<?php
/*
	Template Name: CONTACT
*/
?>
<?php get_header(); ?>
<div class='clear'></div>
<div id='contact'>
	<div class='map'>
		<iframe style='width:100%;border:none;overflow:hidden;height:100%'  src="https://maps.google.com.mx/maps/ms?msa=0&amp;msid=206393643423893916463.0004ea9e62a8c608dad9e&amp;ie=UTF8&amp;t=h&amp;ll=21.150635,-86.772079&amp;spn=0.06564,0.17149&amp;z=13&amp;output=embed"></iframe>
	</div>
	<section class='formulario'>
		<div class='container'>
			<form id='form1' method='post' action="<?php bloginfo("template_directory") ?>/do-contact.php">
			<p class='title'>Contactanos</p>
			<input type='text' name='Name' id='Name' class='gris2' required>
			<label for='Name'><?= $lang=="es"?"Nombre":"Name"; ?></label>
			<div class='clear'></div>
			<input type='email' name='Email' id='Email' class='gris2' required>
			<label for='Email'>Email</label>
			<div class='clear'></div>
			<input type='text' name='subject' id='subject' class='gris2' required>
			<label for='subject'><?= $lang=="es"?"Asunto":"Subject"; ?></label>
			<div class='clear'></div>
			<textarea  name='Message' id='Message' class='gris2'></textarea>
			<div class='clear'></div>
			<input type="submit" class='submit gris2' value="<?= $lang=="es"?"Enviar":"Send" ?>">
			<p class='success note' style='display:none'><?= $lang=="es"?"Mensaje Enviado, Gracias !":"Mensaje Enviado, Gracias !"?></p>
			<p class='error note' style='display:none'><?= $lang=="es"?"Error Intente de nuevo":"Error"?></p>

		</form>
		<div class='address'>
			<p class='title'>Información de contacto</span></p>
			<p></p>

			<div class='telefonos'>
				<p class='title'>Teléfonos</p>
				<p>Cancún:</p>
				<p class='tel'>52 (998) 849-4223</p>
				<p class='tel'>52 (998) 848-7972</p>

				<p>Llame Gratis desde México</p>
				<p class='tel'> 01-800-681-1527</p>

				<p>Llame Gratis desde EU & Canada</p>
				<p class='tel'>1-800-895-6301</p>

			</div>
		</div>
		</div>
	</section>

</div>
<?php get_footer(); ?>