<?php
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\Post;
$id=(int)($_GET['id']??0);
$deletebyadmin=new Post();
$deletebyadmin->deletepost($id);
header("Location: dashboard_posts.php");
?>
