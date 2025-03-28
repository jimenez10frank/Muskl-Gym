<?php

require "../Database/admin.php";


session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login-admin.php");
}

$admin = new Admin();
$data = $admin->seeUsers();

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
  <!-- for the body -->
  <link rel="stylesheet" href="../CSS/body.css">
  <link rel="stylesheet" href="../CSS/view-users-admin.css">
  <!-- membership content -->
  <!-- footer styling -->
  <link rel="stylesheet" href="../CSS/footer.css">
    <title>View Users Admin</title>
</head>
<body>
<div class="logout">
<i class="fa-sharp fa-solid fa-arrow-left"></i>
    <a href="../HTML/dashboard-admin.php">Go back to Dashboard</a>
</div>
    <div class="table-container">
    <h2 class="text-center mb-4">User List</h2>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Sex</th>
                <th>Phonenumber</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $admin): ?>
                <tr>
                    <td><?= htmlspecialchars($admin['id']) ?></td>
                    <td><?= htmlspecialchars($admin['name']) ?></td>
                    <td><?= htmlspecialchars($admin['email']) ?></td>
                    <td><?= htmlspecialchars($admin['birthdate']) ?></td>
                    <td><?= htmlspecialchars($admin['sex']) ?></td>
                    <td><?= htmlspecialchars($admin['phonenumber']) ?></td>
                    <td>
                        <a href="edit-user-admin.php?id=<?= $admin['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>