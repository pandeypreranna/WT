<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost & Found Portal</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <h2>Lost & Found</h2>
    <div>
        <a href="index.php">Home</a>
        <a href="view_items.php">Items</a>
        <a href="post_lost.php">Post Lost</a>
        <a href="post_found.php">Post Found</a>
        <a href="login.php">Login</a>
    </div>
</div>

<!-- HERO SECTION -->
<div class="hero">
    <div class="hero-text">
        <h1>Lost Something?<br>We Help <span>You Find It</span></h1>
        <p>A smart platform to report lost items and help others reconnect with their belongings.</p>

        <a href="post_lost.php">
            <button class="btn btn-primary">Report Lost Item</button>
        </a>

        <a href="post_found.php">
            <button class="btn btn-secondary">Report Found Item</button>
        </a>
    </div>

    <div>
        <!-- Optional Image -->
    </div>
</div>

<!-- SEARCH BAR -->
<div class="search-box">
    <input type="text" placeholder="Search lost or found items...">
    <button>Search</button>
</div>

<!-- HOW IT WORKS -->
<div class="section">
    <h2>How It Works</h2>

    <div class="steps">
        <div class="step">
            <h3>1. Report</h3>
            <p>Submit details of lost or found item</p>
        </div>

        <div class="step">
            <h3>2. Search</h3>
            <p>Browse listings to find matches</p>
        </div>

        <div class="step">
            <h3>3. Notify</h3>
            <p>Contact the person easily</p>
        </div>

        <div class="step">
            <h3>4. Reunite</h3>
            <p>Get your item back safely</p>
        </div>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    <h3>Lost & Found Portal</h3>
    <p>Helping people reconnect with their belongings.</p>
    <p style="margin-top:10px;">© 2026 All rights reserved.</p>
</div>

</body>
</html>

