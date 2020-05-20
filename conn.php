
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn1 = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn1) {
    $error_message = "error!!!!!";
    $log_file = fopen('errors.txt', 'w');
    ini_set("log_errors", true);
    ini_set('error_log', 'errors.txt');
    error_log($error_message, 3, 'errors.txt');
}
?> 


