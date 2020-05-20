<?php 
 include "../conn.php";
session_start();
$i = $_SESSION['ID'];
$n = $_POST['password'];
$sql = "update users set password= '$n' where id= '$i' ";
$result = mysqli_query( $conn , $sql );	
	
 			if($result)	
		{
			
			$_SESSION['Password']=$_POST['password'];
			$page = "profile.php";
 $sec = "3";
 header("Refresh: $sec; url=$page");
			echo "<font color='green'>"."Updated successfully"."</font>";
		}
else
    {
		
	echo "<font color='red'>"."Connection Error"."</font>";
	}
