<!DOCTYPE html>
<html>
<head>
	<title>Investigación y Desarrollo | SEROFCA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="shortcut icon" href="imgs/logo.svg" />
	<link media="none" onload="if(media!='all')media='all'" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<style type="text/css">
		.socialIcons div{
			display: flex;
		}
		@media (max-width: 699px){/*little screen*/
			.socialIcons h3.orange{
				font-size: 12vw;
				padding-left: 12vw;
				margin-bottom: 0px;
				text-align: center;
				padding: 0;
			}
			.socialIcons div{
				display: flex;
			}
			.socialIcons a{
				flex-grow: 1;
				color: white;
				text-align: center;padding: .7em;
				font-size: 1.2em;
			}
			.socialIcons a:nth-child(1){background-color:aqua}
			.socialIcons a:nth-child(2){background-color:#5691ef}
			.socialIcons a:nth-child(3){background-color:#da47ff}
			.socialIcons a:nth-child(4){background-color:aqua}
			.socialIcons a:nth-child(5){background-color:red}
		}
		@media (min-width: 700px){/*big screen*/
			.socialIcons{
				display: flex;
				background-color: rgb(247,147,29);
				color: white;
			}
			.socialIcons h3{
				margin:0;
				padding: 2vh;
				width: 50%;
				font-size: 6vh;
			}
			.socialIcons div{
				width: 50%;
				display: flex;
			}
			.socialIcons a{
				padding: 1em;
				flex-grow: 1;
				font-size: 6vh;
				padding:2vh;
				color: inherit;
				text-align: center;
				background-color: rgb(28,117,188);
			}
			.socialIcons a:hover:nth-child(1){background-color:aqua}
			.socialIcons a:hover:nth-child(2){background-color:#5691ef}
			.socialIcons a:hover:nth-child(3){background-color:#da47ff}
			.socialIcons a:hover:nth-child(4){background-color:aqua}
			.socialIcons a:hover:nth-child(5){background-color:red}
		}
	</style>
</head>
<body>
	<?php 
		error_reporting(0);
		ini_set('display_errors', 0);
		if( $_GET['courseType'] ){//Es aspirante a curso
			$to        = 'sistemas.serofca@gmail.com';
			$subject   = 'Interesado en el curso - SEROFCA';
			$name      = $_GET['name'].' '.$_GET['lastName'];
			$email     = $_GET['mail'];
			$empresa   = $_GET['org'];
			$cel       = $_GET['phone'];
			$msg       = $_GET['msg'];
			$ci        = $_GET['CI'];
			$tipoClase = $_GET['courseType'];

			$message = "de: $name ($email)\nCI: $ci\n$cel\n\nSolicita clase de tipo: $tipoClase";
			$headers = 'From: notificaciones@serofca.com' . "\r\n" .
				'Reply-To: notificaciones@serofca.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			echo '<script>alert("Mensaje Enviado")</script>';
		}else if( $_GET['name'] ){
			$to      = 'sistemas.serofca@gmail.com';
			$subject = 'Aspirante a integrar líneas de investigación';
			$name    = $_GET['name'].' '.$_GET['lastName'];
			$email   = $_GET['mail'];
			$cel     = $_GET['cel'];
			$msg     = $_GET['msg'];
			$ld      = $_GET['ld'];
			$carrera = $_GET['carrera'];
			$est     = $_GET['est'];
			$why     = $_GET['why'];
			$cv      = $_GET['cv'];
			$line    = $_GET['line'];
				
			$message = "de: $name ($email)\n Perfil de Linkedin: $ld\nEstudió $carrera en: $est\n".
				"\nquiere trabajar con nosotros por:\n$why\n\nSu currículum:\n$cv\n\n".
				"Se quiere unir a: $line";

			$headers = 'From: notificaciones@serofca.com' . "\r\n" .
				'Reply-To: notificaciones@serofca.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			echo '<script>alert("Mensaje Enviado")</script>';
		}
	?>
	<header id="heading" class="top">
		<img src="imgs/logo.svg" id="menuIcon">
		<ul id="deployMenu">
			<li>
				<a href="http://www.serofca.com">
					SEROFCA
				</a>
			</li>
			<li>
				<a href="http://www.serofca.com#Contacto">
					Contáctanos
				</a>
			</li>
		</ul>
	</header>
	<section id="cover">
		<div class="animationContainer">
			<img src="imgs/logo.svg">
		</div>
		<script type="text/javascript">
			let img = document.querySelector("#cover .animationContainer > img")
			let container = document.querySelector("#cover .animationContainer")
			if (window.innerWidth > window.innerHeight) {
				img.style.height = img.style.width = window.innerHeight + "px"
			} else {
				img.style.height = img.style.width = window.innerWidth + "px"
			}
			setTimeout(function(argument) {
				container.style.animationName = "fadeOut"
			},2000)
			setTimeout(function(argument) {
				container.style.display = "none"
			},3900)
		</script>
		<div class="centerDiv">
			<img src="imgs/logoplain.svg">
			Investigación y Desarrollo
		</div>
	</section>
	<section id="description">
		<h1>SEROFCA, de la mano con el progreso.</h1>
		El término Investigación – Tecnología – Desarrollo – Innovación (ITDi) viene de la concepción desde el amplio rango de aplicaciones de la Física, en nuestro caso a la Física Médica y de la Física aplicada en la Gerencia. La investigación básica, proveniente, no sólo de Física pura, sino también de ciencias como la Química, la Biología, y haciendo uso de la Computación y la Matemática, marcando así el camino hacia una tecnología basada en conocimientos multidisciplinarios que creará las bases hacia el desarrollo en la Física Moderna actual, cuya implicación directa es la innovación de nuevos sistemas, modelos, procesos, protocolos, a fin de garantizar un aprendizaje integral y sostenible en el tiempo.
	</section>
	<section class="socialIcons">
		<h3 class="orange">SEROFCA</h3>
		<div>
			<a rel="follow" href="http://www.twitter.com/serofca">
				<i class="fa fa-twitter"></i>
			</a>
			<a rel="follow" href="http://www.facebook.com/serofca">
				<i class="fa fa-facebook"></i>
			</a>
			<a rel="follow" href="http://www.instagram.com/serofca">
				<i class="fa fa-instagram"></i>
			</a>
			<a rel="follow" href="http://www.serofca.wordpress.com">
				<i class="fa fa-wordpress"></i>
			</a>
			<a rel="follow" href="https://www.youtube.com/user/serofcatv">
				<i class="fa fa-youtube"></i>
			</a>
		</div>
	</section>
	<script type="">
		(function() {
			const responsiveSize = 700//px
			let responsiveMenu = {
				icon:document.getElementById('menuIcon'),
				ul:document.getElementById('deployMenu')
			}
			responsiveMenu.icon.addEventListener('click',function() {
				if (window.innerWidth >= responsiveSize)
					return
				let style = responsiveMenu.ul.style
				style.marginLeft = style.marginLeft === "0%" ? "-100%" : "0%" ;
			})
			window.addEventListener("resize",function() {
				if (window.innerWidth >= responsiveSize)
					responsiveMenu.ul.style.marginLeft = "0%"
			})
		})()
	</script>
	<main>
		<section id="noticias">
			<div class="noticia">
				<img src="imgs/omar.jpg">
				<div>
					<h4>Científico venezolano descubre cómo aplicar la física cuántica al mundo empresarial</h4>
					<p>Omar Arias, Físico Médico, explicó que el mundo cambia drásticamente y en respuesta a esto se deben usar herramientas novedosas para evitar ser tragados por la crisis y ver esta como una oportunidad para el éxito.</p>
				</div>
			</div>
			<div class="noticia">
				<img src="imgs/tacc.jpg">
				<div>
					<h4>Un ‘TAC espacial’ para reducir las radiaciones en los niños</h4>
					<p>Se trata del nuevo TAC pediátrico que ha incorporado el hospital Vall d'Hebron de Barcelona, un dispositivo de última generación que consigue reducir hasta un 80% la radiación con respecto a las máquinas más antiguas.</p>
				</div>
			</div>
			<div class="noticia">
				<img src="imgs/logo.svg">
				<div>
					<h4>Una de cada tres pruebas radiológicas es innecesaria</h4>
					<p>Un informe de la Sociedad de Radiólogos recomienda no hacer mamografías de cribado a mujeres menores de 40 ni radiografías de tórax de forma rutinaria</p>
				</div>
			</div>
			<div class="noticia">
				<img src="http://en-cdnmed.agilecontent.com//resources/jpg/3/6/1490835002063.jpg">
				<div>
					<h4>J. M. de los Ríos sin quirófanos, radiología ni laboratorio</h4>
					<p>15 niños que reciben diálisis están contaminados; las aguas negras inundaron Neurocirugía y los 2 quirófanos que quedaban activos están cerrados por filtraciones.</p>
				</div>
			</div>
			<h2><a href="http://www.serofca.wordpress.com">Más Noticias</a></h2>
		</section>
		<aside>
			<div>
				<h3>📌 Conócenos</h3>
				<p>
					El departamento de ITDi de SEROFCA, nace con la finalidad de contribuir en el avance de la Física Médica Moderna en Venezuela, Latinoamérica y el Mundo, con ello se persigue que con la unión de distintas áreas de conocimiento, desde la arquitectura, la ingeniería, la administración, la física, química, biología, matemática y computación, se logre un incremento en la investigación aplicada al ámbito médico desde una perspectiva mucho más integral, así como la utilización e impulso de nuevas tecnologías, el desarrollo de nuevos esquemas de trabajo y formas de comprender  nuestra realidad, para así dar lugar a la innovación en todas las áreas de desarrollo de este departamento.
				</p>
			</div>
			<div>
				<h3>📌 Misión</h3>
				<p>
					Llevar a cabo la planificación, organización, evaluación y publicación de los proyectos que ayudarán en el desarrollo de la investigación científica y tecnológica llevados a cabo en SEROFCA; con el objetivo de impulsar las líneas de investigación definidas por la empresa y generar nuevas líneas que surjan en la interconexión entre dos o más investigaciones de diversas áreas.
				</p>
			</div>
			<div>
				<h3>📌 Visión</h3>
				<p>
					Consolidarnos como departamento modelo en la investigación de ciencia aplicada a nivel nacional, latinoamericano y mundial, distinguiéndonos por la eficiencia, innovación y calidad de las investigaciones, actuando con liderazgo a fin de promover nuevos protocolos, normas y esquemas de trabajo que garanticen la mejora continua de procesos en el área de la Medicina y así colocar a SEROFCA en la vanguardia de conocimientos e innovación.
				</p>
			</div>
			<!--div>
				<h3>Links</h3>
				<ul>
					<li>
						<a href="#">#</a>
					</li>

					<li>
						<a href="#">#</a>
					</li>

					<li>
						<a href="#">#</a>
					</li>

					<li>
						<a href="#">#</a>
					</li>
				</ul>
			</div-->
		</aside>
	</main>
	<section id="anuncioCursos">
		<h1>Ofrecemos el Curso de Protección Radiológica de <span class="orange">24 horas</span></h1>
		<div class="blue">
			Dirigido a:
			<h3>Médicos, Técnicos y enfermeras</h3>
			Diseñado para personal que trabaja con equipos emisores de Radiación Ionizante <br>
		</div>
		<div class="orange" style="font-size: 1.5em;">
			Con este curso se cumple lo exigido en la norma COVENIN 218-1 y en la resolución 401 del MPPS
		</div>
		<div class="blue" style="font-size: 1.1em;padding-left: 2em;padding-right: 2em;flex-grow: 1.5">
			dictado por:
			<h3>MsCs Omar Arias C.</h3>
			<p style="color: transparent;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore mag</p>
		</div>
	</section>
	<section id="lines">
		<h2>Líneas de Investigación</h2>
		<ul>
			<li>
				<h2>
					📌 1) Procesos para la implementación del principio de justificación de la práctica radiodiagnóstica médica y odontológica en Venezuela.
				</h2>
				<div>
					Es necesario mejorar y facilitar la justificación de la práctica, esta debe incluir conceptos de conciencia, idoneidad y auditoría. Esta problemática es debido al poco conocimiento sobre el impacto de las radiaciones ionizantes sobre los seres vivos, desde los beneficios hasta las consecuencias, desde ITDi SEROFCA se propone:
					<ul>
						<li>
							1.1) Diseño de guías clínicas diagnósticas justificadas para la selección de estudios imagenológicos.
						</li>
						<li>
							1.2) Programas screaning.
							<br><a href="Linea 1.php">Ver mas</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<h2>
					📌 2) Procesos para la implementación del principio de optimización de la protección radiológica en la práctica radiodiagnóstica y radioterapéutica en Venezuela.
				</h2>
				<div>
					La optimización de las dosis de radiación debe establecerse según el principio ALARA, para ello de debe adecuar la dosis de radiación a cada paciente de acuerdo al objetivo clínico que se desea investigar, esto implica que existan grandes diferencias en términos de dosis de radiación entre estudios similares realizados en diferentes centros. Desde ITDi SEROFCA se propone:
					<ul>
						<li>
							2.1) Establecimiento de niveles de referencia para el uso de las radiaciones ionizantes en el diagnóstico médico de los pacientes en Venezuela
						</li>
						<li>
							2.2) Sistema integral de Gestión de la calidad para centros de salud en donde se operan con equipos emisores d radiación ionizante.
						</li>
						<li>
							2.3) Diseño de protocolos para pacientes sometidos a terapia o diagnóstico con radionucleidos.
						</li>
						<li>
							2.4) Protocolo para el registro y seguimiento de la exposición del paciente.
						</li>
						<li>
							2.5) Optimización de la práctica de radioterapia.
							<br><a href="Linea 2.php">Ver mas</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<h2>
					📌 3) Fortalecimiento de la cultura de seguridad a partir de la formación y capacitación en materia de protección radiológica.
				</h2>
				<div>
					La protección radiológica requiere, de la cooperación entre médicos, técnicos y físicos, involucrando al paciente y familiares, la educación en protección radiológica debe hacerse desde un punto de vista integral en el que los individuos involucrados en el área trabaje conjuntamente para el beneficio personal y del paciente. El departamento de ITDi SEROFCA propone:
					<ul>
						<li>
							3.1) Generación de planes de formación y capacitación en protección radiológica.
						</li>
						<li>
							3.2) Desarrollo de medios, técnicas y presentaciones efectivas para la comunicación de la protección radiológica.
						</li>
						<li>
							3.3) Generación e implementación de métodos de análisis de riesgo.
							<br><a href="Linea 3.php">Ver mas</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<h2>
					📌 4) Registro y análisis de datos dosimétricos.
				</h2>
				<div>
					<ul>
						<li>
							4.1) Simulaciones de dosis empleando métodos de montecarlo.
						</li>
						<li>
							4.2) Estandarización de técnicas para el registro de datos dosimétricos.
							<br><a href="Linea 4.php">Ver mas</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<h2>
					📌 5) Diseño de nuevas propuestas para fortalecer el papel de los fabricantes de equipos de radiodiagnóstico y radioterapia en la contribución de la seguridad radiológica.
				</h2>
				<div>
					Los fabricantes de los equipos juegan un importante rol en la seguridad, ya que ellos están, indirectamente, vinculados con la salud del paciente, es por ello, que se hace imprescindible desarrollar mejoras en la seguridad de los dispositivos médicos emisores de radiación, que van desde el diseño físico del equipo, el software y funciones extras, a fin de reducir la exposición de los pacientes a radiación innecesaria. Se propone:
					<ul>
						<li>
							5.1) Desarrollo de manuales de procedimientos adaptadas a cada centro de salud en donde operen equipos emisores de radiación ionizante en Venezuela.
						</li>
						<li>
							5.2) Entrenamiento o práctica clínica sobre el uso y manipulación de los equipos emisores de radiación ionizante.
						</li>
						<li>
							5.3) Generación de propuestas de optimización de valores establecidos por los fabricantes a partir de niveles de referencia nacional.
						</li>
						<li>
							5.4) Evaluación de sistemas de seguridad de los equipos emisores de radiación ionizante.
							<br><a href="Linea 5.php">Ver mas</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<h2>
					📌 6) Desarrollo de soluciones tecnológicas que contribuyen a brindar información mundial mejorada sobre exposiciones médica, exposición ocupacional en medicina y protección radiológica.
				</h2>
				<div>
					En Venezuela y en Latinoamérica existe poca recopilación de datos y tendencias en las exposiciones médicas que permitan la cooperación o intercambio de información referente a la exposición ocupacional en medicina, medidas de protección radiológica, niveles de dosis, protocolos de tratamiento, que puedan ser utilizados como instrumento de gestión de calidad, análisis de tendencias de diagnóstico y terapéuticas, toma de decisiones y asignación de recursos. ITDi SEROFCA, propone:
					<ul>
						<li>
							6.1) Fundar una página web con información para pacientes dependiendo del tipo de estudio que se realiza.
						</li>
						<li>
							6.2) Creación de software para evaluación de técnicas radiológicas y dosis en pacientes.
						</li>
						<li>
							6.3) Desarrollo e implementación de asistente médico basado en inteligencia artificial.
						</li>
						<li>
							6.4) App para registro de dosis.
						</li>
						<li>
							6.5) Páginas web como guías clínicas para la selección del estudio de manera justificada y optimizada por parte del médico.
						</li>
						<li>
							6.6) Plataforma académica e-learning.
						</li>
						<li>
							6.7) App para pacientes oncológicos.
						</li>
						<li>
							6.8) Software de código abierto para la gestión de la investigación.
						</li>
						<li>
							6.9) Red hospitalaria para el teleradiodiagnóstico.
							<br><a href="Linea 6.php">Ver mas</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<h2>
					📌 7) Políticas de seguridad radiológica en asistencia sanitaria.
				</h2>
				<div>
					La seguridad de paciente y del personal ocupacionalmente expuesto, debe ser una prioridad estratégica en los usos de la radiación ionizante en medicina, por tal motivo es necesario promover la cooperación entre autoridades reguladoras de protección radiológica, autoridades de salud, sociedades profesionales y de paciente, entre las diferentes disciplinas y especialidades involucrada en la práctica radiodiagnóstica. El departamento de ITDi SEROFCA, propone:
					<ul>
						<li>
							7.1) Desarrollo de guías prácticas para la aplicación de normas.
						</li>
						<li>
							7.2) Propuestas de normas nacionales de calidad en el diagnóstico médico.
						</li>
						<li>
							7.3) Normas de protección radiológica en intervencionismo.
						</li>
						<li>
							7.4) Actualización de normas nacionales.
							<br><a href="Linea 7.php">Ver mas</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<h2>
					📌 8) Aplicación de las ciencias básicas en el radiodiagnóstico, radioterapia, protección radiológica y medicina nuclear.
				</h2>
				<div>
					El avance de la tecnología va de la mano de los estudios de investigación realizados en las áreas de actuación de una empresa, industria o sociedad, las ciencias básicas han sido el pilar fundamental para el desarrollo, ya que provee los conocimientos necesarios para la evolución y crecimiento de sociedades. Es por ello que SEROFCA desarrolla un área destinada a la investigación de ciencias como la física, la química, la biología y la computación, y estas en su subareas como la biofísica, la bioquímica, inteligencia artificial, estudios estadísticos y computacionales, a fin de estar en la vanguardia ye en sintonía con los avances mundiales en materia de protección radiológica, radioterapia, radiodiagnóstico y medicina nuclear.
					<br><a href="Linea 8.php">Ver mas</a>
				</div>
			</li>
		</ul>
		<section>
			<h4>
				Quieres unirte a una de nuestras líneas de investigación? click <span id="pulse">aquí</span>
			</h4>
		</section>
	</section>
	<div id="buy">Para Compra de Equipos y Materiales Entra a <a href="http://www.serofca.com">SEROFCA.com</a></div>
	<footer>
		<section id="footerStarter">
			<aside><br><br>
				<a rel="follow" href="http://www.serofca.com">
					<b>Responsabilidad Social Empresarial</b>
					<br>
					SEROFCA, una mano amiga.
					<br>
				</a>
			</aside><br><br>
			<aside><br><br>
				Contamos con la certificación del Ministerio de Salud, para brindar una solución integral en materia de seguridad radiológica.
			</aside><br><br>
			<aside><br><br>
				365 días del año, las 24 horas.<br>
				estamos para servirte<br>
				0212 310 74 10 / 0212 661 84 78<br>
				0424 201 11 14<br>
				serofca@gmail.com
			</aside>
		</section>
		<section id="copyright">
			serofca.com <i class="fa fa-copyright" aria-hidden="true"></i>2023
		</section>
		<section id="icons">
			<a rel="follow" href="http://www.twitter.com/serofca"><i class="fa fa-twitter"></i></a>
			<a rel="follow" href="http://www.facebook.com/serofca"><i class="fa fa-facebook"></i></a>
			<a rel="follow" href="http://www.instagram.com/serofca"><i class="fa fa-instagram"></i></a>
			<a rel="follow" href="http://www.serofca.wordpress.com"><i class="fa fa-wordpress"></i></a>
			<a rel="follow" href="https://www.youtube.com/user/serofcatv"><i class="fa fa-youtube"></i></a>
		</section>
		<section id="design">
			<a rel="follow" href="https://codepen.io/JhonatanHern">
				Diseño e implementación: Jhonatan Hernández
				<i class='fa fa-codepen'></i>
			</a>
			<a rel="follow" href="https://github.com/JhonatanHern">
				<i class='fa fa-github'></i>
			</a>
		</section>
	</footer>
	<div id="idform">
		<form>
			<i id="idBack">X</i>
			<h3>Tus datos:</h3>
			<input type="text" name="name" placeholder="nombres" required>
			<input type="text" name="lastName" placeholder="apellidos" required>
			<input type="email" name="email" placeholder="correo" required>
			<input type="text" name="cel" placeholder="Número celular" required>
			<input type="text" name="ld" placeholder="Enlace a tu perfil de Linkedin" required>
			<textarea placeholder="En donde estudiaste? (o en donde estudias)" name="est" required></textarea>
			<input type="text" name="carrera" placeholder="Que estudias" required>
			<textarea placeholder="Por que quieres trabajar con nosotros?" name="why" required></textarea>
			<textarea placeholder="Cuales son tus experiencias laborales previas?" name="cv" required></textarea>
			<textarea placeholder="A cual línea de investigación te quieres unir?" name="line" required></textarea>
			<input type="submit" value="Enviar">
		</form>
	</div>
	<div id="formCurso">
		<form>
			<i id="idBack2">X</i>
			<h3>Tus datos:</h3>
			<input type="text" name="name" placeholder="nombres" required>
			<input type="text" name="lastName" placeholder="apellidos" required>
			<input type="email" name="email" placeholder="correo" required>
			<input type="text" name="CI" placeholder="CI" required>
			<label>Tipo de Curso</label>
			<select name="courseType">
				<option value="Particular">Clase Particular</option>
				<option value="Estudiante">Clase para Estudiantes</option>
				<option value="Personal">Personal de una Institución</option>
			</select>
			<input type="number" name="phone" placeholder="Número de Teléfono" required>
			<input type="submit" value="Enviar">
		</form>
	</div>
	<script type="text/javascript">
		var lis = Array.from(document.querySelectorAll('#lines li'))
		lis.forEach(function(e) {
			e.addEventListener('click',function() {
				this.classList.toggle('activeLine')
			})
		})
	</script>
	<script type="text/javascript">
		let idform = document.getElementById('idform')
		document.getElementById('pulse').addEventListener('click',function() {
			idform.style.display = 'block';
		})
		document.getElementById('idBack').addEventListener('click',function() {
			idform.style.display = 'none';
		})
		let cursoForm = document.getElementById('formCurso')
		document.getElementById('anuncioCursos').addEventListener('click',function() {
			cursoForm.style.display = 'block';
		})
		document.getElementById('idBack2').addEventListener('click',function() {
			cursoForm.style.display = 'none';
		})
	</script>
</body>
</html><!--http://www.sncpharma.com/assets/lib/kcfinder/upload/files/libros%20snc/Psicologia%20del%20Color.pdf-->