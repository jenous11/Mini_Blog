 <?php
  // require_once 'auth_guard.php';
  session_start();
  ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>
   <form action="/Mini-Blog-app/actions/store.php" method="post" enctype="multipart/form-data">
     title:
     <input type="text" name="title" required>
     <br>
     content:
     <input type="text" name="content" required>
     <br>
     relevent image:
     <input type="file" name="image">
     <br>
     <input type="submit">
   </form>
 </body>
 </html>
