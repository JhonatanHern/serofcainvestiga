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

$sql = 'INSERT INTO tomografia (email,pais,nombre_inst,tipo_inst,marca,modelo,nserial,fecha_tubo,sala,n_cortes,pacientes_atendidos,sexo,peso,altura,edad,fecha_adquisicion_de_data,kv,ma,s,mas,longitud_exploracion,pitch,ctdi_vol,dlp,dlp_total,dosis,nombre_apellido_tec,turno) VALUES';

$first = true;
for ( $i = 0 ; $i < $fields ; $i++ ) {
	$tomografia = new Tomografia($_POST['email'],
		$_POST['pais'.$i],
		$_POST['nombre_inst'.$i],
		$_POST['tipo_inst'.$i],
		$_POST['marca'.$i],
		$_POST['modelo'.$i],
		$_POST['nserial'.$i],
		$_POST['fecha_tubo'.$i],
		$_POST['sala'.$i],
		$_POST['n_cortes'.$i],
		$_POST['pacientes_atendidos'.$i],
		$_POST['sexo'.$i],
		$_POST['peso'.$i],
		$_POST['altura'.$i],
		$_POST['edad'.$i],
		$_POST['fecha_adquisicion_de_data'.$i],
		$_POST['kv'.$i],
		$_POST['ma'.$i],
		$_POST['s'.$i],
		$_POST['mas'.$i],
		$_POST['longitud_exploracion'.$i],
		$_POST['pitch'.$i],
		$_POST['ctdi_vol'.$i],
		$_POST['dlp'.$i],
		$_POST['dlp_total'.$i],
		$_POST['dosis'.$i],
		$_POST['nombre_apellido_tec'.$i],
		$_POST['turno'.$i]);
	$query = $tomografia->getQuery();
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