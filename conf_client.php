<?php
	$server = "localhost";
	$userName = "root";
	$password = "vertrigo";
	$database = "kda";
	$con = mysql_connect($server, $userName, $password);
	if(!$con){
		echo "Error : ".mysql_error();
		return;
	}
	$db = mysql_select_db($database,$con);
	if(!$db){
		echo "Error : ".mysql_error();
		return;
	}
	
	
?>