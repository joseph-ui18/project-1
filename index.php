<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Airline</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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

        nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .hero {
            background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            background-color: #b97612;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #50682a;
        }

        .info {
            display: flex;
            justify-content: center;
            padding: 50px 20px;
            gap: 30px;
            border-radius: 5px;
        }

        .card {
            background-color: #fff;
            padding: 25px;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 250px;
        }

        .card h3 {
            margin-top: 0;
            color: #002b5b;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px 0;
        }

    </style>

</head>
<body>
    <header>
        <div class="logo"> Global Airline</div>
        <nav>   
            <a href="index.php">Home</a>
            <a href="passenger/register.php">Register</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <section class="hero">   
        <h1>Welcome to Global Airline</h1>
        <p>Your gateway to the world. Book your flights, manage your bookings, and explore new destinations with us.</p>
        <a href ="passenger/book.php" class="btn">Book Now!</a>
    </section>

    <section class="info">
        <div class="card">
            <h3>Flight Status</h3>
            <p>Track your flights in real-time. Get updates on delays, gate changes, and departure times.</p>
        </div>

        <div class="card">
            <h3>Book a Flight</h3>
            <p>Choose from a wide range of destinations and flights. Our booking system is fast, secure, and easy to use.</p>
        </div>

        <div class="card">
            <h3>Manage Bookings</h3>
            <p>Easily manage your existing bookings. View, modify, or cancel flights with just a few clicks.</p>

        </div>
    </section>

    <footer>
        <p>&copy; 2026 Global Airline Worldwide. served.</p>
    </footer> 

</body>
</html>
