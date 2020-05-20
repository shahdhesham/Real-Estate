<?php
include "../conn.php";
session_start();

$noOfBathrooms = $_POST['noOfBathrooms'];
$noOfBathrooms2 = $noOfBathrooms;
$noOfBathrooms2 = filter_var($noOfBathrooms2, FILTER_SANITIZE_STRING);
$noOfBathrooms2 = intval($noOfBathrooms2);
$noOfBathrooms2 = filter_var($noOfBathrooms2, FILTER_SANITIZE_NUMBER_INT);
$noOfBathrooms2 = strval($noOfBathrooms2);

if ((intval($noOfBathrooms2) > 0)) {
    if (strcmp($noOfBathrooms2, $noOfBathrooms) != 0) {
        echo "<font color='red'>" . "Invalid" . "</font>";
    } else {
        echo "<font color='green'>" . "Valid" . "</font>";
    }
} else {
    echo "<font color='red'>" . "Enter Valid Number " . "</font>";
}
