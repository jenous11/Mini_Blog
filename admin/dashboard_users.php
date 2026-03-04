<?php
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\User;

$userObj = new User();
$users = $userObj->showusers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container-fluid">
  <div class="row" style="height: 100vh;">
    <?php include 'sidebar.php'; ?>
    <div class="col-10 col-sm-9 col-xl-10 p-3">
      <h2 class="mb-4">Manage Users</h2>
      <div class="mb-3 text-end">
        <a href="add_user.php" class="btn btn-success btn-sm">+ Add User</a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $user): ?>
            <tr>
              <td><?= $user['id'] ?></td>
              <td><?= $user['name'] ?></td>
              <td><?= $user['email'] ?></td>
              <td><?= $user['roles'] ?></td>
              <td>
                <a href="edit_user.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete_user.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
