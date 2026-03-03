 <?php
  // require_once 'auth_guard.php';
  require __DIR__ . "/../vendor/autoload.php";
  use Dell\MiniBlogApp\Category;
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

  <div class="container my-5" >
    <header class="d-flex justify-content-between my-4">
      <h1>Add a Post</h1>
      <div>
        <a href="../public/Index.php" class="btn btn-primary">Back</a>
      </div>
    </header>

    <form action="/Mini-Blog-app/actions/store.php" method="post" enctype="multipart/form-data">

      <div class="form-element my-4">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Write about anything">
      </div>

      <div class="form-element my-4">
        <label class="form-label">Content</label>
        <input name="content" id="" class="form-control" placeholder="Write Something">
      </div>

      <!-- category -->
       <div class="form-element my-4">
         <label class="form-label"   for="category"> Category: </label>
         <select name="category" id="category" class="form-control">
           <option value="">-- Select Category --</option>
        <?php
        $cat2=new Category();
        $results=$cat2->fetchcategory();
        foreach($results as $rows):
        ?>
          <option value="<?php echo $rows["id"];?>" > <?php echo $rows['category_name']; ?>  </option>
          <?php endforeach;?>
        </select>
       </div>

      <!-- image -->
      <div class="mb-3 mt-3">
        <label class="form-label" for="image">Relevent Image</label>
      <br>
        <input type="file" name="image" class="form-control"  value="<?php echo $image ?>">
      </div>
      <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
  </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 </body>

 </html>
