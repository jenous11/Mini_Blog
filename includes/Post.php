<?php
require_once "Db.php";
require_once 'auth_guard.php';
class Post extends DB
{

    public function createpost($title, $content)
    {
        try {
            $pdo = $this->connect();
            $sql = "INSERT INTO posts(title, content) VALUES (:title,:content);";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content', $content);
            $stmt->execute();
            $stmt = null;
            $pdo = null;
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
            $sql = "DELETE from posts where id=$id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $stmt = null;
            $pdo = null;
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
}
