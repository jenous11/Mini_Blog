<?php
// use Dell\MiniBlogApp\Index;
echo $_GET["category_id"];
if($_SERVER['REQUEST_METHOD']=="POST"){
  $category_id=$_POST['categpry_id'];
  echo $category_id;
$index =new Index();
$idex->show2($category_id);
}
