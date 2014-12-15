<?php
	$host = "localhost";
	$user = "root";
	$pass = "ScoreMaster";
	$db_name = "xpression2014";
	//echo "connecting to db";
	$con = mysqli_connect($host, $user, $pass, $db_name);
	//echo "connected to db";
	if(mysqli_connect_errno($con)){
		echo 'Failed to connect to the database : '.mysqli_connect_error();
		die();
	}
?>
