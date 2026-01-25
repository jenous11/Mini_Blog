<?php
require_once "Db.php";
require_once 'auth_guard.php';
class Post extends DB
{
    public function createpost($title, $content,$user_id)
    {
        try {
            $pdo = $this->connect();
            $sql = "INSERT INTO posts(title, content,user_id) VALUES (:title,:content,:user_id);";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content', $content);
            $stmt->bindValue(':user_id', $user_id);
            $stmt->execute();
            $stmt = null;
            $pdo = null;
            // return last_Id();
            header("location: Index.php");
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    public function editepost($title, $content)
    {
        try {
            $pdo = $this->connect();
            $sql = "UPDATE posts SET title= :title, content=:content;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content', $content);
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
            $sql = "DELETE from posts where user_id=:user_id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue('user_id',$id);
            $stmt->execute();

            // $sql2="DELETE from users where id=id";
            // $stmt2 = $pdo->prepare($sql2);
            // $stmt->bindValue('id',$id);
            // $stmt2->execute();

            $stmt = null;
            // $stmt2= null;
            $pdo = null;
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
}
