<?php
session_start();
require 'includes/Post.php';

$id=$_GET['pid'];
    

    $delete=new Post();
    $delete->deletepost($id);
    echo "The Post was Deleted!";
    // header("Location: Index.php");
