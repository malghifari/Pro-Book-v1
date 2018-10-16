<?php 

include '../.env.php';

//Create mysqli object
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Error handler
if($mysqli->connect_error){
	
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

?>