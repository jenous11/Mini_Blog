<?php
require_once "Db.php";
class Post extends DB
{
    
    public function createpost($title, $content)
    {
        try {
            $pdo=$this->connect();
            $sql ="INSERT INTO posts(title, content) VALUES (:title,:content);";
            $stmt=$pdo->prepare($sql);
            $stmt->bindValue(':title',$title);
            $stmt->bindValue(':content',$content);
            $stmt->execute();
            $stmt=null;
            $pdo=null;
            echo"data inserted successfully";
            header("location: Index.php");
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
    
    public function editepost($title, $content)
    {
        try {
            $pdo=$this->connect();
            $sql ="UPDATE posts SET title= :title, content=:content;";
            $stmt=$pdo->prepare($sql);
            $stmt->bindValue(':title',$title);
            $stmt->bindValue(':content',$content);
            $stmt->execute();
            $stmt=null;
            $pdo=null;
            echo"data inserted successfully";
        } catch (PDOException $e) {
            echo "error : " . $e->getMessage();
        }
    }
}
