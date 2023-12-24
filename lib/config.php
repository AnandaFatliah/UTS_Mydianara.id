<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "db_mydianara_id";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
