<?php

require '../Database/contact.php';

$contact = new Contact();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $contact->contact($name, $email, $message);
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
  <link rel="stylesheet" href="../CSS/navbars.css">
  <!-- for the body -->
  <link rel="stylesheet" href="../CSS/body.css">
  <!-- Contact Form Styling -->
  <link rel="stylesheet" href="../CSS/contact.css">

  <!-- footer styling -->
  <link rel="stylesheet" href="../CSS/footer.css">

  <title>Contact Page</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary rounded">
    <div class="container-fluid">
      <!-- Navbar Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible Navbar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- brand logo -->
        <a class="navbar-brand col-lg-3 me-0" href="#"><i class="fa-solid fa-person-running fa-2xl" id="logo"></i></a>
        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../HTML/memberships.php">Memberships</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">The Gym</a>
          </li>
          <!-- Dropdown Contact -->
          <li class="nav-item dropdown position-relative">
            <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Contact
            </a>
            <ul class="dropdown-menu" aria-labelledby="contactDropdown">
              <li><a class="dropdown-item" href="#">Send us a message!</a></li>
              <li><a class="dropdown-item" href="#">Our Location</a></li>
              <li><a class="dropdown-item" href="#">FAQ</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-lg-flex col-lg-3 justify-content-lg-end">
          <button class="btn btn-success">Get Membership Now!</button>
          <button class="btn btn-primary">Login</button>
        </div>
      </div>
    </div>
  </nav>
  <!-- Contact Form -->
  <div class="container">
    <div class="contact-container">
      <h1>Contact Us</h1>
      <p>Send us a message and we will get back to you as soon as possible!</p>
    </div>
    <form method="post" class="contact-form">
      <div class="form-group">
        <i class="fa-solid fa-user"></i>
        <input type="text" id="name" placeholder="Enter your name" name="name" required>
      </div>
      <div class="form-group">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" id="email" placeholder="Enter your email" name="email" required>
      </div>
      <div class="form-group txtArea">
        <i class="fa-solid fa-comment"></i>
        <textarea id="message" placeholder="Enter your message" name="message" required></textarea>
      </div>
      <button type="submit" class="submit">Submit</button>
    </form>
  </div>

  <div class="footercontainer">
    <footer>
      <!-- Muskl Section -->
      <div class="footer-section">
        <h3>Muskl <i class="fa-solid fa-person-running fa-2xl" id="logo"></i></h3>
        <p>Achieve your fitness goals in a modern and supportive environment with cutting-edge equipment and expert trainers.</p>
      </div>

      <!-- Quick Links Section -->
      <div class="footer-section">
        <h3>Quick Links</h3>
        <a href="#">Home</a>
        <a href="#">Memberships</a>
        <a href="#">Products</a>
        <a href="#">The Gym</a>
        <a href="#">Contact</a>
      </div>

      <!-- Follow Us Section -->
      <div class="footer-section social-icons">
        <h3>Follow Us</h3>
        <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
      </div>

      <!-- Newsletter Section -->
      <div class="footer-section newsletter">
        <h3>Newsletter</h3>
        <p>Stay updated with our latest news and exclusive offers!</p>
        <form action="#" method="post">
          <input type="email" placeholder="Enter your email" required>
          <input type="submit" value="Subscribe">
        </form>
      </div>
    </footer>

    <!-- Footer Bottom -->
    <div class="footer-bottom text-center py-3" style="text-align: center; margin-top: 20px;">
      <p>&copy; 2025 Muskl | All rights Reserverd</p>
    </div>
  </div>


  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>