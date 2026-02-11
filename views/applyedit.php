<?php
session_start();
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\Post;

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
  // require 'includes/Post.php';
  $ptitle = $_POST["title"];
  $pcontent = $_POST["content"];
  //handiling the logic for image
  $files = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $path = __DIR__ . '/../uploads/'.$files;
  //checking if uploaded to the folder called uploads or not
  if (move_uploaded_file($tempname, $path)) {
    echo "<h2> file uploaded successfully</h2>";
  }
  if (isset($_SESSION["id"]))
    $edit = new Post();
  $edit->editepost($ptitle, $pcontent, $files);
  header("Location: /Mini-Blog-app/public/Index.php");
  exit;
}
