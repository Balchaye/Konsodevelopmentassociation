<?php
/*
	$server = "localhost";
	$userName = 'root';
	$password = '';
	$database = "kda";
	$con = mysqli_connect($server, $userName, $password);
	if(!$con){
		echo "Error : ".mysqli_error();
		return;
	}
	$db = mysqli_select_db($database,$con);
	if(!$db){
		echo "Error : ".mysqli_error();
		return;
	}
	*/
	
	

				$user='root';
				$pass='';
				$db="kda";
				$db =new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

?>