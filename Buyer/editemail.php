<?php 
include "../conn.php";
session_start();
$i = $_SESSION['ID'];
$n = $_POST['email'];
$sql = "update users set email= '$n' where id= '$i' ";
$result = mysqli_query( $conn , $sql );	
	
 			if($result)	
		{
			
			$_SESSION['Email']=$_POST['email'];
			echo "<font color='green'>"."Updated successfully"."</font>";
		}
else
    {
		
	echo "<font color='red'>"."Connection Error"."</font>";
	}
