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
  <nav class="navbar navbar-expand-lg py-3 mx-5">
    <div class="container-fluid">
      <a class="navbar-brand ms-3" href="#">Mini Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3 me-2">
            <a class="nav-link active " aria-current="page" href="login.php">Sign in</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link bg-black text-white rounded px-5 py-2 text-bold" href="#" type="button">register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide w-100 " data-bs-ride="carousel">
    <div class="carousel-inner container-fluid">
      <div class="carousel-item active ">
        <img src="/mini-blog-app/assets/images/image1.jpg" class="d-block rounded-5 w-100" style="height:650px; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/mini-blog-app/assets/images/img2.jpg" class="d-block rounded-5 w-100" style="height:650px; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/mini-blog-app/assets/images/img3.jpg" class="d-block rounded-5 w-100" style="height:650px; object-fit: cover;" alt="...">
      </div>
    </div>

  </div>
  <!--posts -->
  <section id="posts">
    <h1 class="text-center mt-5 mb-5">Posts</h1>
    <div class="container">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static"> <strong
                class="d-inline-block mb-2 text-primary-emphasis">World</strong>
              <h3 class="mb-0">Featured post</h3>
              <div class="mb-1 text-body-secondary">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                additional content.</p> <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Continue reading
                <svg class="bi" aria-hidden="true">
                  <use xlink:href="#chevron-right"></use>
                </svg> </a>
            </div>
            <div class="col-auto d-none d-lg-block"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img "
                height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static"> <strong
                class="d-inline-block mb-2 text-success-emphasis">Design</strong>
              <h3 class="mb-0">Post title</h3>
              <div class="mb-1 text-body-secondary">Nov 11</div>
              <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.
              </p> <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Continue reading
                <svg class="bi" aria-hidden="true">
                  <use xlink:href="#chevron-right"></use>
                </svg> </a>
            </div>
            <div class="col-auto d-none d-lg-block"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img "
                height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static"> <strong
                class="d-inline-block mb-2 text-primary-emphasis">World</strong>
              <h3 class="mb-0">Featured post</h3>
              <div class="mb-1 text-body-secondary">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                additional content.</p> <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Continue reading
                <svg class="bi" aria-hidden="true">
                  <use xlink:href="#chevron-right"></use>
                </svg> </a>
            </div>
            <div class="col-auto d-none d-lg-block"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img "
                height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static"> <strong
                class="d-inline-block mb-2 text-success-emphasis">Design</strong>
              <h3 class="mb-0">Post title</h3>
              <div class="mb-1 text-body-secondary">Nov 11</div>
              <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.
              </p> <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Continue reading
                <svg class="bi" aria-hidden="true">
                  <use xlink:href="#chevron-right"></use>
                </svg> </a>
            </div>
            <div class="col-auto d-none d-lg-block"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img "
                height="250" preserveAspectRatio="xMidYMid slice" role="img" width="200" xmlns="http://www.w3.org/2000/svg">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg> </div>
          </div>
        </div>
      </div>
      <!-- next one -->
    </div>
  </section>
  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>
