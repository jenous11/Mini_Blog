<?php
require __DIR__ . '/vendor/autoload.php';
use Dell\MiniBlogApp\Post;
use Dell\MiniBlogApp\Db;
// require_once 'auth_guard.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $utitle = $_POST["title"];
  $ucontent = $_POST["content"];
}
  if (isset($_SESSION["id"])) {
    $obj = new Post();
    $user_id = $_SESSION["id"];
    $obj->createpost($utitle, $ucontent, $user_id);
    $_SESSION["post_id"] = $_SESSION["id"];
    header("Location: index.php");
  } else {
    echo "session id of user not set";
  }
// }
