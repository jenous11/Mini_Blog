 <?php
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\User;
$id=(int)($_GET['id']??0);
$deleteuser=new User();
$deleteuser->deleteusers($id);
header("Location: dashboard_users.php");
?>
