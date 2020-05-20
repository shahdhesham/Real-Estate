<?php 
 include "../conn.php";
session_start();
$i = $_SESSION['ID'];
$n = $_POST['name'];
$sql = "update users set fullname= '$n' where id= '$i' ";
$result = mysqli_query( $conn , $sql );	
	
 			if($result)	
		{
			
			$_SESSION['Name']=$_POST['name'];
			
			echo "<font color='green'>"."Updated successfully"."</font>";
		}
else
    {
		
	echo "<font color='red'>"."Connection Error"."</font>";
	}
