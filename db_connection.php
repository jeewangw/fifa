<?php

	$dbhost = "localhost:8889";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "soccerworldcup";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	if(!$conn)
	{
		echo "Sorry, Connection Failed.<br>";
	}
	else
	{
		echo "Sucessfully Connected <br>";
	}
?>