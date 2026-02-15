<?php
$host = 'localhost';
$db   = 'airport_db';
$user = 'root';
$pass = 'carl';
$conn = new mysqli($host, $user, $pass, $db, 3307);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
