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
  <!-- homepage content -->
  <link rel="stylesheet" href="../CSS/membership.css">
  <!-- footer styling -->
  <link rel="stylesheet" href="../CSS/footer.css">

  <title>Homepage</title>
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
            <a class="nav-link" href="#">Memberships</a>
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
  <!-- header -->
  <header>
    <div class="menu">
      <title>Memberships</title>
      <h1>Membership Plans</h1>
      <p>Choose the membership that best suits your needs and start your fitness journey today!</p>
    </div>
    <!-- Basic -->
    <div class="memberships">
      <section class="membership-box">
        <div class="membership-plan">
          <h3>comfort</h3>
          <p>Access to all gym equipment</p>
          <p>Access to group classes</p>
          <p>Locker room access</p>
          <p>Price: $50/month</p>
          <button class="sign-up">Sign Up</button>
      </section>
      <!-- basic -->
      <section class="membership-box">
        <div class="membership-plan">
          <h6>Most Chosen!</h6>
          <h3>Basic</h3>
          <p>Access to all gym equipment</p>
          <p>Access to group classes</p>
          <p>Locker room access</p>
          <p>Price: $50/month</p>
          <button class="sign-up1">Sign Up</button>
        </div>
      </section>
      <!-- Pro -->
      <section class="membership-box">
        <div class="membership-plan">
          <h3>Pro</h3>
          <p>Access to all gym equipment</p>
          <p>Access to group classes</p>
          <p>Locker room access</p>
          <p>Price: $50/month</p>
          <button class="sign-up">Sign Up</button>
        </div>
      </section>
    </div>
  </header>
  <!-- comparison -->
  <section class="comparison">
    <h2>Compare Memberships</h2>
    <table>
      <tr>
        <th>Features</th>
        <th>Comfort</th>
        <th>Basic</th>
        <th>Pro</th>
      </tr>
      <tr>
        <td>Access to all gym equipment</td>
        <td><i class="fas fa-check"></i></td>
        <td><i class="fas fa-check"></i></td>
        <td><i class="fas fa-check"></i></td>
      </tr>
      <tr>
        <td>Access to group classes</td>
        <td><i class="fas fa-check"></i></td>
        <td><i class="fas fa-check"></i></td>
        <td><i class="fas fa-check"></i></td>
      </tr>
      <tr>
        <td>Locker room access</td>
        <td><i class="fas fa-check"></i></td>
        <td><i class="fas fa-check"></i></td>
        <td><i class="fas fa-check"></i></td>
      </tr>
      <tr>
        <td>Price</td>
        <td>$50/month</td>
        <td>$50/month</td>
        <td>$50/month</td>
      </tr>
    </table>

  </section class="faq">
  <h2>Frequently Asked Questions</h2>
  <p>To make sure our future members know what they are getting involved in, here is a list of answered questions:</p>
<button class="accordion"></button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<!-- this is for frequent asked questions script from W3Schools -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

  </section>

  <!-- Footer -->
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