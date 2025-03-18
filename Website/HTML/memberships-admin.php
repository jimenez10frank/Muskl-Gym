<?php

require "../Database/admin.php";


session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login-admin.php");
}

$admin = new Admin();
$data = $admin->seeMemberships();

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $admin->deleteMembership($id);
    header("Location: memberships-admin.php");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See membership Admin</title>
</head>
<body>
    <h1>See all Memberships</h1>
    <div class="table-container">
    <h2 class="text-center mb-4">Membership List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Membership</th>
                <th>Created at</th>
                <th>Ends at</th>
                <th>User ID</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $admin): ?>
                <tr>
                    <td><?= htmlspecialchars($admin['id']) ?></td>
                    <td><?= htmlspecialchars($admin['type']) ?></td>
                    <td><?= htmlspecialchars($admin['created_at']) ?></td>
                    <td><?= htmlspecialchars($admin['ends_at']) ?></td>
                    <td><?= htmlspecialchars($admin['user_id']) ?></td>
                    <td><?= htmlspecialchars($admin['status']) ?></td>
                    <td><a href="../HTML/edit-membership-admin.php?id=<?= $admin['id'] ?>">Edit</a>
                    <a href="../HTML/memberships-admin.php?id=<?= $admin['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>