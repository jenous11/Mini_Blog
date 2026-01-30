<?php
use Dell\MiniBlogApp\Post;
session_start();
// require_once 'auth_guard.php';
require 'includes/Post.php';
if (isset($_GET['pid'])) {
  $pid=$_GET['pid'];
  $delete=new Post();
  $delete->deletepost($pid);
  header("Location: index.php");
  exit;
  }else{

  exit('No post id specified.');
  }
