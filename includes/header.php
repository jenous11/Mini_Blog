<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg py-3 mx-5 " id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand ms-2" href="#">Mini Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mb-2 mb-lg-0 ">
          <li class="nav-item mx-2 ms-5">
            <a class="nav-link active  " aria-current="page" href="/Mini-Blog-app/public/Index.php">Home</a>
          </li>
          <li class="nav-item  mx-2">
            <a class="nav-link active " aria-current="page" href="#posts">Blog</a>
          </li>
          <li class="nav-item  mx-2">
            <a class="nav-link active " aria-current="page" href="">Category</a>
          </li>
          <li class="nav-item   mx-2  ">
            <a class="nav-link active " aria-current="page" href="/Mini-Blog-app/auth/login.php">Sign in</a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link text-black rounded  py-2 text-bold" href="/Mini-Blog-app/auth/register.php">Register</a>
          </li>
          <li class="nav-item  ">
            <?php if (isset($_SESSION["id"])): ?>
            <a class="nav-link text-black rounded  py-2 text-bold" href="/Mini-Blog-app/views/createpost.php">Create blog</a>
            <?php endif; ?>
          </li>
        </ul>
            <form class="d-flex ms-auto my-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
      </div>
    </div>
  </nav>
  <!-- carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide w-100 " data-bs-ride="carousel">
    <div class="carousel-inner container-fluid">
      <div class="carousel-item active ">
        <img src="/Mini-Blog-app/assets/images/img1.jpg" class="d-block rounded-5 w-100" style="height:650px; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/Mini-Blog-app/assets/images/img2.jpg" class="d-block rounded-5 w-100" style="height:650px; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/Mini-Blog-app/assets/images/img3.jpg" class="d-block rounded-5 w-100" style="height:650px; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/Mini-Blog-app/assets/images/naruto.webp" class="d-block rounded-5 w-100" style="height:650px; object-fit: co;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/Mini-Blog-app/assets/images/ramen.webp" class="d-block rounded-5 w-100" style="height:650px; object-fit: cover;" alt="...">
      </div>
    </div>
  </div>
