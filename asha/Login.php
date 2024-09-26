<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ml = $_REQUEST['nmail'];
    $nps = $_REQUEST['npass'];

    if ($ml == $_SESSION['m'] && $nps == $_SESSION['ps']) {
        header("location:  main.php");
    } else {
        echo 'Email and Password not Match<br>';
        echo $ml, '|', $_SESSION['m'], '<br>';
        echo $nps, '|', $_SESSION['ps'], '<br>';
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        background-image: url('https://wallpapercave.com/wp/wp2939888.jpg');
        background-size: 100% 100%;
        align-items: center;
        justify-content: space-around;
        /* flex-direction: column; */
        display: flex;
    }

    form {
        background-color: transparent;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        display: flex;
        position: absolute;
        top: 36%;
        height: 35%;
        width: 25%;
        color: white;
        font-size: 1.2rem;
    }

    input:hover {
        border: 2px solid white;
        box-shadow: 2px 5px 5px rgba(255, 255, 255, .5);
        border-radius: 20px;
        color: white;
    }

    label {
        width: 100%;
        align-items: center;
        justify-content: start;
        /* border: 1px solid black; */
        display: flex;
    }

    input {
        width: 100%;
        height: 20%;
        /* border-radius: 20px; */
        background-color: transparent;
        outline: none;
        border: none;
        text-indent: 10px;
        border-bottom: 1px solid white;
    }

    #but {
        font-size: 1.2rem;
        background-color: white;
        border: 1px solid white;
        border-radius: 20px;
    }

    #but:hover {
        background-color: darkred;
    }
</style>

<body>
    <form method="POST">
        <label for="em">E-MAIL</label>
        <input type="email" name="nmail" placeholder="Enter your mail" id="em">
        <label for="ps">Password</label>
        <input type="password" name="npass" placeholder="Enter your Password">
        <input type="submit" id="but" value="submit">
    </form>
</body>

</html>