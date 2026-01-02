<?php
//getting data when edit button gets pressed
// $pid = $_GET['id'];
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
  <form action="authpass.php" method="post">
    <input type="text" name="title" value="<?php echo $title?>">
    <br>
    <input type="text" name="content" value="<?php echo $content?>">
    <br>
    <button type="submit">post</button>
  </form>  
</body>
</html>


