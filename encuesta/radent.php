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

$sql = 'INSERT INTO radiologia_dental (email,pais,nombre_inst,tipo_inst,marca,modelo,nserial,fecha_tubo,sala,tipo_equipo,revelado,marca_revelado,modelo_revelado,pacientes_atendidos,sexo,peso,altura,edad,fecha_adquisicion_de_data,posicion_paciente,kv,ma,t,mas,dosis,nombre_apellido_tec,turno) VALUES';

$first = true;
for ( $i = 0 ; $i < $fields ; $i++ ) {
	$radent = new Radent($_POST['email'],
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
		$_POST['edad'.$i],
		$_POST['fecha_adquisicion_de_data'.$i],
		$_POST['posicion_paciente'.$i],
		$_POST['kv'.$i],
		$_POST['ma'.$i],
		$_POST['t'.$i],
		$_POST['mas'.$i],
		$_POST['dosis'.$i],
		$_POST['nombre_apellido_tec'.$i],
		$_POST['turno'.$i]);
	$query = $radent->getQuery();
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