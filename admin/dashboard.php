<?php
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\Post;
$adminpost=new Post();
$results=$adminpost->showadmin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MiniBlog Dashboard</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!--   -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
  <!-- create a container -->
  <div class="container-fluid">
    <div class="row" style="height: 100vh">
      <div class="col-2 col-sm-3 col-xl-2 bg-dark">
        <div class="sticky-top">
        <nav class="navbar bg-dark border-bottom border-white mb-3" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <i class="bi bi-house-door"></i>
              <span class="d-none d-sm-inline ms-2"> Mini-Blog-app </span>
            </a>
          </div>
        </nav>

        <nav class="nav flex-column">
          <a class="nav-link text-white" style="white-space:nowrap" aria-current="page" href="#">
          <i class="bi bi-speedometer2"></i><span class="d-none d-sm-inline ms-2">Dashboard Admin 1</span>
          </a>
          <a class="nav-link text-white" style="white-space:nowrap" href="#">
          <i class="bi bi-mailbox"></i><span class="d-none d-sm-inline ms-2">Posts</span>
          </a>
          <a class="nav-link text-white" style="white-space:nowrap"  href="#">
          <i class="bi bi-person-fill"></i> <span class="d-none d-sm-inline ms-2">Users</span>
          </a>
        </nav>

        </div>
      </div>

      <div class="col-10 col-sm-9 col-xl-10 p-0 m-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3 ">
          <div class="container-fluid">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-item" href="#">
                  <i class="bi bi-arrow-bar-right me-2"></i>
                  logout
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="px-3">
          <h2 class="text-center mb-5">Manage Posts</h2>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Author</th>
                  <th>Created At</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($results as $rows): ?>
                <tr>
                  <td><?php echo $rows['id']; ?></td>
                  <td><?php echo $rows['title']; ?></td>

                  <td><?php echo $rows['category_name']; ?></td>
                  <td><?php echo $rows['name']; ?></td>
                  <td><?php echo $rows['created_at']; ?></td>
                </tr>
                <?php endforeach; ?>

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
