<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Book Details</title>
    <style>
        .book-details{
            background-color:#f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Post Details</h1>
            <div>
            <a href="../public/Index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details p-5 my-4">
            <?php
             require __DIR__ . '/../vendor/autoload.php';
             use Dell\MiniBlogApp\Post;
            $id = $_GET['pid'];

            if ($id) {
             $read=new Post();
            $result=$read->readpost($id);
            foreach( $result as $row){
                 ?>
                 <h3>Title:</h3>
                 <p><?php echo $row["title"]; ?></p>
                 <h3>Content:</h3>
                 <p><?php echo $row["content"]; ?></p>
                 <?php
                }
            }
            else{
                echo "<h3>No books found</h3>";
            }
            ?>

        </div>
    </div>
</body>
</html>
