<?php

require "../Database/admin.php";


session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login-admin.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin.css">

    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Dashboard Admin</h1>
    <a href="../HTML/logout-admin.php">Logout</a>
    <div class="amdmin-group">
    <div class="admin">
    <p>Here you can view all the users and their details</p>
    <a href="../HTML/view-users-admin.php">View Users</a>
    </div>
    <div class="admin">
    <p>Here you can view all the contacts and their details</p>
    <a href="../HTML/memberships-admin.php">View Memberships</a>
    </div>
    <div class="admin">
    <p>Here you can view all the products and their details</p>
    <a href="../HTML/view-products.php">View Products</a>
    </div>
    <div class="admin">
    <p>Here you can view all the contacts and their details</p>
    <a href="../HTML/view-messages.php">View Messages</a>
    </div>
    </div>



</body>
</html>