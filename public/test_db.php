<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use Dell\MiniBlogApp\Db;

$db = new Db();
$conn = $db->connect();

echo "DB CONNECTED SUCCESSFULLY";
