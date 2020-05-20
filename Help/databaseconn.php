<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="realestate";
$connection=new mysqli($servername, $username, $password, $dbname);
if ($connection -> connect_errno) 
    {
	echo "Failed to connect to MySQL: " . error_log("Failed to connect to database!", 3,"realestate/Help/errors.txt");
	exit();
	}	
?>