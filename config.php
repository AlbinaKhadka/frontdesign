<?php
session_start();
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "feliz";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>