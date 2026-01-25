<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'includes/Db.php';
class Verify extends Db
{
    public function auth($uemail, $upassword, $uname)
    {
        try {
            $pdo = $this->connect();
            $sql = "SELECT *FROM users WHERE email=:email AND name=:name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam('email', $uemail);
            $stmt->bindParam('name', $uname);
            $stmt->execute();
            $user = $stmt->fetch();
            if (!$user) {
                header("Location: register.php");
                exit;
            }
            if (password_verify($upassword, $user["password"])) {
                $_SESSION["id"] = $user;
                $_SESSION["name"]=$uname;
                header("location: index.php");
                exit;
            }
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uemail = $_POST["email"];
    $upassword = $_POST["password"];
    $uname=$_POST["name"];
    $verify = new Verify();
    $credentials = $verify->auth($uemail, $upassword, $uname);
}
