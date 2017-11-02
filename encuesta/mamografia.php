<?php
require 'database.php';
require 'oop.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
	
if (!$conn) {
	die("Connection failed");
}

$email = sanitize($_POST['email']);
$pw =  hash('sha256',$_POST['password']);

$result = mysqli_query($conn,"SELECT * FROM users WHERE email = $email AND password = '$pw'");

if (mysqli_num_rows($result) < 1) {
	die("auth failed");
}
$fields = (int) $_POST['formlength'];

$sql = 'INSERT INTO mamografia (email,pais,nombre_inst,tipo_inst,marca,modelo,nserial,fecha_tubo,sala,tipo_equipo,revelado,marca_revelado,modelo_revelado,pacientes_atendidos,sexo,peso,altura,talla_brasier,edad,fecha_adquisicion_de_data,tipo_estudio,campo,cae,anodo_filtro,cc_d_dist_compresion,cc_d_fuerza_compresion,cc_d_kv,cc_d_ma,cc_d_t,cc_d_mas,cc_d_dosis,cc_i_dist_compresion,cc_i_fuerza_compresion,cc_i_kv,cc_i_ma,cc_i_t,cc_i_mas,cc_i_dosis,mlo_d_dist_compresion,mlo_d_fuerza_compresion,mlo_d_kv,mlo_d_ma,mlo_d_t,mlo_d_mas,mlo_d_dosis,mlo_i_dist_compresion,mlo_i_fuerza_compresion,mlo_i_kv,mlo_i_ma,mlo_i_t,mlo_i_mas,mlo_i_dosis,densidad_mama,nombre_apellido_tec,turno) VALUES';


$first = true;
for ( $i = 0 ; $i < $fields ; $i++ ) {
	$mamografia = new Mamografia($_POST['email'],
		$_POST['pais'.$i],
		$_POST['nombre_inst'.$i],
		$_POST['tipo_inst'.$i],
		$_POST['marca'.$i],
		$_POST['modelo'.$i],
		$_POST['nserial'.$i],
		$_POST['fecha_tubo'.$i],
		$_POST['sala'.$i],
		$_POST['tipo_equipo'.$i],
		$_POST['revelado'.$i],
		$_POST['marca_revelado'.$i],
		$_POST['modelo_revelado'.$i],
		$_POST['pacientes_atendidos'.$i],
		$_POST['sexo'.$i],
		$_POST['peso'.$i],
		$_POST['altura'.$i],
		$_POST['talla_brasier'.$i],
		$_POST['edad'.$i],
		$_POST['fecha_adquisicion_de_data'.$i],
		$_POST['tipo_estudio'.$i],
		$_POST['campo'.$i],
		$_POST['cae'.$i],
		$_POST['anodo_filtro'.$i],
		$_POST['cc_d_dist_compresion'.$i],
		$_POST['cc_d_fuerza_compresion'.$i],
		$_POST['cc_d_kv'.$i],
		$_POST['cc_d_ma'.$i],
		$_POST['cc_d_t'.$i],
		$_POST['cc_d_mas'.$i],
		$_POST['cc_d_dosis'.$i],
		$_POST['cc_i_dist_compresion'.$i],
		$_POST['cc_i_fuerza_compresion'.$i],
		$_POST['cc_i_kv'.$i],
		$_POST['cc_i_ma'.$i],
		$_POST['cc_i_t'.$i],
		$_POST['cc_i_mas'.$i],
		$_POST['cc_i_dosis'.$i],
		$_POST['mlo_d_dist_compresion'.$i],
		$_POST['mlo_d_fuerza_compresion'.$i],
		$_POST['mlo_d_kv'.$i],
		$_POST['mlo_d_ma'.$i],
		$_POST['mlo_d_t'.$i],
		$_POST['mlo_d_mas'.$i],
		$_POST['mlo_d_dosis'.$i],
		$_POST['mlo_i_dist_compresion'.$i],
		$_POST['mlo_i_fuerza_compresion'.$i],
		$_POST['mlo_i_kv'.$i],
		$_POST['mlo_i_ma'.$i],
		$_POST['mlo_i_t'.$i],
		$_POST['mlo_i_mas'.$i],
		$_POST['mlo_i_dosis'.$i],
		$_POST['densidad_mama'.$i],
		$_POST['nombre_apellido_tec'.$i],
		$_POST['turno'.$i]);
	$query = $mamografia->getQuery();
	if ($first) {
		$first = false;
	}else{
		$query = ','.$query;
	}
	$sql .= $query;
}
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>