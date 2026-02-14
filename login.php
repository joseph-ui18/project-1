<?php
include("config/db.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT user_id, username, password, role_id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $username, $hashed_password, $role_id);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['role_id'] = $role_id;

            if ($role_id == 1) { 
                header("Location: ../admin/dashboard.php");
                exit();
            } elseif ($role_id == 3) { 
                header("Location: ../passenger/dashboard.php");
                exit();
            } else { 
                header("Location: ../staff/dashboard.php");
                exit();
            }

        } else {
            $message = "Invalid password!";
        }
    } else {
        $message = "Email not found!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Global Airline</title>

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

header .logo { font-size: 22px; font-weight: bold; }
nav a { color: #fff; text-decoration: none; margin-left: 20px; }
nav a:hover { text-decoration: underline; }

.hero {
    background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb');
    background-size: cover;
    background-position: center;
    padding: 80px 20px;
    text-align: center;
    color: white;
}
.hero h1 { font-size: 40px; }

.form-container { display: flex; justify-content: center; margin-top: -40px; margin-bottom: 60px; }

form {
    background-color: white;
    padding: 30px;
    width: 400px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    display: flex;
    flex-direction: column;
    gap: 15px; 
}

form h2 {
    text-align: center;
    color: #002b5b;
    margin-bottom: 20px;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    background-color: #b97612;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover { background-color: #50682a; }

.message { text-align: center; margin-top: 10px; color: green; }

footer { background-color: #333; color: #fff; text-align: center; padding: 15px 0; }

</style>
</head>

<body>

<header>
    <div class="logo">Global Airline</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="../passenger/register.php">Register</a>
    </nav>
</header>

<section class="hero">
    <h1>Passenger Login</h1>
</section>

<div class="form-container">
    <form method="POST">
        <h2>Login</h2>

        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>

        <input type="submit" value="Login">

        <?php if ($message != ""): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
    </form>
</div>

<footer>
    <p>&copy; 2026 Global Airline. All rights reserved.</p>
</footer>

</body>
</html>
