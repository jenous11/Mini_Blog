<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// session_start();
require_once 'includes/Db.php';
// require_once 'auth_guard.php';

class Verify extends Db
{
    public function auth($uemail,$upassword)
    {
        try{
            $pdo=$this->connect();
            $sql="SELECT *FROM users WHERE email=:email;";
            $stmt=$pdo->prepare($sql);
            $stmt->bindParam('email',$uemail);
            $stmt->execute();
            $user=$stmt->fetch();

            if(!$user){
                header("Location: register.php");
                exit;
            }
            if(password_verify($upassword,$user["password"])){
                $_SESSION["id"]=$user;
                header("location: index.php");
                exit;
            }
                
            }
        catch(PDOException $e){
            echo "error".$e->getMessage();

        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uemail = $_POST["email"];
    $upassword = $_POST["password"];
    $uname = $_POST["name"];
    $_SESSION["name"]=$uname;

    $verify = new Verify();
    $credentials = $verify->auth($uemail,$upassword);
}
