<?php
include "../conn.php";
session_start();

$area = $_POST['area'];
$area2 = $area;
$area2 = filter_var($area2, FILTER_SANITIZE_STRING);
$area2 = intval($area2);
$area2 = filter_var($area2, FILTER_SANITIZE_NUMBER_INT);
$area2 = strval($area2);

if (strlen($area2) > 1 && intval($area2 > 1)) {
    if (strcmp($area, $area2) != 0) {
        echo "<font color='red'>" . "Invalid" . "</font>";
    } else {
        echo "<font color='green'>" . "Valid" . "</font>";
    }
} else {
    echo "<font color='red'>" . "Enter Valid Number " . "</font>";
}
