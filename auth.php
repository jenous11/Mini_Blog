<?php
session_start();
require_once 'includes/Db.php';

class Verify extends Db
{

    public function auth($uemail, $upassword)
    {

        try {
            $pdo = $this->connect();
            $sql = ("SELECT *FROM users");
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();

          
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
                    }
                    else{
                        echo"wrong email or password";
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
    $uname = $_POST["name"];
    $uemail = $_POST["email"];
    $upassword = $_POST["password"];

$verify = new Verify();
$credentials = $verify->auth($uemail, $upassword);

}
