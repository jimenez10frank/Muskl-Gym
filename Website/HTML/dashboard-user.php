<?php

session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: ../HTML/logout-user.php");
}
$_SESSION['name'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome to your dashboard, <?php echo $_SESSION['name']; ?></h1>
    <a href="../HTML/logout-user.php">Logout</a>
</body>
</html>