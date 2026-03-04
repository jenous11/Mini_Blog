<div class="col-2 col-sm-3 col-xl-2 bg-dark text-white">
  <div class="sticky-top">
    <nav class="navbar bg-dark border-bottom border-white mb-3">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="/Mini-blog-app/public/Index.php">
          <i class="bi bi-house-door"></i>
          <span class="d-none d-sm-inline ms-2">Mini-Blog-app</span>
        </a>
      </div>
    </nav>
    <nav class="nav flex-column">
      <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF'])=='dashboard_posts.php'?'active':'' ?>" href="dashboard_posts.php">
        <i class="bi bi-mailbox"></i><span class="d-none d-sm-inline ms-2">Posts</span>
      </a>
      <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF'])=='dashboard_users.php'?'active':'' ?>" href="dashboard_users.php">
        <i class="bi bi-person-fill"></i><span class="d-none d-sm-inline ms-2">Users</span>
      </a>
      <a class="nav-link text-white " href="/Mini-blog-app/auth/logout.php">
       <i class="bi bi-box-arrow-left"></i><span class="d-none d-sm-inline ms-2">Logout</span>
      </a>
    </nav>
  </div>
</div>
