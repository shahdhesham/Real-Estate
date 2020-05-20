<?php
include "../conn.php";
session_start();

$noOfBathrooms = $_POST['noOfBathrooms'];
$noOfBathrooms2 = $noOfBathrooms;
$noOfBathrooms = filter_var($noOfBathrooms, FILTER_SANITIZE_STRING);
$noOfBathrooms = intval($noOfBathrooms);
$noOfBathrooms = filter_var($noOfBathrooms, FILTER_SANITIZE_NUMBER_INT);
$noOfBathrooms = strval($noOfBathrooms);

if (strlen($noOfBathrooms) > 0) {
    $c = strcmp($noOfBathrooms, $noOfBathrooms2);
    if ($c == 0) {
        $_POST['noOfBathrooms'] = $noOfBathrooms;
        echo "<font color='green'>" . "Valid" . "</font>";
    } else {
        echo "<font color='red'>" . "Enter Valid Number " . "</font>";
    }
} else {
    echo "<font color='red'>" . "Enter Valid Number " . "</font>";
}
