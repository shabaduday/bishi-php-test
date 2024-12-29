<?php
	$host = 'localhost'; 
	$user = 'root'; 
	$pass = ''; 
	$db = 'mydb';
	
	$connect = mysqli_connect($host, $user, $pass, $db);

	if(mysqli_connect_error()) {
    echo "Error: Unable to connect to MySQL <br>";
    echo "Message: ".mysqli_connect_error()."<br>";
  }
?>