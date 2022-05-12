<?php
/* Database connection settings */
	$servername = "us-cdbr-east-05.cleardb.net";
    $username = "b34eb92b7aec8e";		//put your phpmyadmin username.(default is "root")
    $password = "0ab5a1d9";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "heroku_53482f502e59994";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>