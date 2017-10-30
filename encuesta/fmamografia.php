<form action="mamografia.php" method="GET">
	<h3>Mamografía</h3>
	<div>
		Cantidad a registrar:
		<input type="number" name="formlength" id="mamografia-num">
		<script type="text/javascript">
			document.getElementById('mamografia-num').value = '0'
		</script>
	</div>
	<br>
	<section class="container">
		<table>
			<thead>
				<tr>
					<th>País</th>
					<th>Institución</th>
					<th>Tipo Institución</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Serial</th>
					<th>Fecha del Tubo</th>
					<th>Sala</th>
					<th>Tipo de Equipo</th>
					<th>Revelado</th>
					<th>Marca del Revelado</th>
					<th>Modelo del Revelado</th>
					<th>Pacientes Atendidos</th>
					<th>Sexo</th>
					<th>Peso (kg)</th>
					<th>Altura (cm)</th>
					<th>Talla (Brasier)</th>
					<th>Edad</th>
					<th>Fecha de Adquisición de Data</th>
					<th>Tipo de Estudio</th>
					<th>Tamaño de Campo</th>
					<th>¿Cae?</th>
					<th>Combinación Anodo/Filtro</th>
					<th>CC-D Distancia de Compresión (cm)</th>
					<th>CC-D Fuerza de Compresión (N)</th>
					<th>CC-D kV</th>
					<th>CC-D mA</th>
					<th>CC-D t</th>
					<th>CC-D mAs</th>
					<th>CC-D Dosis</th>
					<th>CC-I Distancia de Compresión (cm)</th>
					<th>CC-I Fuerza de Compresión (N)</th>
					<th>CC-I kV</th>
					<th>CC-I mA</th>
					<th>CC-I t</th>
					<th>CC-I mAs</th>
					<th>CC-I Dosis</th>
					<th>MLO-D Distancia de Compresión (cm)</th>
					<th>MLO-D Fuerza de Compresión (N)</th>
					<th>MLO-D kV</th>
					<th>MLO-D mA</th>
					<th>MLO-D t</th>
					<th>MLO-D mAs</th>
					<th>MLO-D Dosis</th>
					<th>MLO-I Distancia de Compresión (cm)</th>
					<th>MLO-I Fuerza de Compresión (N)</th>
					<th>MLO-I kV</th>
					<th>MLO-I mA</th>
					<th>MLO-I t</th>
					<th>MLO-I mAs</th>
					<th>MLO-I Dosis</th>
					<th>Densidad de la Mama</th>
					<th>Nombre y Apellido Técnico</th>
					<th>Turno</th>
				</tr>
			</thead>
			<tbody id="mamografia">
			</tbody>
		</table>
	</section>
	<input type="submit" value="Enviar Data">
</form>