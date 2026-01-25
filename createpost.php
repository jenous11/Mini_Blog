 <?php
require_once 'auth_guard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        title:
        <input type="text" name="title"  required >
        <br>
        <br>
        content:
        <input type="text" name="content"  required>
        <br>
        <button type="submit">
            Post
        </button>
    </form>
</body>
</html>
