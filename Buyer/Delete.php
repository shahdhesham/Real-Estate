<?php
include "../conn.php";
session_start();
$sql = "delete from users where id='" . $_SESSION['ID'] . "';";
$result = mysqli_query($conn, $sql);
if ($result) {

	session_unset();
	session_destroy();
	header("Location:../index.php");
} else {
	echo $sql;
}
