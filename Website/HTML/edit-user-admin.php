<?php

require "../Database/admin.php";

$admin = new Admin();
$data = $admin->seeUsers();

session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login-admin.php");
}

if(isset($_POST['edit-user'])){
    $admin->editUser(
        $_POST['id'], 
        $_POST['name'], 
        $_POST['lastname'], 
        $_POST['email'], 
        $_POST['birthdate'], 
        $_POST['sex'], 
        $_POST['phonenumber']
    );
    header('Location: view-users-admin.php');
    exit(); // Always call exit after header redirect to prevent further script execution
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
                    <form method="POST" >
                        <td><input type="text" name="id" value="<?= htmlspecialchars($admin['id']) ?>" readonly></td>
                        <td><input type="text" name="name" value="<?= htmlspecialchars($admin['name']) ?>" class="edit-field"></td>
                        <td><input type="text" name="lastname" value="<?= htmlspecialchars($admin['lastname']) ?>" class="edit-field"></td>
                        <td><input type="email" name="email" value="<?= htmlspecialchars($admin['email']) ?>" class="edit-field"></td>
                        <td><input type="date" name="birthdate" value="<?= htmlspecialchars($admin['birthdate']) ?>" class="edit-field"></td>
                        <td>
                            <select name="sex" class="edit-select">
                                <option value="Male" <?= $admin['sex'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                <option value="Female" <?= $admin['sex'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                <option value="Other" <?= $admin['sex'] == 'Other' ? 'selected' : '' ?>>Other</option>
                            </select>
                        </td>
                        <td><input type="text" name="phonenumber" value="<?= htmlspecialchars($admin['phonenumber']) ?>" class="edit-field"></td>
                        <td><button type="submit" name="edit-user" class="btn btn-sm btn-primary">Save</button></td>
                    </form>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


</body>
</html>