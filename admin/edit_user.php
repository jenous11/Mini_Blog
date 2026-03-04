 <?php
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\User;

$id=(int)($_GET['id']??0);
$edituser=new User();
$results=$edituser->showusers($id);
foreach($results as $rows)
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
  <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
      <h1>Edit User</h1>
      <div>
        <a href="../public/Index.php" class="btn btn-primary">Back</a>
      </div>
    </header>

    <form action="updateuser.php" method="post" >

      <div class="form-elemnt my-4">
        <label class="form-label">id</label>
        <input type="number" class="form-control" name="id" value="<?php echo $id ?>">
      </div>

      <div class="form-elemnt my-4">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?=  $rows['name'] ?>">
      </div>

      <div class="form-element my-4">
        <label class="form-label">Email</label>
        <input name="email" id="" class="form-control" value="<?= $rows['email'] ?>">
      </div>

        <div class="form-element my-4">
          <label class="form-label"   for="role"> Role: </label>
    <select name="role" class="form-control">
  <option value="subscriber" <?= $rows['roles']=='subscriber'?'selected':'' ?>>subscriber</option>
  <option value="admin" <?= $rows['roles']=='admin'?'selected':'' ?>>admin</option>
</select>

        </div>
      <div class="form-element my-4">
        <label class="form-label">Password</label>
        <input type="password" name="password" placeholder="Leave blank to keep current password">
      </div>
      <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
  </div>
</body>
</html>

