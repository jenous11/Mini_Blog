 <?php
require __DIR__ . "/../vendor/autoload.php";
use Dell\MiniBlogApp\User;

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

$id=(int)($_GET['id']??0);
$deleteuser=new User();
$deleteuser->deleteusers($id);
header("Location: dashboard_users.php");
?>
