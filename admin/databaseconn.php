<?php 
include "../conn.php";
if ($con -> connect_errno) 
    {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
	}
