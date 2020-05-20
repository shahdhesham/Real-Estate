<?php
include "../conn.php";
session_start();




$sql = "delete from user where ID =" . $_SESSION['ID'];
$result = mysqli_query($conn, $sql);
if ($result) {
	session_destroy();

	header("Location:index.php");
} else {
	echo $sql;
}
