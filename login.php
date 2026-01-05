<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class=" justify-self-center mt-22 bg-red-300 h-94 w-55 border-4 ">
    <form action="auth.php" method="post" class="grid mt-10  justify-self-center">
        name:
        <input type="text" name="name" class="border-1 border-black rounded">
        <br><br>
        email:
        <input type="email" name="email" class="border-1 border-black rounded">
        <br><br>
        password:
        <input type="password" name="password" class="border-1 border-black rounded w-45">
        <br><br>
        <button class="rounded bg-sky-500 w-21" type="submit" >submit</button>
    </form>
    </div>

</body>

</html>