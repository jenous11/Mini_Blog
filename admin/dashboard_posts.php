<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['status'] !== 'Active') {
    header("Location: ../auth/login.php");
    exit();
}

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\Post;



$adminPost = new Post();
$posts = $adminPost->showadmin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container-fluid">
  <div class="row" style="height: 100vh;">
    <?php include 'sidebar.php'; ?>
    <div class="col-10 col-sm-9 col-xl-10 p-3">
      <h2 class="mb-4">Manage Posts</h2>
      <div class="mb-3 text-end">
        <a href="add_post.php" class="btn btn-success btn-sm">+ Add Post</a>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Category</th>
              <th>Author</th>
              <th>Created At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($posts as $post): ?>
            <tr>
              <td><?= $post['id'] ?></td>
              <td><?= $post['title'] ?></td>
              <td><?= $post['category_name'] ?></td>
              <td><?= $post['name'] ?></td>
              <td><?= $post['created_at'] ?></td>
              <td>
                <a href="edit_post.php?id=<?= $post['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete_post.php?id=<?= $post['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
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
