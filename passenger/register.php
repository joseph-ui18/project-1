<?php
include("../config/db.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role_id = 3; // Passenger

    $profile_pic = null; 
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
        $upload_dir = '../uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        $filename = time() . '_' . basename($_FILES['profile_pic']['name']);
        $target_file = $upload_dir . $filename;

        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file)) {
            $profile_pic = 'uploads/' . $filename; // save relative path
        }
    }

    // Insert into database using prepared statement
    $stmt = $conn->prepare("INSERT INTO users (username, password, email, phone, profile_pic, role_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $username, $password, $email, $phone, $profile_pic, $role_id);

    if ($stmt->execute()) {
        $message = "Registration Successful!";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - Global Airline</title>

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

input[type="text"],
input[type="password"],
input[type="email"],
input[type="file"] {
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

input[type="submit"]:hover {
    background-color: #50682a;
}

.message { text-align: center; margin-top: 10px; color: green; }

footer { background-color: #333; color: #fff; text-align: center; padding: 15px 0; }

</style>
</head>

<body>

<header>
    <div class="logo">Global Airline</div>
    <nav>
        <a href="../index.php">Home</a>
        <a href="../login.php">Login</a>
    </nav>
</header>

<section class="hero">
    <h1>Create Your Passenger Account</h1>
</section>

<div class="form-container">
    <form method="POST" enctype="multipart/form-data">
        <h2>Register</h2>

        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="text" name="phone" placeholder="Enter Phone Number">
        <input type="file" name="profile_pic" accept="image/*">

        <input type="submit" value="Register">

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
