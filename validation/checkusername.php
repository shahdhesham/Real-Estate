<?php
include "../conn.php";

$username = $_POST['username'];
$sql = "select * from users where username='$username'";
$name = filter_var($username, FILTER_SANITIZE_STRING);
if ($result = mysqli_query($conn, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        echo "<font color='red'>" . "username already exists" . "</font>";
    } else  if (str_word_count($username) == 1) {
        if (preg_match("/[^a-zA-Z\s'-]/", $username)) {
            echo "<font color='red'>" . "Invalid username no symbols or numbers" . "</font>";
        } else {
            echo "<font color='gteen'>" . "Valid" . "</font>";
        }
    } else {
        $_POST['username'] = $username;
        echo "<font color='red'>" . "Must enter unique username" . "</font>";
    }
} else {
    echo "<font color='red'>" . "No space" . "</font>";
}
