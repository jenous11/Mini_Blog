<?php
require __DIR__ . '/../vendor/autoload.php';
session_start();
// require_once 'auth_guard.php';
$id=$_GET['pid'];
$title = $_GET['title'];
$content = $_GET['content'];
$image=$_GET["image"];
// print($image);

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
      <div class="d-flex justify-content-center mt-5">
        <form class="mt-5" action="applyedit.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
                <label class="form-label" >id</label>
                <input type="number" class="form-control" name="id" value="<?php echo $id ?>">
            </div>
        <div class="mb-3">
                <label class="form-label" >Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" name="content">Content</label>
                <input type="text" class="form-control" name="content" value="<?php echo $content ?>">
                <!-- <div>We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label class="form-label" name="image">Relevent Image</label>
                <br>
                <input type="file"  name="image" value="<?php echo $image ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
</body>
</html>
