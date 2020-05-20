<?php
include "../conn.php";
session_start();

$area = $_POST['area'];
$area2 = $area;
$area = filter_var($area, FILTER_SANITIZE_STRING);
$area = intval($area);
$area = filter_var($area, FILTER_SANITIZE_NUMBER_INT);
$area = strval($area);

if (strlen($area) > 0) {
    $c = strcmp($area, $area2);
    if ($c == 0) {
        $_POST['area'] = $area;
        echo "<font color='green'>" . "Valid" . "</font>";
    } else {
        echo "<font color='red'>" . "Enter Valid Number " . "</font>";
    }
} else {
    echo "<font color='red'>" . "Enter Valid Number " . "</font>";
}
