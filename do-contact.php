<?php
	if($_POST['subject']!=""&&$_POST['Message']!=""&&$_POST['Email']!=""&&$_POST['Name']!=""){
		//$to=array('daniela@injoy-weddings.com');
		$to=array('irving.sci@gmail.com');
		$subject = "Contacto de injoy-weddings.com";
		$message = "Nombre: {$_POST['Name']} <br />";
		$message .= "Email: {$_POST['Email']} <br />";
		$message .= "Skype Name: {$_POST['skypename']} <br />";
		$message .= "Nacionalidad: {$_POST['nationality']} <br />";
		$message .= "Fecha del Evento: {$_POST['date']} <br />";
		$message .= "Como se Entero de Nosotros: {$_POST['knowus']} <br />";
		$message .= "Mensaje: {$_POST['Message']} <br />";
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
?>