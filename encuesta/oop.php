<?php
function sanitizeInput($s){
	return '\''.str_replace('\'','\\\'',str_replace('"','\\"',$s)).'\'';
}
class Radiologia{
	function __construct($email,$pais,$nombre_inst,$tipo_inst,$marca,$modelo,$nserial,$fecha_tubo,$sala,$tipo_equipo,$revelado,$marca_revelado,$modelo_revelado,$pacientes_atendidos,$sexo,$peso,$altura,$edad,$fecha_adquisicion_de_data,$tipo_estudio,$kv,$ma,$t,$mas,$dosis,$nombre_apellido_tec,$turno) {
		$this->email = sanitizeInput($email);
		$this->pais = sanitizeInput($pais);
		$this->nombre_inst = sanitizeInput($nombre_inst);
		$this->tipo_inst = sanitizeInput($tipo_inst);
		$this->marca = sanitizeInput($marca);
		$this->modelo = sanitizeInput($modelo);
		$this->nserial = sanitizeInput($nserial);
		#preg_replace is used for sanitize inputs of type 'date'
		$this->fecha_tubo = '\''.preg_replace("([^0-9/])", "", $fecha_tubo).'\'';
		$this->sala = sanitizeInput($sala);
		$this->tipo_equipo = sanitizeInput($tipo_equipo);
		$this->revelado = sanitizeInput($revelado);
		$this->marca_revelado = sanitizeInput($marca_revelado);
		$this->modelo_revelado = sanitizeInput($modelo_revelado);
		$this->pacientes_atendidos = (int) $pacientes_atendidos;
		$this->sexo = sanitizeInput($sexo);
		$this->peso = (int) $peso;
		$this->altura = (int) $altura;
		$this->edad = (int) $edad;
		#preg_replace is used for sanitize inputs of type 'date' using a regular expression
		$this->fecha_adquisicion_de_data = '\''.preg_replace("([^0-9/])", "", $fecha_adquisicion_de_data).'\'';
		$this->tipo_estudio = sanitizeInput($tipo_estudio);
		$this->kv = sanitizeInput($kv);
		$this->ma = sanitizeInput($ma);
		$this->t = sanitizeInput($t);
		$this->mas = sanitizeInput($mas);
		$this->dosis = sanitizeInput($dosis);
		$this->nombre_apellido_tec = sanitizeInput($nombre_apellido_tec);
		$this->turno = sanitizeInput($turno);
	}
	public function getQuery(){
		return ' ('.$this->email.','.$this->pais.','.$this->nombre_inst.','.$this->tipo_inst.','.$this->marca.','.$this->modelo.','.$this->nserial.','.$this->fecha_tubo.','.$this->sala.','.$this->tipo_equipo.','.$this->revelado.','.$this->marca_revelado.','.$this->modelo_revelado.','.$this->pacientes_atendidos.','.$this->sexo.','.$this->peso.','.$this->altura.','.$this->edad.','.$this->fecha_adquisicion_de_data.','.$this->tipo_estudio.','.$this->kv.','.$this->ma.','.$this->t.','.$this->mas.','.$this->dosis.','.$this->nombre_apellido_tec.','.$this->turno.')';
	}
}
class Mamografia{
	function __construct($email,$pais,$nombre_inst,$tipo_inst,$marca,$modelo,$nserial,$fecha_tubo,$sala,$tipo_equipo,$revelado,$marca_revelado,$modelo_revelado,$pacientes_atendidos,$sexo,$peso,$altura,$talla_brasier,$edad,$fecha_adquisicion_de_data,$tipo_estudio,$campo,$cae,$anodo_filtro,$cc_d_dist_compresion,$cc_d_fuerza_compresion,$cc_d_kv,$cc_d_ma,$cc_d_t,$cc_d_mas,$cc_d_dosis,$cc_i_dist_compresion,$cc_i_fuerza_compresion,$cc_i_kv,$cc_i_ma,$cc_i_t,$cc_i_mas,$cc_i_dosis,$mlo_d_dist_compresion,$mlo_d_fuerza_compresion,$mlo_d_kv,$mlo_d_ma,$mlo_d_t,$mlo_d_mas,$mlo_d_dosis,$mlo_i_dist_compresion,$mlo_i_fuerza_compresion,$mlo_i_kv,$mlo_i_ma,$mlo_i_t,$mlo_i_mas,$mlo_i_dosis,$densidad_mama,$nombre_apellido_tec,$turno){
		$this->email = sanitizeInput($email);
		$this->pais = sanitizeInput($pais);
		$this->nombre_inst = sanitizeInput($nombre_inst);
		$this->tipo_inst = sanitizeInput($tipo_inst);
		$this->marca = sanitizeInput($marca);
		$this->modelo = sanitizeInput($modelo);
		$this->nserial = sanitizeInput($nserial);
		$this->fecha_tubo = '\''.preg_replace("([^0-9/])", "", $fecha_tubo).'\'';
		$this->sala = sanitizeInput($sala);
		$this->tipo_equipo = sanitizeInput($tipo_equipo);
		$this->revelado = sanitizeInput($revelado);
		$this->marca_revelado = sanitizeInput($marca_revelado);
		$this->modelo_revelado = sanitizeInput($modelo_revelado);
		$this->pacientes_atendidos = (int)$pacientes_atendidos;
		$this->sexo = sanitizeInput($sexo);
		$this->peso = (int)$peso;
		$this->altura = (int)$altura;
		$this->talla_brasier = sanitizeInput($talla_brasier);
		$this->edad = (int)$edad;
		$this->fecha_adquisicion_de_data = '\''.preg_replace("([^0-9/])", "", $fecha_adquisicion_de_data).'\'';
		$this->tipo_estudio = sanitizeInput($tipo_estudio);
		$this->campo = sanitizeInput($campo);
		$this->cae = sanitizeInput($cae);
		$this->anodo_filtro = sanitizeInput($anodo_filtro);

		$this->cc_d_dist_compresion = (int) $cc_d_dist_compresion;
		$this->cc_d_fuerza_compresion = (int) $cc_d_fuerza_compresion;
		$this->cc_d_kv = sanitizeInput($cc_d_kv);
		$this->cc_d_ma = sanitizeInput($cc_d_ma);
		$this->cc_d_t = sanitizeInput($cc_d_t);
		$this->cc_d_mas = sanitizeInput($cc_d_mas);
		$this->cc_d_dosis = sanitizeInput($cc_d_dosis);

		$this->cc_i_dist_compresion = (int) $cc_i_dist_compresion;
		$this->cc_i_fuerza_compresion = (int) $cc_i_fuerza_compresion;
		$this->cc_i_kv = sanitizeInput($cc_i_kv);
		$this->cc_i_ma = sanitizeInput($cc_i_ma);
		$this->cc_i_t = sanitizeInput($cc_i_t);
		$this->cc_i_mas = sanitizeInput($cc_i_mas);
		$this->cc_i_dosis = sanitizeInput($cc_i_dosis);

		$this->mlo_d_dist_compresion = (int) $mlo_d_dist_compresion;
		$this->mlo_d_fuerza_compresion = (int) $mlo_d_fuerza_compresion;
		$this->mlo_d_kv = sanitizeInput($mlo_d_kv);
		$this->mlo_d_ma = sanitizeInput($mlo_d_ma);
		$this->mlo_d_t = sanitizeInput($mlo_d_t);
		$this->mlo_d_mas = sanitizeInput($mlo_d_mas);
		$this->mlo_d_dosis = sanitizeInput($mlo_d_dosis);

		$this->mlo_i_dist_compresion = (int) $mlo_i_dist_compresion;
		$this->mlo_i_fuerza_compresion = (int) $mlo_i_fuerza_compresion;
		$this->mlo_i_kv = sanitizeInput($mlo_i_kv);
		$this->mlo_i_ma = sanitizeInput($mlo_i_ma);
		$this->mlo_i_t = sanitizeInput($mlo_i_t);
		$this->mlo_i_mas = sanitizeInput($mlo_i_mas);
		$this->mlo_i_dosis = sanitizeInput($mlo_i_dosis);

		$this->densidad_mama = sanitizeInput($densidad_mama);
		$this->nombre_apellido_tec = sanitizeInput($nombre_apellido_tec);
		$this->turno = sanitizeInput($turno);
	}
	public function getQuery(){
		return ' ('.$this->email.','.$this->pais.','.$this->nombre_inst.','.$this->tipo_inst.','.$this->marca.','.$this->modelo.','.$this->nserial.','.$this->fecha_tubo.','.$this->sala.','.$this->tipo_equipo.','.$this->revelado.','.$this->marca_revelado.','.$this->modelo_revelado.','.$this->pacientes_atendidos.','.$this->sexo.','.$this->peso.','.$this->altura.','.$this->talla_brasier.','.$this->edad.','.$this->fecha_adquisicion_de_data.','.$this->tipo_estudio.','.$this->campo.','.$this->cae.','.$this->anodo_filtro.','.$this->cc_d_dist_compresion.','.$this->cc_d_fuerza_compresion.','.$this->cc_d_kv.','.$this->cc_d_ma.','.$this->cc_d_t.','.$this->cc_d_mas.','.$this->cc_d_dosis.','.$this->cc_i_dist_compresion.','.$this->cc_i_fuerza_compresion.','.$this->cc_i_kv.','.$this->cc_i_ma.','.$this->cc_i_t.','.$this->cc_i_mas.','.$this->cc_i_dosis.','.$this->mlo_d_dist_compresion.','.$this->mlo_d_fuerza_compresion.','.$this->mlo_d_kv.','.$this->mlo_d_ma.','.$this->mlo_d_t.','.$this->mlo_d_mas.','.$this->mlo_d_dosis.','.$this->mlo_i_dist_compresion.','.$this->mlo_i_fuerza_compresion.','.$this->mlo_i_kv.','.$this->mlo_i_ma.','.$this->mlo_i_t.','.$this->mlo_i_mas.','.$this->mlo_i_dosis.','.$this->densidad_mama.','.$this->nombre_apellido_tec.','.$this->turno.')';
	}
}
class Tomografia{
	function __construct($email,$pais,$nombre_inst,$tipo_inst,$marca,$modelo,$nserial,$fecha_tubo,$sala,$n_cortes,$pacientes_atendidos,$sexo,$peso,$altura,$edad,$fecha_adquisicion_de_data,$kv,$ma,$s,$mas,$longitud_exploracion,$pitch,$ctdi_vol,$dlp,$dlp_total,$dosis,$nombre_apellido_tec,$turno){
		$this->email = sanitizeInput($email);
		$this->pais = sanitizeInput($pais);
		$this->nombre_inst = sanitizeInput($nombre_inst);
		$this->tipo_inst = sanitizeInput($tipo_inst);
		$this->marca = sanitizeInput($marca);
		$this->modelo = sanitizeInput($modelo);
		$this->nserial = sanitizeInput($nserial);
		$this->fecha_tubo = '\''.preg_replace("([^0-9/])", "",$fecha_tubo).'\'';
		$this->sala = sanitizeInput($sala);
		$this->n_cortes = (int) $n_cortes;
		$this->pacientes_atendidos = (int) $pacientes_atendidos;
		$this->sexo = sanitizeInput($sexo);
		$this->peso = (int) $peso;
		$this->altura = (int) $altura;
		$this->edad = (int) $edad;
		$this->fecha_adquisicion_de_data = '\''.preg_replace("([^0-9/])", "",$fecha_adquisicion_de_data).'\'';
		$this->kv = sanitizeInput($kv);
		$this->ma = sanitizeInput($ma);
		$this->s = sanitizeInput($s);
		$this->mas = sanitizeInput($mas);
		$this->longitud_exploracion = sanitizeInput($longitud_exploracion);
		$this->pitch = sanitizeInput($pitch);
		$this->ctdi_vol = sanitizeInput($ctdi_vol);
		$this->dlp = sanitizeInput($dlp);
		$this->dlp_total = sanitizeInput($dlp_total);
		$this->dosis = sanitizeInput($dosis);
		$this->nombre_apellido_tec = sanitizeInput($nombre_apellido_tec);
		$this->turno = sanitizeInput($turno);
	}
	public function getQuery(){
		return ' ('.$this->email.','.$this->pais.','.$this->nombre_inst.','.$this->tipo_inst.','.$this->marca.','.$this->modelo.','.$this->nserial.','.$this->fecha_tubo.','.$this->sala.','.$this->n_cortes.','.$this->pacientes_atendidos.','.$this->sexo.','.$this->peso.','.$this->altura.','.$this->edad.','.$this->fecha_adquisicion_de_data.','.$this->kv.','.$this->ma.','.$this->s.','.$this->mas.','.$this->longitud_exploracion.','.$this->pitch.','.$this->ctdi_vol.','.$this->dlp.','.$this->dlp_total.','.$this->dosis.','.$this->nombre_apellido_tec.','.$this->turno.')';
	}
}
class Radent{
	function __construct($email,$pais,$nombre_inst,$tipo_inst,$marca,$modelo,$nserial,$fecha_tubo,$sala,$tipo_equipo,$revelado,$marca_revelado,$modelo_revelado,$pacientes_atendidos,$sexo,$peso,$altura,$edad,$fecha_adquisicion_de_data,$posicion_paciente,$kv,$ma,$t,$mas,$dosis,$nombre_apellido_tec,$turno){
		$this->email = sanitizeInput($email);
		$this->pais = sanitizeInput($pais);
		$this->nombre_inst = sanitizeInput($nombre_inst);
		$this->tipo_inst = sanitizeInput($tipo_inst);
		$this->marca = sanitizeInput($marca);
		$this->modelo = sanitizeInput($modelo);
		$this->nserial = sanitizeInput($nserial);
		$this->fecha_tubo = '\''.preg_replace("([^0-9/])", "",$fecha_tubo).'\'';
		$this->sala = sanitizeInput($sala);
		$this->tipo_equipo = sanitizeInput($tipo_equipo);
		$this->revelado = sanitizeInput($revelado);
		$this->marca_revelado = sanitizeInput($marca_revelado);
		$this->modelo_revelado = sanitizeInput($modelo_revelado);
		$this->pacientes_atendidos = (int) $pacientes_atendidos;
		$this->sexo = sanitizeInput($sexo);
		$this->peso = (int) $peso;
		$this->altura = (int) $altura;
		$this->edad = (int) $edad;
		$this->fecha_adquisicion_de_data = '\''.preg_replace("([^0-9/])", "",$fecha_adquisicion_de_data).'\'';
		$this->posicion_paciente = sanitizeInput($posicion_paciente);
		$this->kv = sanitizeInput($kv);
		$this->ma = sanitizeInput($ma);
		$this->t = sanitizeInput($t);
		$this->mas = sanitizeInput($mas);
		$this->dosis = sanitizeInput($dosis);
		$this->nombre_apellido_tec = sanitizeInput($nombre_apellido_tec);
		$this->turno = sanitizeInput($turno);
	}
	public function getQuery(){
		return ' ('.$this->email.','.$this->pais.','.$this->nombre_inst.','.$this->tipo_inst.','.$this->marca.','.$this->modelo.','.$this->nserial.','.$this->fecha_tubo.','.$this->sala.','.$this->tipo_equipo.','.$this->revelado.','.$this->marca_revelado.','.$this->modelo_revelado.','.$this->pacientes_atendidos.','.$this->sexo.','.$this->peso.','.$this->altura.','.$this->edad.','.$this->fecha_adquisicion_de_data.','.$this->posicion_paciente.','.$this->kv.','.$this->ma.','.$this->t.','.$this->mas.','.$this->dosis.','.$this->nombre_apellido_tec.','.$this->turno.')';
	}
}
?>
