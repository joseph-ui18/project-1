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
            background-image: url('https://images.unsplash.com/photo-1569629743817-70d8db6c323b?q=80&w=1198&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            color: black;
            background-size: cover;
            background-position: center;
            padding: 150px 5px;
            margin-top: auto;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 26px;
            margin-bottom: 0px;
            text-align: center;
        }

        .hello {
            background: white;
            padding: 20px 1px;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.6);
            max-width: 500px;
            font-size: 15px;
        }

        .head {
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 10px;      
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

    </style>
</head>
<body>

    
    <div class="main-content">
        <h1 class="headings"></h1>
    </div>

    <div class="head">
        <h1>WELCOME TO GLOBAL AIRLINE DASHBOARD</h1>
    
    <div class="navbar">GLOBAL AIRLINE
        <a href="index.php"><i class="fa-solid fa-house"></i> Main</a>
        <a href="book.php"><i class="fa-solid fa-plane"></i> Flight Details</a>
        <a href="feedback.php"><i class="fa-solid fa-comment"></i> Feedback</a>
        <a href="logout.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Logout</a>
    </div>

        <section class="main-content">
            <div class="hello">
                <ul>
                    <li> Manila (MNL) to Cebu (CEB)</li>
                    <p> Departure: 2024-07-15 08:00 AM</p>
                    <p> Arrival: 2024-07-15 09:30 AM</p>
                    <p> Price: $100</p>
                </ul>
            </div>
        
        <br>

        <section>
            <div class="hello">
                <ul>
                    <li> Manila (MNL) to Davao (DVO)</li>
                    <p> Departure: 2024-07-20 10:00 AM</p>
                    <p> Arrival: 2024-07-20 12:30 PM</p>
                    <p> Price: $150</p>
                </ul>
            </div>
        </section>

        <br>

        <section>
            <div class="hello">
                <ul>
                    <li> Manila (MNL) to Iloilo (ILO)</li>
                    <p> Departure: 2024-07-25 02:00 PM</p>
                    <p> Arrival: 2024-07-25 03:30 PM</p>
                    <p> Price: $120</p>
                </ul>
            </div>

        <br>

        <footer>
            <p>&copy; 2026 Global Airline. All rights reserved.</p>
        </footer>
</body>
</html>
 