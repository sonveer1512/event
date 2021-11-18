<?php
	$user = 'root';
	$pass = '';
	$database = 'admin';
	$server = 'localhost';

	$database = new mysqli($server, $user, $pass, $database);
	if ($database->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	//echo 'great work'

?>