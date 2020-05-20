<?php
if (!isset($_SESSION)) {
    session_start();
}
echo $_GET['name'] . '<br>';
echo $_GET['email'];


$_SESSION["ID"] = $row["id"];
$_SESSION["fullname"] = $row["fullname"];
$_SESSION["mobile"] = $row["mobile"];
$_SESSION["email"] = $row["email"];
$_SESSION["password"] = $row["password"];
$_SESSION["role"] = $row["role"];
