<?php

namespace Dell\MiniBlogApp;

require __DIR__ . "/../vendor/autoload.php";

use PDO;
use PDOException;
// require_once 'includes/Db.php';
class User extends Db
{
  public function createuser($name, $email, $password)
  {
    try {
      // require_once 'includes/Db.php';
      $pdo = $this->connect();
      $sql = "INSERT INTO users(name,email,password) VALUES (:name,:email,:password)";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', $password);
      $stmt->execute();
      $id = $pdo->lastInsertId();
      return $id;
    } catch (PDOException $e) {
      "error: " . $e->getMessage();
    }
  }
  public function showusers()
  {
    try {
      $pdo = $this->connect();
      $sql = "SELECT *FROM users";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    } catch (PDOException $e) {
      "error: " . $e->getMessage();
    }
  }

  public function showusersbyid($id)
  {
    try {
      $pdo = $this->connect();
      $sql = "SELECT FROM users WHERE id=:id ";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':id',$id);
      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    } catch (PDOException $e) {
      "error: " . $e->getMessage();
    }
  }

  public function edituser($name, $email, $password = null,$role, $id)
  {
    try {
      $pdo = $this->connect();
      if ($password) {

        $sql = "UPDATE  users SET name=:name,email=:email,password=:password,roles=:roles WHERE id=:id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':roles', $role);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
      } else
        $sql = "UPDATE  users SET name=:name,email=:email,roles=:roles  WHERE  id=:id;";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':roles', $role);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      "error: " . $e->getMessage();
    }
  }

    public function deleteusers($id)
  {
    try {
      $pdo = $this->connect();
      $sql = "DELETE FROM users where id=:id";
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':id',$id);
      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      "error: " . $e->getMessage();
    }
  }

 public function createuserbyadmin($name, $email, $password,$role)
  {
    try {

      $pdo = $this->connect();
      $sql = "INSERT INTO users(name,email,password,roles) VALUES (:name,:email,:password,:role)";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', $password);
      $stmt->bindParam(':role', $role);
      $stmt->execute();
      $id = $pdo->lastInsertId();
      return $id;
    } catch (PDOException $e) {
      "error: " . $e->getMessage();
    }
  }
}
