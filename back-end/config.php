<?php
// Database configuration
$servername = "localhost";
$username = "timo";
$password = "timo";
$dbname = "google_forms_clone";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
