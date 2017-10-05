	<p class="j-animate j-right">
		Desde SEROFCA, creemos en la innovación y el desarrollo como la piedra angular del progreso. Es por ello que creamos nuestras 8 líneas de investigación con el objetivo de construir un futuro cada vez mas brillante.
	</p>
	<script type="text/javascript" src="js/j-animation.js"></script>
	<footer>
		<h2>Contáctanos</h2>
		<form>
			<input type="text" name="nombre" placeholder="nombre">
			<input type="text" name="apellido" placeholder="apellido">
			<input type="email" name="correo" placeholder="correo"><br>
			<textarea name="msg">
			</textarea><br>
			<input type="submit" value="Enviar">
		</form>
	</footer>
	<?php
		error_reporting(0);
		ini_set('display_errors', 0);
		if ($_GET['nombre']) {
			$to     = 'sistemas.serofca@gmail.com';
			$subject= 'Contacto desde líneas de Inv.';
			$nombre = $_GET['nombre'].' '.$_GET['apellido'];
			$correo = $_GET['correo'];
			$msg    = $_GET['msg'];
			$message = "de: $nombre  ($correo)\n\n$msg";
			$message = wordwrap($message,70);
			$headers = 'From: notificaciones@serofca.com' . "\r\n" .
				'Reply-To: notificaciones@serofca.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			echo '<script>alert("Mensaje Enviado")</script>';
		}
	?>