<?php
	$server =   "localhost";	// Nama hostnya
	$username = "root"; 		// Username
	$password = "";				// Password
	$database = "plant";		// Nama databasenya
	error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect($server, $username, $password)  or die("Unable to connect to database");
	mysql_select_db($database)  or die("Unable to select database");

?>