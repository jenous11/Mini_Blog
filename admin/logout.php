<?php

session_start();
if($_SESSION['status']=='Active'){
$_SESSION['status']='Inactive';
}
unset($_SESSION['id']);
session_destroy();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

header("location: ../auth/login.php");
exit();
?>
