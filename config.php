<?php

	$servername = "localhost";
	$username = "id18160840_spark";
	$password = "Sahil@171199";
	$dbname = "id18160840_spark01";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>