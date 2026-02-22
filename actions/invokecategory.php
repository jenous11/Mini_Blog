<?php
require __DIR__ . '/../vendor/autoload.php';
use Dell\MiniBlogApp\Category;
$cat=new Category();
$results=$cat->fetchcategory();
return $results;
exit;
