<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "pep lemon";

// Create connection
$conn = new mysqli("localhost","root", "root123", "pep lemon");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
