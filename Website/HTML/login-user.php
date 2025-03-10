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
    <a href="../HTML/homepage.php">Back to Home Page</a>
    <h1>Login Page</h1>


    <form action="../Database/user.php" method="POST">
        <h1 class="logo">Muskl Gym</h1>
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
    </form>
</body>

</html>