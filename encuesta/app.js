const maxLoad = 20
const minLoad = 1

$(document).ready(function() {
	$('#hitmail').click(function() {
		if (!$('#mail').val()) {
			alert('escribe tu correo')
			return
		}
		$('#username').css('display','none')
		$('#password').css('display','block')
	})
	$('#hitpw').click(function() {
		if (!$('#pw').val()) {
			alert('escribe tu contraseña')
			return
		}
		$.ajax({
			url:'login.php',
			data:`email=${encodeURI($('#mail').val())}&password=${encodeURI($('#pw').val())}`,
			type:"POST",
			success:function(json){
				console.log(json)
				if (!json.success) {
					alert('error')
					return
				}
				$('#password').css('display','none')
				$('#pickForm').css('display','flex')
			}
		})
	})
	$('#pickForm button').click(function() {
		let flag = $(this).text()
		let form = Array.from(document.getElementsByClassName('form')).filter(e=>e.getAttribute('app-name')===flag)[0]
		$('#pickForm').css('display','none')
		form.style['display'] = 'block'
	})
	var bid = e => document.getElementById(e)//shortcut

	updateSize = function () {//event listener for the selects
		this.value = Number(this.value) || 0
		this.value = this.value > maxLoad ? maxLoad: this.value
		this.value = this.value < minLoad ? minLoad : this.value
		let selectId = this.id.split('-num')[0]
		dictionary[selectId](Number(this.value))
	}
	bid('radiologia-num').addEventListener('change',updateSize)
	bid('radiologia-num').addEventListener('keyup' ,updateSize)
	bid('mamografia-num').addEventListener('change',updateSize)
	bid('mamografia-num').addEventListener('keyup' ,updateSize)
	bid('tomografia-num').addEventListener('change',updateSize)
	bid('tomografia-num').addEventListener('keyup' ,updateSize)
	bid('radiologia-dental-num').addEventListener('change',updateSize)
	bid('radiologia-dental-num').addEventListener('keyup' ,updateSize)
		
	let dictionary = {
		'radiologia':function (cantFields) {
			let table = bid('radiologia'),
				result = ''
			for (var i = cantFields - 1; i >= 0; i--) {
				result += `
					<tr>
						<td>
							<select name="pais${i}">
								<option value="Venezuela">Venezuela</option>
								<option value="Brasil">Brasil</option>
								<option value="España">España</option>
								<option value="Mexico">Mexico</option>
								<option value="Chile">Chile</option>
								<option value="Colombia">Colombia</option>
								<option value="Estados Unidos">Estados Unidos</option>
								<option value="Canadá">Canadá</option>
								<option value="Australia">Australia</option>
							</select>
						</td>
						<td><input type="text" name="nombre_inst${i}" maxlength='30'></td>
						<td>
							<select name="tipo_inst${i}">
								<option value="u">Pública</option>
								<option value="i">Privada</option>
							</select>
						</td>
						<td><input type="" name="marca${i}" maxlength="15"></td>
						<td><input type="" name="modelo${i}" maxlength="15"></td>
						<td><input type="" name="nserial${i}" maxlength="12"></td>
						<td><input type="" name="fecha_tubo${i}" maxlength="8" placeholder="aaaa/mm/dd"></td>
						<td><input type="" name="sala${i}" maxlength="10"></td>
						<td>
							<select name="tipo_equipo${i}">
								<option value='a'>Analógico</option>
								<option value='d'>Digital</option>
							</select>
						</td>
						<td>
							<select name="revelado${i}">
								<option value='h'>Húmedo</option>
								<option value='o'>Digitalizado CR</option>
								<option value='l'>Digital CR</option>
							</select>
						</td>
						<td><input type="text" name="marca_revelado${i}" maxlength="15"></td>
						<td><input type="text" name="modelo_revelado${i}" maxlength="15"></td>
						<td><input type="number" name="pacientes_atendidos${i}" min='0'></td>
						<td>
							<select name="sexo${i}">
								<option value='f'>Mujer</option>
								<option value='m'>Hombre</option>
							</select>
						</td>
						<td><input type="number" name="peso${i}" min='0'></td>
						<td><input type="number" name="altura${i}" min='0'></td>
						<td><input type="number" name="edad${i}" min='0'></td>
						<td><input name="fecha_adquisicion_de_data${i}" maxlength="8" placeholder="aaaa/mm/dd"></td>
						<td><input type="text" maxlength='25' name="tipo_estudio${i}"></td>
						<td><input type="text" maxlength='3' name="kv${i}"></td>
						<td><input type="text" maxlength='3' name="ma${i}"></td>
						<td><input type="text" maxlength='4' name="t${i}"></td>
						<td><input type="text" maxlength='4' name="mas${i}"></td>
						<td><input type="text" maxlength='6' name="dosis${i}"></td>
						<td><input type="text" maxlength='20' name="nombre_apellido_tec${i}"></td>
						<td>
							<select name="turno${i}">
								<option value='m'>Mañana</option>
								<option value='t'>Tarde</option>
								<option value='n'>Noche</option>
							</select>
						</td>
					</tr>
				`
			}
			table.innerHTML = result
		},
		'mamografia':function (cantFields) {
			let table = bid('mamografia'),
				result = ''
			for (var i = cantFields - 1; i >= 0; i--) {
				result += `
					<tr>
						<td>
							<select name="pais${i}">
								<option value="Venezuela">Venezuela</option>
								<option value="Brasil">Brasil</option>
								<option value="España">España</option>
								<option value="Mexico">Mexico</option>
								<option value="Chile">Chile</option>
								<option value="Colombia">Colombia</option>
								<option value="Estados Unidos">Estados Unidos</option>
								<option value="Canadá">Canadá</option>
								<option value="Australia">Australia</option>
							</select>
						</td>
						<td><input type="text" name="nombre_inst${i}" maxlength='30'></td>
						<td>
							<select name="tipo_inst${i}">
								<option value="u">Pública</option>
								<option value="i">Privada</option>
							</select>
						</td>
						<td><input type="" name="marca${i}" maxlength="15"></td>
						<td><input type="" name="modelo${i}" maxlength="15"></td>
						<td><input type="" name="nserial${i}" maxlength="12"></td>
						<td><input type="" name="fecha_tubo${i}" maxlength="8" placeholder="aaaa/mm/dd"></td>
						<td><input type="" name="sala${i}" maxlength="10"></td>
						<td>
							<select name="tipo_equipo${i}">
								<option value='a'>Analógico</option>
								<option value='d'>Digital</option>
							</select>
						</td>
						<td>
							<select name="revelado${i}">
								<option value='h'>Húmedo</option>
								<option value='o'>Digitalizado CR</option>
								<option value='l'>Digital CR</option>
							</select>
						</td>
						<td><input type="text" name="marca_revelado${i}" maxlength="15"></td>
						<td><input type="text" name="modelo_revelado${i}" maxlength="15"></td>
						<td><input type="number" name="pacientes_atendidos${i}" min='0'></td>
						<td>
							<select name="sexo${i}">
								<option value='f'>Mujer</option>
								<option value='m'>Hombre</option>
							</select>
						</td>
						<td><input type="number" name="peso${i}" min='0'></td>
						<td><input type="number" name="altura${i}" min='0'></td>
						<td><input type="text" name="talla_brasier${i}" maxlength="3"></td>
						<td><input type="number" name="edad${i}" min='0'></td>
						<td><input name="fecha_adquisicion_de_data${i}" maxlength="8" placeholder="aaaa/mm/dd"></td>
						<td>
							<select name="tipo_estudio${i}">
								<option value='m'>Mamografía</option>
								<option value='t'>Tomosíntesis</option>
							</select>
						</td>
						<td><input type="text" name="campo${i}" maxlength="9"></td>
						<td>
							<select name="cae${i}">
								<option value='s'>Si</option>
								<option value='n'>No</option>
							</select>
						</td>
						<td><input type="text" name="anodo_filtro${i}" maxlength="8"></td>

						<td><input type="text" maxlength='3' name="cc_d_dist_compresion${i}"></td>
						<td><input type="text" maxlength='3' name="cc_d_fuerza_compresion${i}"></td>
						<td><input type="text" maxlength='3' name="cc_d_kv${i}"></td>
						<td><input type="text" maxlength='3' name="cc_d_ma${i}"></td>
						<td><input type="text" maxlength='4' name="cc_d_t${i}"></td>
						<td><input type="text" maxlength='4' name="cc_d_mas${i}"></td>
						<td><input type="text" maxlength='6' name="cc_d_dosis${i}"></td>

						<td><input type="text" maxlength='3' name="cc_i_dist_compresion${i}"></td>
						<td><input type="text" maxlength='3' name="cc_i_fuerza_compresion${i}"></td>
						<td><input type="text" maxlength='3' name="cc_i_kv${i}"></td>
						<td><input type="text" maxlength='3' name="cc_i_ma${i}"></td>
						<td><input type="text" maxlength='4' name="cc_i_t${i}"></td>
						<td><input type="text" maxlength='4' name="cc_i_mas${i}"></td>
						<td><input type="text" maxlength='6' name="cc_i_dosis${i}"></td>

						<td><input type="text" maxlength='3' name="mlo_d_dist_compresion${i}"></td>
						<td><input type="text" maxlength='3' name="mlo_d_fuerza_compresion${i}"></td>
						<td><input type="text" maxlength='3' name="mlo_d_kv${i}"></td>
						<td><input type="text" maxlength='3' name="mlo_d_ma${i}"></td>
						<td><input type="text" maxlength='4' name="mlo_d_t${i}"></td>
						<td><input type="text" maxlength='4' name="mlo_d_mas${i}"></td>
						<td><input type="text" maxlength='6' name="mlo_d_dosis${i}"></td>

						<td><input type="text" maxlength='3' name="mlo_i_dist_compresion${i}"></td>
						<td><input type="text" maxlength='3' name="mlo_i_fuerza_compresion${i}"></td>
						<td><input type="text" maxlength='3' name="mlo_i_kv${i}"></td>
						<td><input type="text" maxlength='3' name="mlo_i_ma${i}"></td>
						<td><input type="text" maxlength='4' name="mlo_i_t${i}"></td>
						<td><input type="text" maxlength='4' name="mlo_i_mas${i}"></td>
						<td><input type="text" maxlength='6' name="mlo_i_dosis${i}"></td>

						<td>
							<select name="densidad_mama${i}">
								<option value='f'>Fibroangular</option>
								<option value='a'>Adiposo</option>
								<option value='p'>Promedio</option>
							</select>
						</td>
						<td><input type="text" maxlength='20' name="nombre_apellido_tec${i}"></td>
						<td>
							<select name="turno${i}">
								<option value='m'>Mañana</option>
								<option value='t'>Tarde</option>
								<option value='n'>Noche</option>
							</select>
						</td>
					</tr>
				`
			}
			table.innerHTML = result
		},
		'tomografia':function (cantFields) {
			let table = bid('tomografia'),
				result = ''
			for (var i = cantFields - 1; i >= 0; i--) {
				result += `
					<tr>
						<td>
							<select name="pais${i}">
								<option value="Venezuela">Venezuela</option>
								<option value="Brasil">Brasil</option>
								<option value="España">España</option>
								<option value="Mexico">Mexico</option>
								<option value="Chile">Chile</option>
								<option value="Colombia">Colombia</option>
								<option value="Estados Unidos">Estados Unidos</option>
								<option value="Canadá">Canadá</option>
								<option value="Australia">Australia</option>
							</select>
						</td>
						<td><input type="text" name="nombre_inst${i}" maxlength='30'></td>
						<td>
							<select name="tipo_inst${i}">
								<option value="u">Pública</option>
								<option value="i">Privada</option>
							</select>
						</td>
						<td><input type="" name="marca${i}" maxlength="15"></td>
						<td><input type="" name="modelo${i}" maxlength="15"></td>
						<td><input type="" name="nserial${i}" maxlength="12"></td>
						<td><input type="" name="fecha_tubo${i}" maxlength="8" placeholder="aaaa/mm/dd"></td>
						<td><input type="" name="sala${i}" maxlength="10"></td>
						<td><input type="number" name="n_cortes${i}" min="0"></td>
						<td><input type="number" name="pacientes_atendidos${i}" min='0'></td>
						<td>
							<select name="sexo${i}">
								<option value='f'>Mujer</option>
								<option value='m'>Hombre</option>
							</select>
						</td>
						<td><input type="number" name="peso${i}" min='0'></td>
						<td><input type="number" name="altura${i}" min='0'></td>
						<td><input type="number" name="edad${i}" min='0'></td>
						<td><input name="fecha_adquisicion_de_data${i}" maxlength="8" placeholder="aaaa/mm/dd"></td>
						<td><input type="text" maxlength='3' name="kv${i}"></td>
						<td><input type="text" maxlength='3' name="ma${i}"></td>
						<td><input type="text" maxlength='4' name="s${i}"></td>
						<td><input type="text" maxlength='4' name="mas${i}"></td>
						<td><input type="text" maxlength='4' name="longitud_exploracion${i}"></td>
						<td><input type="text" maxlength='3' name="pitch${i}"></td>
						<td><input type="text" maxlength='5' name="ctdi_vol${i}"></td>
						<td><input type="text" maxlength='5' name="dlp${i}"></td>
						<td><input type="text" maxlength='5' name="dlp_total${i}"></td>
						<td><input type="text" maxlength='6' name="dosis${i}"></td>
						<td><input type="text" maxlength='20' name="nombre_apellido_tec${i}"></td>
						<td>
							<select name="turno${i}">
								<option value='m'>Mañana</option>
								<option value='t'>Tarde</option>
								<option value='n'>Noche</option>
							</select>
						</td>
					</tr>
				`
			}
			table.innerHTML = result
		},
		'radiologia-dental':function (cantFields) {
			let table = bid('radiologia-dental'),
				result = ''
			for (var i = cantFields - 1; i >= 0; i--) {
				result += `
					<tr>
						<td>
							<select name="pais${i}">
								<option value="Venezuela">Venezuela</option>
								<option value="Brasil">Brasil</option>
								<option value="España">España</option>
								<option value="Mexico">Mexico</option>
								<option value="Chile">Chile</option>
								<option value="Colombia">Colombia</option>
								<option value="Estados Unidos">Estados Unidos</option>
								<option value="Canadá">Canadá</option>
								<option value="Australia">Australia</option>
							</select>
						</td>
						<td><input type="text" name="nombre_inst${i}" maxlength='30'></td>
						<td>
							<select name="tipo_inst${i}">
								<option value="u">Pública</option>
								<option value="i">Privada</option>
							</select>
						</td>
						<td><input type="" name="marca${i}" maxlength="15"></td>
						<td><input type="" name="modelo${i}" maxlength="15"></td>
						<td><input type="" name="nserial${i}" maxlength="12"></td>
						<td><input type="" name="fecha_tubo${i}" maxlength="8" placeholder="aaaa/mm/dd"></td>
						<td><input type="" name="sala${i}" maxlength="10"></td>
						<td>
							<select name="tipo_equipo${i}">
								<option value='a'>Analógico</option>
								<option value='d'>Digital</option>
							</select>
						</td>
						<td>
							<select name="revelado${i}">
								<option value='h'>Húmedo</option>
								<option value='o'>Digitalizado CR</option>
								<option value='l'>Digital CR</option>
							</select>
						</td>
						<td><input type="text" name="marca_revelado${i}" maxlength="15"></td>
						<td><input type="text" name="modelo_revelado${i}" maxlength="15"></td>
						<td><input type="number" name="pacientes_atendidos${i}" min='0'></td>
						<td>
							<select name="sexo${i}">
								<option value='f'>Mujer</option>
								<option value='m'>Hombre</option>
							</select>
						</td>
						<td><input type="number" name="peso${i}" min='0'></td>
						<td><input type="number" name="altura${i}" min='0'></td>
						<td><input type="number" name="edad${i}" min='0'></td>
						<td><input name="fecha_adquisicion_de_data${i}" maxlength="8" placeholder="aaaa/mm/dd"></td>
						<td>
							<select name="posicion_paciente${i}">
								<option value='s'>Sentado</option>
								<option value='p'>De Pie</option>
							</select>
						</td>
						<td><input type="text" maxlength='3' name="kv${i}"></td>
						<td><input type="text" maxlength='3' name="ma${i}"></td>
						<td><input type="text" maxlength='4' name="t${i}"></td>
						<td><input type="text" maxlength='4' name="mas${i}"></td>
						<td><input type="text" maxlength='6' name="dosis${i}"></td>
						<td><input type="text" maxlength='20' name="nombre_apellido_tec${i}"></td>
						<td>
							<select name="turno${i}">
								<option value='m'>Mañana</option>
								<option value='t'>Tarde</option>
								<option value='n'>Noche</option>
							</select>
						</td>
					</tr>
				`
			}
			table.innerHTML = result
		}
	}
})