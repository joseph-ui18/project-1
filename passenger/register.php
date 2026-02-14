<?php

$host = "localhost";
$username = "root"; 
$password = "carl";
$dbname = "airport_db";

$conn = new mysqli($host, $username, $password, $dbname, 3307);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

isset($_POST['username']) ? $username = $_POST['username'] : $username = "";
isset($_POST['password']) ? $password = $_POST['password'] : $password = "";
isset($_POST['role_id']) ? $role_id = $_POST['role_id'] : $role_id = "3";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO users (username, password, role_id) VALUES ('$username', '$password', '$role_id')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER FORM</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #3bc3b0;
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        background-color: #fff;
        padding: 20px;
        border-radius: 20px;
        justify-content: center;
        margin: 0 auto;
        width: 500px;
        margin-top: 100px;
        box-shadow: 0 4px 8px rgb(0, 0, 0, 1000);
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    input[type="text"],
    input[type="password"] {
        width: 450px;
        padding: 10px;
        margin-bottom: 15px;
        border: 2px solid gray;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #050e11;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #cb1717;
    }

    .navbar {
        background-color: #002b5b;
        padding: 1px;
        padding-left: 10px;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        padding: 5px;
    }

    header {
            background-color: #002b5b;
            color: #fff;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 22px;
            font-weight: bold;
        }
</style>
<body>
    <header>
    <div class="logo"> Global Airline</div>
        <nav class="navbar">   
            <a href="../index.php">Home</a>
            <a href="../login.php">Login</a>
        </nav>
    </header>

    <h1>REGISTER FORM</h1>
    <form action="register.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">

    </form>
    
</body>
</html>