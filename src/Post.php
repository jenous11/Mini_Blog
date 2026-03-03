<?php
namespace Dell\MiniBlogApp;
require __DIR__ . "/../vendor/autoload.php";
use PDOException;
use PDO;
class Post extends Db
{
    public function createpost($title, $content,$user_id,$image,$category_id)
    {
        try {
            $pdo = $this->connect();
            $sql = "INSERT INTO posts(title, content,user_id,image,category_id) VALUES (:title,:content,:user_id,:image,:category_id);";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content', $content);
            $stmt->bindValue(':user_id', $user_id);
            $stmt->bindValue(':image',$image);
            $stmt->bindValue(':category_id',$category_id);
            $stmt->execute();
            $stmt = null;
            $pdo = null;
            header("Location: /Mini-Blog-app/public/Index.php");
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    public function editepost($title, $content,$image,$id)
    {
        try {
            $pdo = $this->connect();
            $sql = "UPDATE posts SET title= :title, content=:content, image=:image WHERE id=:id;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content', $content);
            $stmt->bindValue(':image',$image);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
            $stmt = null;
            $pdo = null;
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    public function deletepost($id)
    {
        try {
            $pdo = $this->connect();
            $sql = "DELETE FROM  posts WHERE id=:id;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":id",$id);
            $stmt->execute();
            $stmt = null;
            // $stmt2= null;
            $pdo = null;
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }

    public function readpost(){
      try{
        $pdo=$this->connect();
        $sql="SELECT *FROM posts ";
        $stmt=$pdo->prepare($sql);
        //  $stmt->bindValue(":id",$id);
            $stmt->execute();
            $results= $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
            $stmt = null;
            $pdo = null;
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }

  public function showadmin()
  {
    try {
      $pdo = $this->connect();

      $sql = "SELECT p.id, p.title, c.category_name, p.created_at, u.name FROM posts p INNER JOIN users u ON p.user_id = u.id INNER JOIN category c ON p.category_id = c.id;;";

      $stmt = $pdo->prepare($sql);
      // $stmt->bindValue(':email',$email);
      $stmt->execute();
      $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
      } catch (PDOException $e) {
      echo "error: " . $e->getMessage();
    }
  }
}
