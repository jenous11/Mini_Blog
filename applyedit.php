<?php
// require 'vendor/autoload.php';
use Dell\MiniBlogApp\Post;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'includes/Post.php';
    $ptitle = $_POST["title"];
    $pcontent = $_POST["content"];


    if (isset($_SESSION["id"]))
        $edit = new Post();
    $edit->editepost($ptitle, $pcontent);
    header("Location: Index.php");
}
