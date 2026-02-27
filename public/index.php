<?php
require __DIR__ . '/../vendor/autoload.php';
use Dell\MiniBlogApp\Db;
// use Dell\MiniBlogApp\Category;
session_start();
class Index extends Db
{
  public function show()
  {
    try {
      $pdo = $this->connect();
      $sql = "SELECT u.roles,user_id, p.id, u.name,title,p.created_at,content,image from posts p inner join users u on p.user_id=u.id";
      // $sql = "SELECT name,content f";
      $stmt = $pdo->prepare($sql);
      // $stmt->bindValue(':email',$email);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      echo "error: " . $e->getMessage();
    }
  }
  public function show2($category_id)
  {
    try {
      $pdo = $this->connect();
      $sql = "SELECT * From posts where category_id=:category_id;";
      // $sql = "SELECT name,content f";
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':category_id', $category_id);
      $stmt->execute();
      $results2= $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results2;
    } catch (Exception $e) {
      echo "error: " . $e->getMessage();
    }
  }
}
if(($_GET['category_id'])){
$category_id=$_GET['category_id'];
$index=new Index();
$result=$index->show2($category_id);
}
else{
 if (isset($_SESSION["id"])){


  $show = new Index();
  $result  = $show->show();
  }
}


?>
<!-- checking if session status is active  -->
<?php if ($_SESSION['status'] == 'Active'): ?>
<?php include "../includes/header.php"; ?>

<!-- condition where category is selected -->

<?php
if(isset($_GET['category_id']))
$category_id=$_GET['category_id'];
$index=new Index();
$results=$index->show2($category_id);
?>
<!-- posts when category is chosen -->




  <!--posts -->
  <?php if (isset($_SESSION["id"])):?>
    <section id="posts">
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
                  <h4 class="mb-0">
                    <h4>author:
                      <?php echo  htmlspecialchars($rows["name"]); ?>
                    </h4>
                  </h4>
                  <div class="mb-1 text-body-secondary">
                    <?php echo date('M d', strtotime($rows["created_at"])); ?>
                  </div>
                  <p class="card-text mb-auto">
                    <?php
                    echo htmlspecialchars($rows["content"]);
                    ?>
                  </p>
                  <a class='' href="/Mini-Blog-app/views/read.php?&title=<?php echo urlencode($rows["title"]); ?>&content=<?php echo urlencode($rows["content"]); ?>&pid=<?php echo $rows["id"]; ?>&image=<?php echo $rows["image"]; ?>">read more </a>
                  <!-- we need to check both the session id and the real id of the user who is logged in currently-->
                  <?php if ($_SESSION["id"] == $rows['user_id']): ?>
                    <!-- edit -->
                    <a class="btn btn-success  mt-2" href="/Mini-Blog-app/views/edit.php?&title=<?php echo urlencode($rows["title"]); ?>&content=<?php echo urlencode($rows["content"]); ?>&pid=<?php echo $rows["id"]; ?>&image=<?php echo $rows["image"]; ?>">edit</a>
                    <!-- delete -->
                    <a class="btn btn-danger mt-2" href="/Mini-Blog-app/actions/delete.php?pid=<?php echo $rows["id"]; ?>">delete</a>
                  <?php endif; ?>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="post-image img-fluid" src="/Mini-blog-app/uploads/<?php echo $rows["image"] ?>" alt="test image">
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
  <?php
  else:
  header("Location: /Mini-Blog-app/auth/login.php ");
  exit;
  endif;
  ?>
