<?php
include "../conn.php";
session_start();

$price = $_POST['price'];
$price2 = $price;
$price2 = filter_var($price2, FILTER_SANITIZE_STRING);
$price2 = intval($price2);
$price2 = filter_var($price2, FILTER_SANITIZE_NUMBER_INT);
$price2 = strval($price2);

if (strlen($price2) > 1 && intval($price2 > 1)) {
    if (strcmp($price, $price2) != 0) {
        echo "<font color='red'>" . "Invalid" . "</font>";
    } else {
        echo "<font color='green'>" . "Valid" . "</font>";
    }
} else {
    echo "<font color='red'>" . "Enter Valid Number " . "</font>";
}
