<?php
function send_email($to,$subject,$message,$from,$from_name){
		$subject = utf8_decode($subject);
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: ".utf8_decode($from_name)." <".$from.">\r\n";
		$headers .= 'To: <'.$to.'>'."\r\n";
		$mailit = mail($to,$subject,$message,$headers);
		return $mailit;
	}
	$to = "info@injoy-weddings.com";

	//$to = "irving.sci@gmail.com";

	$message = "Nombre: {$_POST['Name']} <br />";
	$message .= "Email: {$_POST['Email']} <br />";
	$message .= "Skype Name: {$_POST['skypename']} <br />";
	$message .= "Nacionalidad: {$_POST['nationality']} <br />";
	$message .= "Fecha del Evento: {$_POST['date']} <br />";
	$message .= "Como se Entero de Nosotros: {$_POST['knowus']} <br />";
	$message .= "Mensaje: {$_POST['Message']} <br />";

	if($_POST['subject']!=""&&$_POST['Message']!=""&&$_POST['Email']!=""&&$_POST['Name']!=""){
		$subject = $_POST['subject'];
		$from = $_POST['Email'];
		$from_name = $_POST['Name'];
		$result = send_email($to,$subject,$message,"noreply@injoy-weddings.com",$from_name);
	}else{$result=false;}
	if($result){
		echo 'success';
	}else{
		echo 'error';
	}
?>