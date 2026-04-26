<?php
session_start();
include("config/db.php");

$error = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($res->num_rows > 0) {
        $user = $res->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header("Location: index.php");
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "User not found!";
    }
}
?>

<link rel="stylesheet" href="assets/style.css">

<div class="navbar">
    <h2>Lost & Found</h2>
</div>

<div class="hero" style="justify-content:center;">
    <div class="card" style="max-width:400px; width:100%;">
        <h2 style="text-align:center;">Login</h2>

        <?php if($error) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button class="btn btn-primary" name="login">Login</button>
        </form>

        <p style="margin-top:15px; text-align:center;">
            Don't have an account? <a href="register.php">Register</a>
        </p>
    </div>
</div>

