<?php
	function sanitize($s){
		return '\''.str_replace('\'','\\\'',str_replace('"','\\"',$s)).'\'';
	}
	$servername = "localhost";
	$username = "serofcai_Patei4";
	$password = "facebook2.0";
	$dbname = "serofcai_PATEI";
?>