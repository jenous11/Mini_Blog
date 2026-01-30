<?php
require_once 'vendor/autoload.php';
use Dell\MiniBlogApp\Db;
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// require_once 'includes/Db.php';
class Verify extends Db
{
    public function auth($uemail, $upassword)
    {
        try {
            $pdo = $this->connect();
            // email bata matra gairaxa aile ko lagi no name config's
            // password ta has vaisakyo next time check huda hunna
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
                header("location: index.php");
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
// if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME']) && $_SERVER["REQUEST_METHOD"] === "POST") {
//     $uemail    = $_POST["email"]    ?? '';
//     $upassword = $_POST["password"] ?? '';

//     $verify = new Verify();
//     $verify->auth($uemail, $upassword);   // it already redirects inside
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uemail = $_POST["email"];
    $upassword = $_POST["password"];
    $verify = new Verify();
    $credentials = $verify->auth($uemail, $upassword);
}
