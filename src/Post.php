<?php
namespace Dell\MiniBlogApp;
require __DIR__ . "/../vendor/autoload.php";
use PDOException;
class Post extends DB
{
    public function createpost($title, $content,$user_id,$image)
    {
        try {
            $pdo = $this->connect();
            $sql = "INSERT INTO posts(title, content,user_id,image) VALUES (:title,:content,:user_id,:image);";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content', $content);
            $stmt->bindValue(':user_id', $user_id);
            $stmt->bindValue(':image',$image);
            $stmt->execute();
            $stmt = null;
            $pdo = null;
            header("Location: /Mini-Blog-app/public/Index.php");
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    public function editepost($title, $content,$image)
    {
        try {
            $pdo = $this->connect();
            $sql = "UPDATE posts SET title= :title, content=:content, image=:image;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content', $content);
            $stmt->bindValue(':image',$image);
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
}
