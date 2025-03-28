<?php

require "../Database/user.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    try {
        $account = new user();
        $account->register($_POST['name'], $_POST['lastname'], $_POST['birthdate'], $_POST['sex'], $_POST['phonenumber'], $_POST['email'], $_POST['password']);
        header("Location: ../HTML/login-user.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
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
  <link rel="stylesheet" href="../CSS/register.css">
  <!-- for the body -->
  <link rel="stylesheet" href="../CSS/body.css">
    <title>Register User</title>
</head>
<body>
<div class="logout">
    <i class="fa-solid fa-arrow-left"></i>
        <a href="../HTML/homepage.php">Back to Home Page</a>
    </div>

    <div class="container">
    <form action="../HTML/register.php" method="POST">
            <h2 class="startTraining">Start Training Today</h2>
            <div class="form-group">
                <!-- personal details group -->
            <div class="first-name">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="name" id="name" placeholder="First Name" required>
            </div>
            <div class="last-name">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
            </div>
            <div class="birthdate">
            <i class="fa-solid fa-calendar"></i>
            <input type="date" name="birthdate" id="birthdate" placeholder="birthdate" required>
            </div>
            <div class="sex-group">
            <label for="sex">Choose your gender:</label>
            <select id="sex" name="sex">
            <option value="female">female</option>
            <option value="male">male</option>
            <option value="other">other</option>
            </select>
            </div>
            <div class="phone">
            <i class="fa-solid fa-phone"></i>
            <input type="tel" name="phonenumber" id="phonenumber" placeholder="Phone Number" required>
            </div>
            <div class="email">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            </div>
            <div class="password">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <input type="submit" value="register" name="register">
        </div>
    </form>
    </div>
</body>
</html>