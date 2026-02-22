<?php
namespace Dell\MiniBlogApp;
require __DIR__ . "/../vendor/autoload.php";
use PDOException;
// use PDO;
class Category extends Db
{
  public function fetchcategory(){
try{
$pdo=$this->connect();
$sql="SELECT * FROM category;";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll();
return $results;
}catch(PDOException $e){
echo"error:  ".$e->getMessage();
}
  }
}


