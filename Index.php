<?php
session_start();
require_once 'includes/Db.php';
require 'auth.php';
class Index extends Db
{
  public function show($uname)
  {
    try {
      $pdo = $this->connect();
      $sql = "SELECT *FROM posts;";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $stmt = null;
      // for calling user table and using user name
      // $sql2 = "SELECT *FROM users where name=:name ;";
      // $stmt2 = $pdo->prepare($sql2);
      // $stmt2->bindParam('name',$uname);
      // $stmt2->execute();
      // $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
      // $stmt2 = null;
      $pdo = null;
      if (empty($result))
        header("Location: createpost.php");
      else
        foreach ($result as $rows) {
          // if (isset($_SESSION["id"])) {
            // echo "<b> Author:".htmlspecialchars($_SESSION["name"]) . "<br>";
            // foreach ($result2 as $res) {
            //   echo "Author:" . $res["name"];
            // }
          // }
          echo "<b>title: </b>" . $rows["title"]
            . "<br>";
          echo "<b>content: </b>" . $rows["content"]
            . "<br>";
          echo "<b>made at: </b>" . $rows["created_at"]
            . "<br>";
          echo "<a href='edit.php?pid=" . $rows["id"] . "&title=" . urlencode($rows['title']) . "&content=" . urlencode($rows['content']) . "'>
                    <button>edit</button>
                        </a>";
          echo "<a href='logout.php'><button>logout</button></a>";
          echo "<a href='delete.php?pid=" . $rows["user_id"] . "'><button>delete</button></a>";
          echo "<a><button>comment</button></a>";
          echo "<hr>";
        }
    } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }
  }
}

require_once 'auth.php';
if (isset($_SESSION["id"])) {
  $show = new Index();
  $show->show($_SESSION["name"]);
}
