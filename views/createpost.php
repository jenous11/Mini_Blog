 <?php
  // require_once 'auth_guard.php';
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
   <div class="d-flex justify-content-center mt-5">
        <form class="mt-5" action="/Mini-Blog-app/actions/store.php" method="post" enctype="multipart/form-data">
         <div class="mb-3">
                <label class="form-label" >Title</label>
                <input type="text" class="form-control" name="title" require>
            </div>
            <div class="mb-3">
                <label class="form-label" name="content">Content</label>
                <input type="text" class="form-control" name="content" require >
            </div>
            <div class="mb-3">
                <label class="form-label" name="image">Relevent Image</label>
                <input type="file" class="form-control" name="image" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 </body>
 </html>
