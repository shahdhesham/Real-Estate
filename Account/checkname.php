<?php
include "../conn.php";
$email = $_POST['email'];
$emailfil = filter_var($email, FILTER_SANITIZE_EMAIL);

$sql = "select * from users where email='$email'";
if ($result = mysqli_query($conn, $sql)) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

        if (mysqli_num_rows($result) == 0) {


            echo "<font color='red'>" . "Email does not exist" . "</font>";
        }
    } else {
        echo "<font color='red'>" . "Invalid Email Address" . "</font>";
    }
} else {
    echo "error:unable to execute";
}
