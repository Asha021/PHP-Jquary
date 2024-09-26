<?php
   session_start();
   session_unset();
   session_destroy();

   header("Location: Register.php");
?>
<!-- <a href="ragister.php">Ragister</a>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>
   *{
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
   }
   body{
      height: 100vh;
      align-items: center;
      justify-content: center;
      display: flex;
      font-size: 3rem;
      background-image: url('https://pics.craiyon.com/2023-07-12/82dd4d501f434d108c6d4d6ec5682e46.webp');
      background-size: 100% 100%;
   }
   a{
      text-decoration: none;
      color: white;
   }
</style>
<body>
   
</body>
</html> -->