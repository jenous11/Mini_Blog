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
        
        try {
            $pdo = $this->connect();
            // $sql = ("SELECT *FROM users");
            $sql = ("SELECT *FROM users where email=:email AND password=:password");
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue("email",$uemail);
            $stmt->bindValue("password",$upassword);
            $stmt->execute();
            
            
            // $results = $stmt->fetchALL();
            $results = $stmt->fetch();
            //eta empty database matra check garyo aru user pani huna sakxa josle register garya xaina
            //logic milau
            if(empty($results)) {
            header("Location: register.php");
            }
            foreach ($results as $result) {

                $id = $result["id"];
                $email = $result["email"];
                $password = $result["password"];

                if ($uemail == $email) {
                    echo "email correct!";
                    if (password_verify($upassword, $password)) {
                        echo "password verified";
                        $_SESSION["id"] = $id;
                        echo $_SESSION["id"];
                        header("Location: Index.php");
                    } else {
                        echo "wrong email or password";
                        break;
                    }
                }
            }
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uemail = $_POST["email"];
    $upassword = $_POST["password"];

    $verify = new Verify();
    $credentials = $verify->auth($uemail,$upassword);
}
