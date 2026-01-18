<?php

require_once 'includes/Db.php';

class User extends Db
{

    public function createuser($name, $email, $password)
    {
        try {
            require_once 'includes/Db.php';
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
}
