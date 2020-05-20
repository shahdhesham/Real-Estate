<?php
include "../conn.php";
session_start();

$mobile = $_POST['mobile'];
$m2 = $mobile;
$mobile = filter_var($mobile, FILTER_SANITIZE_STRING);
$sql = "select * from users where mobile='$mobile'";
if ($result = mysqli_query($conn, $sql)) {
	$mobile = intval($mobile);
	$mobile = filter_var($mobile, FILTER_SANITIZE_NUMBER_INT);
	$mobile = strval($mobile);
	$phone_to_check = str_replace("-", "", $mobile);
	if (strlen($mobile) == 10) {

		if (mysqli_num_rows($result) > 0) {

			echo "<font color='red'>" . "Mobile Number already exists" . "</font>";
		} else {
			$_POST['mobile'] = $mobile;
			echo "<font color='green'>" . "Valid" . "</font>";
		}
	} else {
		echo "<font color='red'>" . "Invalid Mobile Number must be 11" . "</font>";
	}
} else {
	echo "error:unable to execute";
}
