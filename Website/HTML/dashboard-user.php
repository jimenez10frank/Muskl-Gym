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

  <title>dashboard-user</title>
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
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Memberships</a>
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
          <button class="btn btn-danger" onclick="window.location.href='../HTML/logout-user.php';">Logout</button>
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
          <button class="sign-up" onclick="window.location.href='../HTML/membership-selection.php';">Get your Membership</button>
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
          <button class="sign-up1" onclick="window.location.href='../HTML/membership-selection.php';">Get your Membership</button>
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
          <button class="sign-up" onclick="window.location.href='../HTML/membership-selection.php';">Get your Membership</button>
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
            <th>Basic</th>
            <th>Comfort</th>
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
            <td><i class="fas fa-times"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
        </tr>
        <tr>
            <td>Personal trainer sessions</td>
            <td><i class="fas fa-times"></i></td>
            <td>2 sessions/month</td>
            <td>Unlimited</td>
        </tr>
        <tr>
            <td>Sauna & spa access</td>
            <td><i class="fas fa-times"></i></td>
            <td><i class="fas fa-check"></i></td>
            <td><i class="fas fa-check"></i></td>
        </tr>
        <tr>
            <td>Locker room access</td>
            <td>Standard lockers</td>
            <td>Premium lockers</td>
            <td>Private locker & laundry service</td>
        </tr>
        <tr>
            <td>Guest passes</td>
            <td>None</td>
            <td>2 per month</td>
            <td>Unlimited</td>
        </tr>
        <tr>
            <td>Nutrition & diet plan</td>
            <td><i class="fas fa-times"></i></td>
            <td>Basic diet plan</td>
            <td>Custom nutrition plan</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>$30/month</td>
            <td>$50/month</td>
            <td>$80/month</td>
        </tr>
    </table>
</section>


  </section class="faq">
  <h2>Frequently Asked Questions</h2>
  <p class="faqp">To make sure our future members know what they are getting involved in, here is a list of answered questions:</p>
<button class="accordion">Can I cancel my membership anytime?</button>
<div class="panel">
  <p>Yes! You can cancel your membership at any time through your account settings. Monthly plans stop at the end of the current billing cycle, while annual plans may have a cancellation fee if canceled early.</p>
</div>

<button class="accordion">What are the gym’s opening hours?</button>
<div class="panel">
  <p>Our gym is open Monday to Friday from 6:00 AM to 10:00 PM and Saturday & Sunday from 8:00 AM to 8:00 PM. Some locations may have different hours.</p>
</div>

<button class="accordion">Can I bring a guest with me?
</button>
<div class="panel">
  <p>Yes! Members with premium or family plans can bring one guest per visit for free. Standard members can purchase a guest pass at a discounted rate.</p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </section>
  </body>