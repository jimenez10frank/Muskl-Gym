<?php
    include '../Database/admin.php';
    $admin = new Admin();
    $data = $admin->seeMemberships();


session_start();

if (!isset($_SESSION['logged_in'])) {
    header("Location: login-admin.php");
}
    
    if(isset($_GET['id'])){
        $data = $admin->getMembership($_GET['id']);
    }
    if(isset($_POST['edit-membership'])){
        $admin->editMembership($_POST['id'], $_POST['type'], $_POST['created_at'], $_POST['ends_at'], $_POST['status']);
        header('Location: dashboard-admin.php');
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Membership Admin</title>
</head>
<body>
    <h1>Edit Membership</h1>
    <form method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <label for="type">Membership Type</label>
    <select name="type" id="type">
        <option value="basic" <?= ($data['type'] == 'basic') ? 'selected' : '' ?>>Basic</option>
        <option value="pro" <?= ($data['type'] == 'pro') ? 'selected' : '' ?>>Pro</option>
        <option value="premium" <?= ($data['type'] == 'premium') ? 'selected' : '' ?>>Premium</option>
    </select>

    <label for="created_at">Created At</label>
    <input type="date" name="created_at" id="created_at" value="<?= $data['created_at'] ?>">

    <label for="ends_at">Ends At</label>
    <input type="date" name="ends_at" id="ends_at" value="<?= $data['ends_at'] ?>">

    <label for="status">Status</label>
    <select name="status" id="status">
        <option value="active" <?= ($data['status'] == 'active') ? 'selected' : '' ?>>Active</option>
        <option value="expired" <?= ($data['status'] == 'expired') ? 'selected' : '' ?>>Expired</option>
        <option value="in treatment" <?= ($data['status'] == 'in treatment') ? 'selected' : '' ?>>In Treatment</option>
    </select>

    <button type="submit" name="edit-membership">Edit Membership</button>
</form>

</body>
</html>