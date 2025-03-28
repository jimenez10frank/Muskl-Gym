<?php
require "../Database/admin.php";

session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login-admin.php");
    exit();
}

$admin = new Admin();
$data = $admin->seeMemberships(); // Get all memberships

if (isset($_POST['edit-membership'])) {
    $admin->editMembership(
        $_POST['id'],
        $_POST['type'],
        $_POST['created_at'],
        $_POST['ends_at'],
        $_POST['status']
    );
    header("Location: memberships-admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/body.css">
    <link rel="stylesheet" href="../CSS/edit-membership-admin.css">
    <title>Edit Membership</title>
</head>
<body>

<div class="logout">
    <a href="../HTML/dashboard-admin.php">← Go back to Dashboard</a>
</div>

<div class="table-container">
    <h2 class="text-center mb-4">Membership List</h2>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Membership Type</th>
                <th>Created At</th>
                <th>Ends At</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $membership): ?>
                <tr>
                    <form method="POST">
                        <td><input type="text" name="id" value="<?= htmlspecialchars($membership['id']) ?>" readonly></td>
                        <td>
                            <select name="type" class="edit-select">
                                <option value="basic" <?= ($membership['type'] == 'basic') ? 'selected' : '' ?>>Basic</option>
                                <option value="pro" <?= ($membership['type'] == 'pro') ? 'selected' : '' ?>>Pro</option>
                                <option value="premium" <?= ($membership['type'] == 'premium') ? 'selected' : '' ?>>Premium</option>
                            </select>
                        </td>
                        <td><input type="date" name="created_at" value="<?= htmlspecialchars($membership['created_at']) ?>" class="edit-field"></td>
                        <td><input type="date" name="ends_at" value="<?= htmlspecialchars($membership['ends_at']) ?>" class="edit-field"></td>
                        <td>
                            <select name="status" class="edit-select">
                                <option value="Active" <?= ($membership['status'] == 'Active') ? 'selected' : '' ?>>Active</option>
                                <option value="Expired" <?= ($membership['status'] == 'Expired') ? 'selected' : '' ?>>Expired</option>
                                <option value="In Treatment" <?= ($membership['status'] == 'In Treatment') ? 'selected' : '' ?>>In Treatment</option>
                            </select>
                        </td>
                        <td><button type="submit" name="edit-membership" class="btn btn-sm btn-primary">Save</button></td>
                    </form>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
