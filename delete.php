<?php
session_start();
require 'includes/Post.php';

$id=$_GET['pid'];
    
if(isset($_SESSION["id"]))
    $delete=new Post();
    $delete->deletepost($id);
    echo "The Post was Deleted!";
    // header("Location: index.php");
