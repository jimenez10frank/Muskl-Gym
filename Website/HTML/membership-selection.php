<?php

require "../Database/user.php";

session_start();

// Redirect if the user is not logged in
if (!isset($_SESSION['logged_in'])) {
    header("Location: ../HTML/logout-user.php");
    exit();
}

// Get the logged-in user id
$loggedInUser = $_SESSION['id'];
$user = new User();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && $loggedInUser) {
    $type = $_POST['type'];
    $created_at = $_POST['created_at'];
    $ends_at = $_POST['ends_at'];

    // Validate inputs
    if ($type && $created_at && $ends_at) {
        $user->memberships($loggedInUser, $type, $created_at, $ends_at);
        echo "<p style='color: green;'>Membership added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Please fill in all fields.</p>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="fonta">
    <link rel="stylesheet" href="../CSS/body.css">
    <link rel="stylesheet" href="../CSS/membership-selection.css">
    <title>Select Your Membership</title>
</head>
    <div class="logout">
<i class="fa-sharp fa-solid fa-arrow-left"></i>
    <a href="../HTML/dashboard-user.php">Go back to memberships</a>
</div>
<div class="logo">
<h1 class="logo">Muskl Gym</h1>
<i class="fa-solid fa-person-running fa-2xl" id="logo"></i>
</div>
<form method="POST">
    <div class="form-group">
            <h1>
                Select Your Membership
            </h1>
            <div class="membership">
                <label for="membership">Choose your membership:</label>
                <select id="type" name="type">
                    <option value="comfort">comfort</option>
                    <option value="basic">basic</option>
                    <option value="pro">pro</option>
                </select>
        </div>
        <div class="start">
            <label for="start">Choose your start date:</label>
            <input type="date" id="start" name="created_at" required>
            </div>
        <div class="end">
            <label for="end">Choose your end date:</label>
            <input type="date" id="end" name="ends_at" required>
    </div>
    </div>
    <input type="submit" value="Start Now" name="start">
    </form>
    </div>
</body>
</html>