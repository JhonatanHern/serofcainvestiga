<?php
	$servername = "localhost";
	$username = "serofcai_Patei4";
	$password = "facebook2.0";
	$dbname = "serofcai_PATEI";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>