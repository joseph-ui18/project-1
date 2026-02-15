<?php
$host = 'localhost';
$db   = 'airport_db';
$user = 'root';
$pass2= '';
$pass = 'carl';


$conn = new mysqli($host, $user, $pass, $db, 3307);

if ($conn->connect_error) {

    $conn = new mysqli($host, $user, $pass2, $db, 3306);

    if ($conn->connect_error) {
        
        die("Connection failed on both ports: " . $conn->connect_error);
    }
}
?>
