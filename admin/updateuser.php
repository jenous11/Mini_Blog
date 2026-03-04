<?php
session_start();
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\User;
//password logic for checking whether if it's empty or not.
$password = $_POST['password'] ?? '';
// getting all the data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["name"];
  $useremail = $_POST["email"];
  $userpassword = $_POST["password"];
  $userid = $_POST["id"];
  $userrole = $_POST["role"];

  if (!empty($password)) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $editbyadmin = new User();
    $editbyadmin->edituser($username, $useremail, $hashedPassword, $userrrole, $userid);
    header("Location: dashboard_users.php");
    exit;
  } else {
    // update WITHOUT touching password column
    $editbyadmin = new User();
    $editbyadmin->edituser($username, $useremail, $userpassword, $userrole, $userid);
    header("Location: dashboard_users.php");
    exit;
  }
}
