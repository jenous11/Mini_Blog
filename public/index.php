<?php
require __DIR__ . '/../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
// $dotenv->load();
// require_once '../includes/header.php';
use Dell\MiniBlogApp\Db;
// use PDO;
//require_once 'auth.php'
session_start();
class Index extends Db
{
  public function show()
  {
    $pdo = $this->connect();
    $sql = "SELECT * FROM posts;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (isset($_SESSION["id"])) {
  $show = new Index();
  $result = $show->show();
  }
  ?>
  <?php include "../includes/header.php"; ?>
<!--posts -->
<?php if (isset($_SESSION["id"])): ?>
<section id="posts border ">
  <h1 class="text-center mt-5 mb-5 ">Posts</h1>
  <div class="container-fluid ">
  <div class="row mb-2 boarder ">
        <?php foreach ($result as $rows): ?>
          <div class="col-md-6 d-flex">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative flex-fill">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary-emphasis">
                  <?php echo htmlspecialchars($rows["title"]); ?>
                </strong>
                <h3 class="mb-0">
                  <p>author:
                  <?php echo  htmlspecialchars($_SESSION["name"]); ?>
                  </p>
                </h3>
                <div class="mb-1 text-body-secondary">
                  <?php echo date('M d', strtotime($rows["created_at"])); ?>
                </div>
                <p class="card-text mb-auto">
                  <?php
                  echo htmlspecialchars($rows["content"]);
                  ?>
                </p>
                <!-- edit -->
<a class="btn btn-success  mt-2" href="/Mini-Blog-app/views/edit.php?title=<?php echo urlencode($rows["title"]); ?>&content=<?php echo urlencode($rows["content"]); ?>&pid=<?php echo $rows["id"]; ?>&image=<?php echo $rows["image"];?>">edit</a>
                <!-- delete -->
<a class="btn btn-danger mt-2" href="/Mini-Blog-app/actions/delete.php?pid=<?php echo $rows["id"]; ?>">delete</a>
              </div>
              <div class="col-auto d-none d-lg-block">
              <img class="post-image img-fluid" src="/Mini-blog-app/uploads/<?php echo $rows['image'] ?>" alt="test image">
                  <title>Placeholder</title>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
    </div>
<?php else: ?>
  <script>
    window.location.href = "/Mini-Blog-app/auth/login.php";
  </script>
<?php endif; ?>
</section>
<!-- footer -->
<?php include '../includes/footer.php'; ?>
