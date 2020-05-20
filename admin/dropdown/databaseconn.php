<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="realestate";
$con=new mysqli($servername, $username, $password, $dbname);
if ($con -> connect_errno) 
    {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
	}	
?>