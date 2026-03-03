<?php
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\Post;
$id=(int)($_GET['id']??0);
$editpost=new Post();
$res=$editpost->editepostadmin($id);
foreach($res as $rows)
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

<!-- copypasted -->
 <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
      <h1>Edit Post</h1>
      <div>
        <a href="../public/Index.php" class="btn btn-primary">Back</a>
      </div>
    </header>

    <form action="/Mini-blog-app/views/applyedit.php" method="post" enctype="multipart/form-data">

      <div class="form-elemnt my-4">
        <label class="form-label">id</label>
        <input type="number" class="form-control" name="id" value="<?php echo $id ?>">
      </div>

      <div class="form-elemnt my-4">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $rows['title'] ?>">
      </div>

      <div class="form-element my-4">
        <label class="form-label">Content</label>
        <input name="content" id="" class="form-control" value="<?php echo $rows['content'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label" name="image">Relevent Image</label>
        <br>
        <input type="file" name="image" value="<?php echo $image ?>">
      </div>

        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
  </div>

</body>
</html>
