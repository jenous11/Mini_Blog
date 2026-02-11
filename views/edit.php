<?php
require __DIR__ . '/../vendor/autoload.php';
use Dell\MiniBlogApp\Post;
use Dell\MiniBlogApp\Db;

session_start();
// require_once 'auth_guard.php';

$title = $_GET['title'];
$content = $_GET['content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div class="container d-flex justify-content-center align-items-center mt-4 bg-red-200">
    <form action="applyedit.php" method="post" class="m-5" enctype="multipart/form-data">
      title:
      <input type="text" name="title" value="<?php echo $title ?>" class="mb-3 p-3">
      <br>
      content:
        <input type="textarea" name="content" value="<?php echo $content ?>" class="mb-3 p-3 w-100">
      <br>
      relevant image:
      <input type="file" name="image">
      <input type="submit">
    </form>
  </div>
</body>

</html>
