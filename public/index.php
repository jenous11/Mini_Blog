<?php
require __DIR__ . '/../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
// $dotenv->load();
// require_once '../includes/header.php';
use Dell\MiniBlogApp\Db;
//require_once 'auth.php'
session_start();
class Index extends Db
{
  public function show()
  {
    // try {
    $pdo = $this->connect();
    $sql = "SELECT * FROM posts;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $pdo = null;
    // if (empty($result)) {
    //   header("Location: createpost.php");
    //   exit;
    // } else {
    //   foreach ($result as $rows) {
    //     echo "<br>  <b>Welcome user :</b> " . $_SESSION["name"] . "</br>";
    //     echo "<b>title: </b>" . $rows["title"]
    //       . "<br>";
    //     echo "<b>content: </b>" . $rows["content"]
    //       . "<br>";
    //     echo "<b>made at: </b>" . $rows["created_at"]
    //       . "<br>";
    //     echo "<a href='edit.php?pid=" . $rows["id"] . "&title=" . urlencode($rows['title']) . "&content=" . urlencode($rows['content']) . "'><button>edit</button>
    //                   </a>";
    //     echo "<a href='logout.php'><button>logout</button></a>";
    //     echo "<a href='delete.php?pid=" . $rows["id"] . "'><button>delete</button></a>";
    //     echo "<a><button>comment</button></a>";
    //     echo "<hr>";
    //         }
    //       }
    // } catch (PDOException $e) {
    //   echo "error: " . $e->getMessage();
    // }
    }
}
// require_once 'auth.php';
if (isset($_SESSION["id"])) {
  $show = new Index();
  $result = $show->show();
  }
  ?>
  <?php include "../includes/header.php"; ?>
<!--posts -->
<?php if (isset($_SESSION["id"])): ?>
<section id="posts">
  <h1 class="text-center mt-5 mb-5">Posts</h1>
  <div class="container-fluid">
      <div class="row mb-2">
        <?php foreach ($result as $rows): ?>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary-emphasis">
                  <?php echo htmlspecialchars($rows["title"]); ?>
                </strong>
                <h3 class="mb-0">
                  <?php echo htmlspecialchars($_SESSION["name"]); ?>
                </h3>
                <div class="mb-1 text-body-secondary">
                  <?php echo date('M d', strtotime($rows["created_at"])); ?>
                </div>
                <p class="card-text mb-auto">
                  <?php
                  echo htmlspecialchars($rows["content"]);
                  ?>
                </p>
                <a href="/Mini-Blog-app/views/edit.php?title=<?php echo urlencode($rows["title"]); ?>&content=<?php echo urlencode($rows["content"]); ?>&pid=<?php echo $rows["id"]; ?>" class="icon-link gap-1 icon-link-hover">
                  Continue reading
                  <svg class="bi" aria-hidden="true">
                    <use xlink:href="#chevron-right"></use>
                  </svg>
                </a>
                <!-- edit -->
                <a class="btn btn-success  mt-2" href="/Mini-Blog-app/views/edit.php?title=<?php echo urlencode($rows["title"]); ?>&content=<?php echo urlencode($rows["content"]); ?>&pid=<?php echo $rows["id"]; ?>">edit</a>
                <!-- delete -->
                <a class="btn btn-danger mt-2" href="/Mini-Blog-app/actions/delete.php?pid=<?php echo $rows["id"]; ?>">delete</a>
              </div>
              <div class="col-auto d-none d-lg-block"><img src="<?php
              echo $rows['image'];
              ?>" alt="">
               <img src="/Mini-blog-app/uploads/<?php echo $rows['image'] ?>" alt="test image">";
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
