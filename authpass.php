<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    require 'includes/Post.php';
    $ptitle=$_POST["title"];
    $pcontent=$_POST["content"];
    

    $edit=new Post();
    $edit->editepost($ptitle,$pcontent);
    header("Location: Index.php");
}
?>