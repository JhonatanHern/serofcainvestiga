<?php
	function sanitize($s){
		return '\''.str_replace('\'','\\\'',str_replace('"','\\"',$s)).'\'';
	}
	$servername = "localhost";
	$username = "serofcai_Patei4";
	$password = "facebook2.0";
	$dbname = "serofcai_PATEI";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn) {
		die("Connection failed");
	}

	$email = sanitize($_POST['email']);
	$pw =  hash('sha256',$_POST['password']);
	
	$result = mysqli_query($conn,"SELECT * FROM users WHERE email = $email AND password = '$pw'");

	header('Content-Type: application/json');
	if (mysqli_num_rows($result) > 0) {
		echo '{"success":true}';
	} else {
		echo '{}';
	}
	$conn->close();
?>