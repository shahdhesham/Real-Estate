<?php
include "../conn.php";
session_start();

$price = $_POST['price'];
$price2 = $price;
$price = filter_var($price, FILTER_SANITIZE_STRING);
$price = intval($price);
$price = filter_var($price, FILTER_SANITIZE_NUMBER_INT);
$price = strval($price);

if (strlen($price) > 0) {
    $c = strcmp($price, $price2);
    if ($c == 0) {
        $_POST['price'] = $price;
        echo "<font color='green'>" . "Valid" . "</font>";
    } else {
        echo "<font color='red'>" . "Invalid Price " . "</font>";
    }
} else {
    echo "<font color='red'>" . "Invalid Price " . "</font>";
}
