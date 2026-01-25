<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
        <!-- bootstrap -->
          <div class="d-flex justify-content-center mt-5">
        <form action="auth.php" method="post">
            <div class="mb-3">
                <label class="form-label" >Name</label>
                <input type="text"  class="form-control" name="name" >
            </div>
            <div class="mb-3">
                <label class="form-label" name="email">Email address</label>
                <input type="email" class="form-control" name="email" >
                <!-- <div>We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label class="form-label" name="password">Password</label>
                <input type="password" class="form-control" name="password" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="register.php">register</a>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
