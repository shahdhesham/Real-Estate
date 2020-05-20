<?php
include "../conn.php";
session_start();
$email = $_POST['email'];
$emailfil = filter_var($email, FILTER_SANITIZE_EMAIL);
$e = $_SESSION['Email'];
$sql = "select * from users where email='$emailfil'";
if ($result = mysqli_query($conn, $sql)) {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

		if (mysqli_num_rows($result) > 0) {
			$c = strcmp($email, $e);
			if ($c != 0) {
				echo "<font color='red'>" . "Email already exists" . "</font>";
			} else {
				$_POST['email'] = $email;
				echo "<font color='green'>" . "Valid" . "</font>";
			}
		} else {
			$_POST['email'] = $email;
			echo "<font color='green'>" . "Valid" . "</font>";
		}
	} else {
		echo "<font color='red'>" . "Invalid Email Address" . "</font>";
	}
} else {
	echo "error:unable to execute";
}
