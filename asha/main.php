<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
   body{
        height: 100vh;
        background: linear-gradient(pink, hotpink,dodgerblue);
   }
   a{
    text-decoration: none;
    color: white;
    font-size: 2rem;
   }
</style>
<body>
    <h1>Home</h1>
    <hr>
    <?php 
        session_start();
        if(!empty($_SESSION['f'])){
            echo "<h1>Hi!, {$_SESSION['f']} {$_SESSION['l']}</h1>|<a href='LogOut.php'>Logout</a>";
            echo "<a href='uploadSQL.php'>Upload</a>";
           
        }else{
            echo "<a href='loginSQL.php'>Login</a><a href='regSQL.php'>Register</a>";
        }
    ?>
    <br><img src="<?php if(!empty($_SESSION['imgSRC'])) echo $_SESSION['imgSRC'];?>" alt='error' height='300' width='300'><br>
    <?php echo $_SESSION['msg'] ?><br>
    <?php echo $_SESSION['sub'] ?><br>
    <?php echo $_SESSION['em'] ?>
</body>
</html>