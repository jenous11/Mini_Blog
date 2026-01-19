<?php
session_start();
// require_once 'auth_guard.php';
require_once 'includes/Db.php';

class Index extends Db
{
    public function show()
    {
        try {
            $pdo = $this->connect();
            $sql = "SELECT *FROM posts";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;
            $pdo = null;
            
            if (empty($result))
                header("Location: create.php");
            else
                foreach ($result as $rows) {
                    
                    // echo $rows["id"]
                        // . "<br>";
                    // $_SESSION["name"];
                    echo $rows["title"]
                        . "<br>";
                    echo $rows["content"]
                        . "<br>";
                    echo $rows["created_at"]
                        . "<br>";
                    echo "<a href='authcheck.php?pid=" . $rows['id'] . "&title=" . urlencode($rows['title']) . "&content=" . urlencode($rows['content']) . "'>
                    <button>edit</button>
                        </a>";
                    echo "<a href='logout.php'><button>logout</button></a>";
                    echo "<a href='delete.php?pid=" . $rows['id'] ."'>
                    <button>delete</button>
                        </a>";
                    echo "<hr>";
                }
        } catch (PDOException $e) {
            echo "error: " . $e->getMessage();
        }
    }
}

require_once 'auth.php';
if (isset($_SESSION["id"])) {
    echo "we are at index";
    echo $_SESSION["id"];
    $show = new Index();
    $show->show();
}
