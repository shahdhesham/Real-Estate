<?php
include "../conn.php";
session_start();
     $conn =new mysqli($servername,$username,$password,$dbname);
     $sql="delete from users where id='".$_SESSION['id']."';";
     $result=mysqli_query($conn,$sql);
if($result)
{

	session_unset();
	session_destroy();
	header("Location:index.html");
}
else
{
	echo $sql;
}
