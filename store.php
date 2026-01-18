<?php
session_start();
require_once 'auth_guard.php';
// echo "reached store";
echo $_SESSION["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $utitle = $_POST["title"];
   $ucontent = $_POST["content"];
   
   if (isset($_SESSION["id"])) {
      echo $_SESSION["id"];
      require 'includes/Post.php';
      $obj = new Post();
      $obj->createpost($utitle, $ucontent,$_SESSION["id"]);
   }
   else{
      echo "session id of user not set";
   }
}
