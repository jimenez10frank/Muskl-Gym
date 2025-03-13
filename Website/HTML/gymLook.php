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
  <!-- for the body -->
  <link rel="stylesheet" href="../CSS/body.css">
  <!-- membership content -->
  <link rel="stylesheet" href="../CSS/theGym.css">
  <!-- some stuff for  -->
  <link rel="stylesheet" href="../CSS/homepage.css">
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
  <!-- header -->
   <div class="group">
<div class="sauna">
    <div class="sauna-text">
    <h1>Our Sauna</h1>
    <p>Our sauna is the perfect place to relax and unwind after a workout. 
        The heat helps to soothe sore muscles and improve circulation, while the steam can help to clear your skin and airways. 
        It's the perfect way to end your workout and leave you feeling refreshed and rejuvenated.</p>
        </div>
    <img src="../Assets/Pictures/sauna1.jpg" alt="background" id="sauna">
</div>
</div>
<!-- slideshows -->
<div id="carouselExampleCaptions1" class="carousel slide sectieCarousel">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="../Assets/Pictures/sauna4.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Strength Starts Here</h5>
      <p><strong>Push your limits and build the strongest version of yourself. 
        Our state-of-the-art equipment and expert trainers are here to fuel your fitness journey.</strong></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../Assets/Pictures/sauna2.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Refresh & Recharge</h5>
      <p><strong>Elevate your post-workout experience with our premium showers and wellness facilities.
        Because recovery is just as important as the workout.</strong></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../Assets/Pictures/sauna3.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Recover Like a Pro</h5>
      <p><strong>Maximize your performance with our dedicated recovery zone. 
        From massage tools to guided relaxation, we help you stay at your best.</strong></p>
    </div>
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<div class="group">
<div class="equipment">
    <div class="equipment-text">
    <h1>The best Gym Equipment</h1>
    <p>Our gym is fully equipped with the latest fitness machines and free weights to suit all training styles. 
        From treadmills and rowing machines to squat racks and dumbbells, we provide everything you need for a complete and effective workout.</p>
        </div>
    <img src="../Assets/Pictures/equipment1.jpg" alt="background" id="sauna">
</div>
</div>
<!-- slideshows -->
<div id="carouselExampleCaptions2" class="carousel slide sectieCarousel">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="../Assets/Pictures/equipment2.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Strength Starts Here</h5>
      <p><strong>Push your limits and build the strongest version of yourself. 
        Our state-of-the-art equipment and expert trainers are here to fuel your fitness journey.</strong></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../Assets/Pictures/equipment3.png" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Refresh & Recharge</h5>
      <p><strong>Elevate your post-workout experience with our premium showers and wellness facilities.
        Because recovery is just as important as the workout.</strong></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../Assets/Pictures/equipment4.png" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Recover Like a Pro</h5>
      <p><strong>Maximize your performance with our dedicated recovery zone. 
        From massage tools to guided relaxation, we help you stay at your best.</strong></p>
    </div>
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<div class="group">
<div class="wellness">
    <div class="wellness-text">
    <h1>Our Wellness Zone</h1>
    <p>Our wellness zone is designed to help you recharge both body and mind. 
        Featuring relaxation areas, soothing music, and ambient lighting, it’s the perfect space to unwind after a tough workout. 
        Whether you're meditating or simply taking a break, you'll leave feeling completely refreshed.</p>
        </div>
    <img src="../Assets/Pictures/wellness3.png" alt="background" id="wellness">
</div>
</div>
<!-- slideshows -->
<div id="carouselExampleCaptions3" class="carousel slide sectieCarousel">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="../Assets/Pictures/wellness1.png" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Strength Starts Here</h5>
      <p><strong>Push your limits and build the strongest version of yourself. 
        Our state-of-the-art equipment and expert trainers are here to fuel your fitness journey.</strong></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../Assets/Pictures/wellness2.png" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Refresh & Recharge</h5>
      <p><strong>Elevate your post-workout experience with our premium showers and wellness facilities.
        Because recovery is just as important as the workout.</strong></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../Assets/Pictures/wellness4.png" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Recover Like a Pro</h5>
      <p><strong>Maximize your performance with our dedicated recovery zone. 
        From massage tools to guided relaxation, we help you stay at your best.</strong></p>
    </div>
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<div class="group">
<div class="hidrationStation">
    <div class="hidrationStation-text">
    <h1>The Muskl hidration Station</h1>
    <p>Staying hydrated is key to peak performance, which is why our hydration station offers filtered water and electrolyte drinks. 
        Grab a quick refill before or after your session and keep your energy levels at their best.</p>
        </div>
    <img src="../Assets/Pictures/bar1.png" alt="background" id="hidrationStation">
</div>
</div>
<!-- slideshows -->
<div id="carouselExampleCaptions4" class="carousel slide sectieCarousel">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="../Assets/Pictures/bar2.png" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Strength Starts Here</h5>
      <p><strong>Push your limits and build the strongest version of yourself. 
        Our state-of-the-art equipment and expert trainers are here to fuel your fitness journey.</strong></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../Assets/Pictures/bar3.png" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Refresh & Recharge</h5>
      <p><strong>Elevate your post-workout experience with our premium showers and wellness facilities.
        Because recovery is just as important as the workout.</strong></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="../Assets/Pictures/workout3.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Recover Like a Pro</h5>
      <p><strong>Maximize your performance with our dedicated recovery zone. 
        From massage tools to guided relaxation, we help you stay at your best.</strong></p>
    </div>
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
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