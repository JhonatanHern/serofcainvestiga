<form method="GET">
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
					<th>Email</th>
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
					<th>Edad</th>
					<th>Fecha de Adquisición de Data</th>
					<th>Tipo de Estudio</th>
					<th>kV</th>
					<th>mA</th>
					<th>t</th>
					<th>mAs</th>
					<th>Dosis</th>
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