<form method="GET">
	<h3>Tomografía</h3>
	<div>
		Cantidad a registrar:
		<input type="number" name="formlength" id="tomografia-num">
		<script>
			document.getElementById('tomografia-num').value = '0'
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
					<th>Cantidad de Cortes</th>
					<th>Pacientes Atendidos</th>
					<th>Sexo</th>
					<th>Peso (kg)</th>
					<th>Altura (cm)</th>
					<th>Edad</th>
					<th>Fecha de Adquisición de Data</th>
					<th>kV</th>
					<th>mA</th>
					<th>t</th>
					<th>mAs</th>
					<th>Longitud de Exploración</th>
					<th>PITCH</th>
					<th>CTDI vol</th>
					<th>DLP</th>
					<th>DLP Total</th>
					<th>Dosis</th>
					<th>Nombre y Apellido Técnico</th>
					<th>Turno</th>
				</tr>
			</thead>
			<tbody id="tomografia">
			</tbody>
		</table>
	</section>
	<input type="submit" value="Enviar Data">
</form>