<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($servername, $username, $password);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
