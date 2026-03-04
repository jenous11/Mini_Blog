 <?php
  // require_once 'auth_guard.php';
  require __DIR__ . "/../vendor/autoload.php";
  use Dell\MiniBlogApp\User;
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
      <h1>Add a User</h1>
      <div>
        <a href="../public/Index.php" class="btn btn-primary">Back</a>
      </div>
    </header>

    <form action="addusertodb.php" method="post">

      <div class="form-element my-4">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Provide a name">
      </div>

      <div class="form-element my-4">
        <label class="form-label">Email</label>
        <input name="email" id="" class="form-control" placeholder="Provice an email">
      </div>

      <!-- category -->
       <div class="form-element my-4">
         <label class="form-label"   for="role"> Role: </label>
         <select name="role" id="role" class="form-control">
           <option value="">-- Select Role --</option>
        <?php
        $role=new User();
        $results=$role->showusers();
        foreach($results as $rows):
        ?>
          <option > <?php echo $rows["roles"]; ?>  </option>
          <?php endforeach;?>
        </select>
       </div>

      <!-- password -->
      <div class="mb-3 mt-3">
        <label class="form-label" for="password">Password</label>
      <br>
        <input type="password" name="password" class="form-control" >
      </div>
      <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
  </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 </body>

 </html>
