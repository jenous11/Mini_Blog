<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';
use Dell\MiniBlogApp\User;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $role=$_POST["role"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $user = new User();
 $user->createuserbyadmin($name, $email, $password, $role);

  header("Location: dashboard_users.php");
  exit;
  }
