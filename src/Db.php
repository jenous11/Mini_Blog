<?php

namespace Dell\MiniBlogApp;
// $env = parse_ini_file(__DIR__ . "/../.env");
use PDO;
use PDOException;

class Db
{
  private $servername = "127.0.0.1";   // IMPORTANT
  private $username = "root";
  private $password = "!nev!t@ble_11";
  private $dbname = "mini_blog";
  private $port=3306;

  public function connect()
  {
    try {

      $pdo = new PDO(
        "mysql:host=" . $this->servername . ";port=" . $this->port . ";dbname=" . $this->dbname . ";charset=utf8mb4",
        $this->username,
        $this->password
      );

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully<br>";
      return $pdo;

    } catch (PDOException $e) {
      die("DB ERROR: " . $e->getMessage());
    }
  }
}
