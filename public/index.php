<?php
require __DIR__ .'/vendor/autoload.php';
use Dell\MiniBlogApp\Db;
use Dell\MiniBlogApp\Post;
require_once 'auth.php';
class Index extends Db
{
  public function show()
  {
    try {
      $pdo = $this->connect();
      $sql = "SELECT * FROM posts;";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      //selecting users from user side
      $sql2="SELECT * FROM users;";
      $stmt2=$pdo->prepare($sql2);
      $stmt2->execute();
      $result2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
      $stmt2 = null;
      $pdo = null;
      if (empty($result)){
        header("Location: createpost.php");
        exit;
        }
      else{
        foreach ($result as $rows) {
          echo "<br>  <b>Welcome user :</b> ".$_SESSION["name"]. "</br>";
          echo "<b>title: </b>" . $rows["title"]
            . "<br>";
          echo "<b>content: </b>" . $rows["content"]
            . "<br>";
          echo "<b>made at: </b>" . $rows["created_at"]
            . "<br>";
          echo "<a href='edit.php?pid=" . $rows["id"] . "&title=" . urlencode($rows['title']) . "&content=" . urlencode($rows['content']) . "'><button>edit</button>
                        </a>";
          echo "<a href='logout.php'><button>logout</button></a>";
          echo "<a href='delete.php?pid=" . $rows["id"] . "'><button>delete</button></a>";
          echo "<a><button>comment</button></a>";
          echo "<hr>";
        }
        }
    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }
  }
}

require_once 'auth.php';
if (isset($_SESSION["id"])) {
  $show = new Index();
  $show->show();
}
?>

