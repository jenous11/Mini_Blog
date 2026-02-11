<?php
session_start();
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
  <!-- <p style="color:green;">You must register first!!</p> -->
  <div class="d-flex justify-content-center mt-5">
    <form action="/Mini-Blog-app/views/createuser.php" method="post">
      <div class="mb-3">
        <label class="form-label" required>Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="mb-3">
        <label class="form-label" name="email" required>Email address</label>
        <input type="email" class="form-control" name="email">
        <!-- <div>We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label class="form-label" name="password" required>Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </div>
</body>
</html>
