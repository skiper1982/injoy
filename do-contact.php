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
	$to = "irving.sci@gmail.com";
	if($_POST['subject']!=""&&$_POST['Message']!=""&&$_POST['Email']!=""&&$_POST['Name']!=""){
		$subject = $_POST['subject'];
		$message = $_POST['Message'];
		$from = $_POST['Email'];
		$from_name = $_POST['Name'];
		$result = send_email($to,$subject,$message,$from,$from_name);
	}else{$result=false;}
	if($result){
		echo 'success';
	}else{
		echo 'error';
	}
?>