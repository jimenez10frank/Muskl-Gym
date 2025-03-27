<?php
require "../Database/user.php";

session_start();

if (isset($_SESSION['logged_in'])) {
    header("Location: dashboard-user.php");

    
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User();
    $data = $user->loginUser($_POST['email']);

    if ($data) {
        if ($data['password'] == password_verify($_POST['password'], $data['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['id'] = $data['id'];            
            $_SESSION['name'] = $data['name'];
            header("Location: dashboard-user.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- for my icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- this is the navbar styling -->
  <link rel="stylesheet" href="../CSS/login-user.css">
  <!-- for the body -->
  <link rel="stylesheet" href="../CSS/body.css">

    <title>Login Page</title>
</head>
<body>
    <div class="logout">
        <a href="../HTML/homepage.php">Back to Home Page</a>
    </div>


    <form method="POST">
        <div class="container">
            <div class="lol">
        <h1 class="logo">Muskl Gym</h1>
        <i class="fa-solid fa-person-running fa-2xl" id="logo"></i>
        </div>
        <div class="email">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="password">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">Login</button>
        <div>
        Don't have an account?<a href="register.php">Register Here</a>
        </div>
        </div>
    </form>
</body>

</html>