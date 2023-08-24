<?php
//this php script is for connecting with daabase
//data has to be fecthed from local server
//user is root
$user = 'root';
$password = '';

//database name is kda
$database = 'kda';
//serever is local host with 
//port number 
$servername = 'localhost';
$mysqli = new mysqli($servername, $user, $password, $database);

//Checking for connections 
if(!$mysqli){
    echo "connected ";
}
?>