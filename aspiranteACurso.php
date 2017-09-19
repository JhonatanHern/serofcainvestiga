<?php
	$to      = 'sistemas.serofca@gmail.com';
	$subject = 'contacto - serofca.com';
    $name    = $_GET['name'];
    $email   = $_GET['mail'];
    $empresa = $_GET['org'];
    $cel     = $_GET['phone'];
    $msg     = $_GET['msg'];
        
	$message = "de: $name ($email)\n De la empresa $empresa\n$cel\n\n$msg";
	$headers = 'From: notificaciones@serofca.com' . "\r\n" .
	    'Reply-To: notificaciones@serofca.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
?>
<h1>Mensaje enviado</h1>
<script>setTimeout('window.history.back()',2000)</script>