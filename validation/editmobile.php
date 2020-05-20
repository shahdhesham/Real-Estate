<?php 
 include "../conn.php";
session_start();
$i = $_SESSION['ID'];
$n = $_POST['mobile'];
$sql = "update users set mobile= '$n' where id= '$i' ";
$result = mysqli_query( $conn , $sql );	
	
 			if($result)	
		{
			
			$_SESSION['Mobile']=$_POST['mobile'];
			echo "<font color='green'>"."Updated successfully"."</font>";
		}
else
    {
		
	echo "<font color='red'>"."Connection Error"."</font>";
	}
