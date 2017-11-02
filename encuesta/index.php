<!DOCTYPE html>
<html>
<head>
	<title>SEROFCA encuestas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script>
		if (location.protocol != 'https:'){
			location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
		}
	</script>
</head>
<body>
	<section id="username" class="login" style="display: block">
		<section>
			<input type="text" id="mail" placeholder="email">
			<button id="hitmail">GO!</button>
		</section>
	</section>
	<section id="password" class="login">
		<i onclick="$('#password').css('display','none');$('#username').css('display','block')">←</i>
		<section>
			<input type="password" id="pw" placeholder="password">
			<button id="hitpw">GO!</button>
		</section>
	</section>
	<section id="pickForm" style="display: none;">
		<i onclick="$('#pickForm').css('display','none');$('#password').css('display','block')">←</i>
		<button>Radiología</button>
		<button>Mamografía</button>
		<button>Tomografía</button>
		<button>Radiología Dental</button>
	</section>
	<section class="form" app-name="Radiología">
		<i onclick="$('.form').css('display','none');$('#pickForm').css('display','flex')">←</i>
		<?php include 'fradiologia.php'; ?>
	</section>
	<section class="form" app-name="Mamografía">
		<i onclick="$('.form').css('display','none');$('#pickForm').css('display','flex')">←</i>
		<?php include 'fmamografia.php'; ?>
	</section>
	<section class="form" app-name="Tomografía">
		<i onclick="$('.form').css('display','none');$('#pickForm').css('display','flex')">←</i>
		<?php include 'ftomografia.php'; ?>
	</section>
	<section class="form" app-name="Radiología Dental">
		<i onclick="$('.form').css('display','none');$('#pickForm').css('display','flex')">←</i>
		<?php include 'fradent.php'; ?>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="app.js"></script>
</body>
</html>