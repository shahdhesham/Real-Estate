<?php
include "../conn.php";
session_start();

$noOfRooms = $_POST['noOfRooms'];
$noOfRooms2 = $noOfRooms;
$noOfRooms = filter_var($noOfRooms, FILTER_SANITIZE_STRING);
$noOfRooms = intval($noOfRooms);
$noOfRooms = filter_var($noOfRooms, FILTER_SANITIZE_NUMBER_INT);
$noOfRooms = strval($noOfRooms);

if (strlen($noOfRooms) > 0) {
    $c = strcmp($noOfRooms, $noOfRooms2);
    if ($c == 0) {
        $_POST['noOfRooms'] = $noOfRooms;
        echo "<font color='green'>" . "Valid" . "</font>";
    } else {
        echo "<font color='red'>" . "Enter Valid Number " . "</font>";
    }
} else {
    echo "<font color='red'>" . "Enter Valid Number " . "</font>";
}
