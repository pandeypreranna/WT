<?php
include("config/db.php");

$msg = "";

if (isset($_POST['submit'])) {
    $t = $_POST['title'];
    $d = $_POST['description'];
    $c = $_POST['contact'];

    $conn->query("INSERT INTO items (title,description,status,contact)
                  VALUES ('$t','$d','found','$c')");

    $msg = "Item posted successfully!";
}
?>

<link rel="stylesheet" href="assets/style.css">

<div class="navbar">
    <h2>Lost & Found</h2>
</div>

<div class="hero" style="justify-content:center;">
    <div class="card" style="max-width:500px;">
        <h2>Post Found Item</h2>

        <p><?php echo $msg; ?></p>

        <form method="POST">
            <input name="title" placeholder="Item Title" required>
            <textarea name="description" placeholder="Description"></textarea>
            <input name="contact" placeholder="Contact" required>

            <button class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>
