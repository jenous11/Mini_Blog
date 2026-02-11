<?php
require __DIR__ . '/../vendor/autoload.php';

use Dell\MiniBlogApp\Db;

$db = new Db();
$pdo = $db->connect();

$stmt = $pdo->query("SELECT CURRENT_USER(), DATABASE()");
var_dump($stmt->fetch());
