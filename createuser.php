<?php
require __DIR__ . '/vendor/autoload.php';
use Dell\MiniBlogApp\User;
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password =password_hash($_POST["password"],PASSWORD_DEFAULT);
    $user = new USER();
    $_SESSION["id"]=$user->createuser($name, $email, $password);
    header("Location: createpost.php");
    exit;
}
