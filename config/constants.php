<?php
	//Start Session
	session_start();



	//Create Constants to Store Non Repeating Values
	define('SITEURL', 'http://localhost:8080/property/');
	define('LOCALHOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'property');

	$conn = mysqli_connect('LOCALHOST', 'root', '') or die(mysqli_error()); //Database Connection
	$db_select = mysqli_select_db($conn,'property') or die(mysqli_error()); //Selecting Database

?>