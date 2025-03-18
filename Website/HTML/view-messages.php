<?php

require "../Database/admin.php";


session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login-admin.php");
}

$admin = new Admin();
$data = $admin->seeContact();

// delete message functie
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $admin->deleteMessage($id);
    header("Location: view-messages.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
</head>
<body>
    <h1>See Contact Messages</h1>
    <div class="table-container">
    <h2 class="text-center mb-4">Messages List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $admin): ?>
                <tr>
                    <td><?= htmlspecialchars($admin['id']) ?></td>
                    <td><?= htmlspecialchars($admin['name']) ?></td>
                    <td><?= htmlspecialchars($admin['email']) ?></td>
                    <td><?= htmlspecialchars($admin['message']) ?></td>
                    <td><a href="../HTML/view-messages.php?id=<?= $admin['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>
</html>