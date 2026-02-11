<?php
namespace auth;
require __DIR__ .'/../vendor/autoload.php';
use Dell\MiniBlogApp\Db;
use PDOException;
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class Verify extends Db
{
    public function auth($uemail, $upassword)
    {
        try {
            $pdo = $this->connect();
            $sql = "SELECT * FROM users where email=:email;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":email",$uemail);
            $stmt->execute();
            $users = $stmt->fetch();
              if (!$users) {
              header("Location: register.php");
              exit;
              }
              if (password_verify($upassword, $users["password"])) {
              // if password matches then create the session
              $_SESSION["id"] = $users["id"];
              $_SESSION["name"] = $users["name"];
                header("Location: /Mini-Blog-app/public/Index.php");
                exit;
            }else {
            // wrong password - redirect back to login with error
            header("Location: login.php?error=invalid_credentials");
            echo"bigryo";
            exit;
        }
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
      }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uemail = htmlspecialchars($_POST["email"]);
    $upassword = htmlspecialchars($_POST["password"]);
    $verify = new Verify();
    $credentials = $verify->auth($uemail, $upassword);
}
