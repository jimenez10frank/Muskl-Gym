<?php
require "../Database/user.php";
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../HTML/login-user.php"); 
    exit();
}

$id = $_SESSION['id']; 

$user = new User();
$data = $user->seeMembershipsFromUser($id);

if (isset($_GET['id'])) {
    header("Location: memberships-admin.php");
    exit();
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
    <link rel="stylesheet" href="../CSS/dashboard-user-memberships.css">
    <title>See Your Memberships</title>
</head>
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
            <a class="nav-link active" href="../HTML/dashboard-user-memberships.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../HTML/dashboard-user.php">Memberships</a>
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
          <button class="btn btn-danger" onclick="window.location.href='../HTML/logout-user.php';">Logout</button>
        </div>
      </div>
    </div>
  </nav>
<body>
    <h1>Welcome, <?= htmlspecialchars($_SESSION['name'] ?? 'User') ?></h1>
    <div class="table-container">
        <h2 class="text-center mb-4">Your Memberships</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Membership</th>
                    <th>Created At</th>
                    <th>Ends At</th>
                    <th>User ID</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $membership): ?>
                        <tr>
                            <td><?= htmlspecialchars($membership['id']) ?></td>
                            <td><?= htmlspecialchars($membership['type']) ?></td>
                            <td><?= htmlspecialchars($membership['created_at']) ?></td>
                            <td><?= htmlspecialchars($membership['ends_at']) ?></td>
                            <td><?= htmlspecialchars($membership['user_id']) ?></td>
                            <td><?= htmlspecialchars($membership['status']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No memberships found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
