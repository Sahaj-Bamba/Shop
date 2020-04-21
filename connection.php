<?php
	
	// set connection variables

	$servername = "localhost";
	$username = getenv('sql_username');
	$password = getenv('sql_password');
	$dbname = getenv('sql_db');

	// Create Connection

	$con = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	} 

		
	// Start Session and set session variables

	session_start();

?>
