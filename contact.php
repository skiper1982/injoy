<?php
/*
	Template Name: CONTACT
*/
?>
<?php if(!isset($_POST['ajax_contact'])){?>
<?php get_header(); ?>
<?php $lang = qtrans_getLanguage();?>
<div class='clear'></div>
<div id='contact'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class='map'>
		<iframe style='width:100%;border:none;overflow:hidden;height:100%;position:absolute;top:0px' frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=InJoy+Weddings+and+Events+Cancun&amp;aq=&amp;sll=40.396764,-3.713379&amp;sspn=10.319598,21.643066&amp;ie=UTF8&amp;hq=InJoy+Weddings+and+Events&amp;hnear=Canc%C3%BAn,+Quintana+Roo,+M%C3%A9xico&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=6643502732217443948&amp;ll=21.149942,-86.828245&amp;output=embed"></iframe>
	</div>
	<section class='formulario'>
		<div class='container'>
			<form id='contact-form' method='post' action="/contact-us/">

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
<?php }else{
	if($_POST['subject']!=""&&$_POST['Message']!=""&&$_POST['Email']!=""&&$_POST['Name']!=""){
		$email = $_POST['Email'];
		//$to=array('daniela@injoy-weddings.com');
		$to=array('daniela.in.joy@gmail.com');
		$subject = "Contacto de injoy-weddings.com";
		$message = "Nombre: {$_POST['Name']} \n";
		$message .= "Email: {$_POST['Email']} \n";
		$message .= "Skype Name: {$_POST['skypename']} \n";
		$message .= "Nacionalidad: {$_POST['nationality']} \n";
		$message .= "Fecha del Evento: {$_POST['date']} \n";
		$message .= "Como se Entero de Nosotros: {$_POST['knowus']} \n";
		$message .= "Mensaje: {$_POST['Message']} \n";
		$headers = array(
			'From: injoy-weddings.com <noreply@injoy-weddings.com>'
			);
		$result = wp_mail($to,$subject,$message,$headers);
	}else{
		$result=false;
	}
	if($result){
		echo 'success';
	}else{
		echo 'error';
	}	
}?>
