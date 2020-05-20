<?php
include "../conn.php";
session_start();

$noOfRooms = $_POST['noOfRooms'];
$noOfRooms2 = $noOfRooms;
$noOfRooms2 = filter_var($noOfRooms2, FILTER_SANITIZE_STRING);
$noOfRooms2 = intval($noOfRooms2);
$noOfRooms2 = filter_var($noOfRooms2, FILTER_SANITIZE_NUMBER_INT);
$noOfRooms2 = strval($noOfRooms2);

if (intval($noOfRooms2) > 0) {
    if (strcmp($noOfRooms2, $noOfRooms) != 0) {
        echo "<font color='red'>" . "Invalid" . "</font>";
    } else {
        echo "<font color='green'>" . "Valid" . "</font>";
    }
} else {
    echo "<font color='red'>" . "Enter Valid Number " . "</font>";
}
