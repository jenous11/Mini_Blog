<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';
use Dell\MiniBlogApp\Post;
// require_once 'auth_guard.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["id"])) {
  $utitle = $_POST["title"];
  $ucontent = $_POST["content"];
  // image logic
$files=$_FILES["image"]["name"];
$tempname=$_FILES["image"]["tmp_name"];
// $path="/Mini-Blog-app/uploads/".$files;
$path= __DIR__ .'/../uploads/'.$files;
//calling the post class
  $obj = new Post();
  $user_id = $_SESSION["id"];
  $_SESSION["post_id"] = $_SESSION["id"];
  $obj->createpost($utitle, $ucontent,$user_id,$files);
  if(move_uploaded_file($tempname, $path)){
  echo "<h2> file uploaded successfully</h2>";
  header("Location: /Mini-Blog-app/public/Index.php");
  exit;
  }
} else {
  echo "session id of user not set";
}
// }
