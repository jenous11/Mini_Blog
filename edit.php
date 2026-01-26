<?php
require_once 'auth_guard.php';

$title = $_GET['title'];
$content = $_GET['content'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="applyedit.php" method="post">
    title:
    <input type="text" name="title" value="<?php echo $title?>">
    <br>
    content:
    <input type="text" name="content" value="<?php echo $content?>">
    <br>
    <button type="submit">post</button>
  </form>
</body>
</html>


