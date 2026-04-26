<?php
include("config/db.php");

$msg = "";

if (isset($_POST['register'])) {
    $u = $_POST['username'];
    $e = $_POST['email'];
    $p = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM users WHERE email='$e'");
    if ($check->num_rows > 0) {
        $msg = "Email already exists!";
    } else {
        $conn->query("INSERT INTO users (username,email,password) VALUES ('$u','$e','$p')");
        $msg = "Registration successful!";
    }
}
?>

<link rel="stylesheet" href="assets/style.css">

<div class="navbar">
    <h2>Lost & Found</h2>
</div>

<div class="hero" style="justify-content:center;">
    <div class="card" style="max-width:400px;">
        <h2>Create Account</h2>

        <p><?php echo $msg; ?></p>

        <form method="POST">
            <input name="username" placeholder="Username" required>
            <input name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button class="btn btn-primary" name="register">Register</button>
        </form>

        <p style="text-align:center;">
            Already have account? <a href="login.php">Login</a>
        </p>
    </div>
</div>

