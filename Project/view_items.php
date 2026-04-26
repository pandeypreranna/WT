<?php
include("config/db.php");

$result = $conn->query("SELECT * FROM items ORDER BY created_at DESC");
?>

<link rel="stylesheet" href="assets/style.css">

<div class="navbar">
    <h2>Lost & Found</h2>
</div>

<div class="section">
    <h2>All Items</h2>

    <?php while($row = $result->fetch_assoc()): ?>
        <div class="card">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <small>Status: <?php echo $row['status']; ?></small>
        </div>
    <?php endwhile; ?>
</div>

