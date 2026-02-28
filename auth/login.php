<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
        <!-- bootstrap -->
        <div class="d-flex  align-items-center  justify-content-center  bg-purple-200"  >
        <form action="auth.php" method="post" style="margin-top: 5rem; width:450px; height:33rem;" class=" border border-dark rounded-5  bg-light mt-5 " >
          <label for="Name of the app" class="form-item mb-5 align-items-center d-flex justify-content-center "><h4>Mini-Blog-app</h4></label>
        <div class=" justify-content-center  d-flex ">
                <label class="form-label"> <h4> Name</label>
                <input type="text"  class="form-control mt-4  border border-dark " placeholder="Enter Name" style="width:20rem;" name="name" >
            </div>
            <div class=" justify-content-center d-flex">
                <label class="form-label"  name="email"><h4>Email</label>
                <input type="email" class="form-control mt-4  border border-dark" style="width:20rem;"  placeholder="Enter Email"  name="email" required >
            </div>
            <div class=" justify-content-center d-flex">
                <label class="form-label" name="password"><h4>Password</label>
                <input type="password" class="form-control mt-2 mb-3 border border-dark" style="width:20rem;"  name="password"  placeholder="Enter Password"  required >
              </div>
              <button type="submit" class="btn btn-primary mb-2" style="margin-left:2rem;"><h4>Submit</button>
              <a href="register.php" class="mb-2"  style="margin-left:2rem;"><h4>register</a>
        </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
