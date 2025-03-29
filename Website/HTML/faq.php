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
  <link rel="stylesheet" href="../CSS/faq.css">

  <!-- footer styling -->
  <link rel="stylesheet" href="../CSS/footer.css">
  
  <title>FAQ PAGE</title>
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
            <a class="nav-link" href="../HTML/gymLook.php">The Gym</a>
          </li>
          <!-- Dropdown Contact -->
          <li class="nav-item dropdown position-relative">
            <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Contact
            </a>
            <ul class="dropdown-menu" aria-labelledby="contactDropdown">
              <li><a class="dropdown-item" href="../HTML/contact.php">Send us a message!</a></li>
              <li><a class="dropdown-item" href="../HTML/location.php">Our Location</a></li>
              <li><a class="dropdown-item" href="../HTML/faq.php">FAQ</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-lg-flex col-lg-3 justify-content-lg-end">
          <button class="btn btn-primary" onclick="window.location.href='../HTML/login-user.php'">Login</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Faq -->
  <section class="faq">
  <h2 class="h2textMain">Frequently Asked Questions</h2>
  
  <p class="faqp">To make sure our future members know what they are getting involved in, here is a list of answered questions:</p>

  <h2 class="h2text">Memberships</h2>
  <button class="accordion">Can I cancel my membership anytime?</button>
  <div class="panel">
    <p>Yes! You can cancel your membership at any time through your account settings. Monthly plans stop at the end of the current billing cycle, while annual plans may have a cancellation fee if canceled early.</p>
  </div>

  <button class="accordion">What are the gym’s opening hours?</button>
  <div class="panel">
    <p>Our gym is open Monday to Friday from 6:00 AM to 10:00 PM and Saturday & Sunday from 8:00 AM to 8:00 PM. Some locations may have different hours.</p>
  </div>

  <button class="accordion">Can I bring a guest with me?</button>
  <div class="panel">
    <p>Yes! Members with premium or family plans can bring one guest per visit for free. Standard members can purchase a guest pass at a discounted rate.</p>
  </div>

  <h2 class="h2text">Group Classes</h2>
  <button class="accordion">Do I need to book in advance for group classes?</button>
  <div class="panel">
    <p>Yes, it is recommended to book your spot in advance for group classes. You can easily reserve a spot through our app or website.</p>
  </div>

  <button class="accordion">What types of group classes do you offer?</button>
  <div class="panel">
    <p>We offer a wide range of group classes, including yoga, spinning, HIIT, pilates, and strength training. Check our schedule for available classes.</p>
  </div>

  <button class="accordion">Can I attend group classes if I’m a beginner?</button>
  <div class="panel">
    <p>Absolutely! We offer classes for all fitness levels, from beginners to advanced. You can choose classes that match your experience and progress at your own pace.</p>
  </div>

  <h2 class="h2text">Facilities</h2>
  <button class="accordion">What facilities are available at the gym?</button>
  <div class="panel">
    <p>Our gym is equipped with a wide variety of fitness machines, free weights, a cardio area, group class studios, and relaxation zones. We also have locker rooms, showers, and a sauna.</p>
  </div>

  <button class="accordion">Is there a swimming pool at the gym?</button>
  <div class="panel">
    <p>Some of our locations have a swimming pool. Please check the specific location details on our website to see if this amenity is available.</p>
  </div>

  <button class="accordion">Are there personal trainers available?</button>
  <div class="panel">
    <p>Yes, we have certified personal trainers available to help you with your fitness goals. You can book a session through our app or at the front desk.</p>
  </div>

  <h2 class="h2text">Cancellations/Termination</h2>
  <button class="accordion">How do I cancel my membership?</button>
  <div class="panel">
    <p>You can cancel your membership through your account settings on our website. If you have a long-term plan, please check for any cancellation fees.</p>
  </div>

  <button class="accordion">Can I get a refund if I cancel my membership early?</button>
  <div class="panel">
    <p>Refund policies vary depending on the type of membership. Monthly plans are non-refundable, but annual plans may have a partial refund, depending on the terms.</p>
  </div>

  <button class="accordion">What happens if I cancel my membership before the end of the billing cycle?</button>
  <div class="panel">
    <p>For monthly plans, your membership will end at the end of the current billing cycle. For annual plans, there may be a cancellation fee if canceled early.</p>
  </div>
</section>

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