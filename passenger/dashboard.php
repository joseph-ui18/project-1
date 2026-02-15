<?php
include '../config/db.php';

session_start();
if (!isset($_SESSION['username']) || $_SESSION['role_id'] != 3) {
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>GLOBAL AIRLINE DASHBOARD</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .navbar {
            background: #2f0ac3;
            width: 220px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 30px;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            padding: 15px 20px;
            display: block;
            font-size: 16px;
        }

        .navbar a:hover {
            background-color: black;
        }

        .main-content {
            margin-left: 210px;
            padding: 40px;

        }

        .headings {
            font-size: 26px;
            margin-bottom: 0px;
            text-align: center;
        }

        .hello {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.6);
            max-width: 500px;
        }
    </style>
</head>
<body>

    <div class="navbar"> GLOBAL AIRLINE
        <a href="index.php"><i class="fa-solid fa-house"></i> Main</a>
        <a href="book.php"><i class="fa-solid fa-plane"></i> Flight Details</a>
        <a href="feedback.php"><i class="fa-solid fa-comment"></i> Feedback</a>
        <a href="logout.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Logout</a>
    </div>

    <div class="main-content">
        <h1 class="headings">Welcome to the Passenger Dashboard</h1>

        <div class="hello">
            <?php
            if (isset($_SESSION['username'])) {
                echo "<p>Hello, " . htmlspecialchars($_SESSION['username']) . "! Welcome to your dashboard.</p>";
            }
            ?>
        </div>
    </div>

</body>
</html>
 