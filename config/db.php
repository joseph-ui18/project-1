<?php
$host = 'localhost';
$user = 'user';      
$pass = 'pass';      
$db   = 'airport_db'; 


$conn = @new mysqli($host, $user, $pass, $db, 3306);

    if ($conn->connect_error) {
            $conn = new mysqli($host, $user, $pass, $db, 3307);

    if ($conn->connect_error) {
        die("Connection failed on both ports: " . $conn->connect_error);
    }
}
?>
