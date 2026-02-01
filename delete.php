<?php
require __DIR__ . '/vendor/autoload.php';
use Dell\MiniBlogApp\Db;
use Dell\MiniBlogApp\Post;
session_start();
if (isset($_GET['pid'])) {
  $pid=$_GET['pid'];
  $delete=new Post();
  $delete->deletepost($pid);
  header("Location: index.php");
  exit;
  }else{
  exit('No post id specified.');
  }
