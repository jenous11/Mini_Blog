<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';

use Dell\MiniBlogApp\User;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $user = new USER();
  $id = $user->createuser($name, $email, $password, $user_id);
  $_SESSION["id"] = $id;
  $user_id = $_SESSION["id"];
  echo $_SESSION["id"];
  header("Location: createpost.php");
  exit;
  }
