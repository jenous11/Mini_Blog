<?php
session_start();
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\User;
$password = $_POST['password'] ?? '';
if (!empty($password)) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $editbyadmin = new User();
  $username = $_POST["name"];
  $useremail = $_POST["email"];
   $userpassword = $_POST["password"];
   $userid=$_POST["id"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $editbyadmin->edituser($username, $useremail, $hashedPassword, $userid);
    header("Location: dashboard_users.php");
    exit;}
} else {
    // update WITHOUT touching password column

  if (isset($_SESSION["id"]))
    $editbyadmin = new User();
  $editbyadmin->edituser($username, $useremail,$userpassword, $userid);
  header("Location: dashboard_users.php");
  exit;
}
