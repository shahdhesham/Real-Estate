<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	exit();
}
