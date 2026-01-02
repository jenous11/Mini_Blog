<?php
class Db
{
    private $servername = "localhost";
    private $username = "brad";
    private $password = "password";
    private $dbname = "mini_blog";

    public function connect()
    {
        try {

            $pdo = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "error: " . $e->getMessage();
        }
    }
}
