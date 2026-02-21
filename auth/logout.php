<?php
// require_once 'auth_guard.php';

session_start();
// echo ($_SESSION['status']);
$_SESSION['status']='inactive';
// session_destroy();
unset($_SESSION["id"]);
header("location:login.php");
// exit;
