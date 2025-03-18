<?php

require "../Database/admin.php";

$admin = new Admin();
$data = $admin->seeUsers();




// If ID is provided via GET, fetch user data
if (isset($_GET['id'])) {
    $data = $admin->seeUsers($_GET['id']);
}

// Handle form submission
if (isset($_POST['edit-user'])) {
    $admin->editUser(
        $_POST['id'],
        $_POST['name'],
        $_POST['lastname'],
        $_POST['email'],
        $_POST['birthdate'],
        $_POST['sex'],
        $_POST['phonenumber']
    );
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>View Users Table</h1>
<div class="table-container">
    <h2 class="text-center mb-4">User List</h2>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Birthdate</th>
                <th>Sex</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $admin): ?>
                <tr>
                    <td><?= htmlspecialchars($admin['id']) ?></td>
                    <td>
                        <input type="text" value="<?= htmlspecialchars($admin['name']) ?>" class="edit-field" data-id="<?= $admin['id'] ?>" data-column="name">
                    </td>
                    <td>
                        <input type="text" value="<?= htmlspecialchars($admin['lastname']) ?>" class="edit-field" data-id="<?= $admin['id'] ?>" data-column="name">
                    </td>
                    <td>
                        <input type="email" value="<?= htmlspecialchars($admin['email']) ?>" class="edit-field" data-id="<?= $admin['id'] ?>" data-column="email">
                    </td>
                    <td>
                        <input type="date" value="<?= htmlspecialchars($admin['birthdate']) ?>" class="edit-field" data-id="<?= $admin['id'] ?>" data-column="birthdate">
                    </td>
                    <td>
                        <select class="edit-select" data-id="<?= $admin['id'] ?>" data-column="sex">
                            <option value="Male" <?= $admin['sex'] == 'Male' ? 'selected' : '' ?>>Male</option>
                            <option value="Female" <?= $admin['sex'] == 'Female' ? 'selected' : '' ?>>Female</option>
                            <option value="Other" <?= $admin['sex'] == 'Other' ? 'selected' : '' ?>>Other</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" value="<?= htmlspecialchars($admin['phonenumber']) ?>" class="edit-field" data-id="<?= $admin['id'] ?>" data-column="phonenumber">
                    </td>
                    <td>
                        <a href="view-users-admin.php?id=<?= $admin['id'] ?>" class="btn btn-sm btn-danger" name="edit-user">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>