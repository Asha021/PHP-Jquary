<?php
require "connect1.php";
if (isset($_POST['btn'])) {
    $err = [];
    $mail = $_POST['mail'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];
    $flname = $_FILES['file']['name'];
    $fltmp = $_FILES['file']['tmp_name'];
    // $flpath = $_FILES['file']['path'];
    $flerr = $_FILES['file']['error'];
    $flsize = $_FILES['file']['size'];
    $url = "../img/" . $flname;
  
    $files = "INSERT INTO Uploadfile(flname, fltmp, flsize) VALUES('$flname','$fltmp','$flsize')";
    
    $rg = mysqli_query($conn, $files);
    if ($rg) {
        echo 'table insert';
    } else {
        echo 'table not insert';
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>go</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        background: linear-gradient(#228cdc, #8e75e4, #b52b79);
    }

    form {
        font-size: 1.3rem;
        color: white;
        height: 85%;
        font-weight: bold;
        width: 38%;
        border-radius: 10px;
        align-items: center;
        justify-content: center;
        display: flex;
        flex-direction: column;
        border: 2px ridge silver;
        background-color: #8e75e4;
        box-shadow: 25px 25px 15px rgba(0, 0, 0);
    }

    input {
        height: 15%;
        text-indent: 10px;
        border-radius: 10px;
        width: 100%;
    }

    form:hover {
        /* box-shadow: 15px 5px 15px rgba(255, 255, 255, .4); */
    }

    input:hover {
        box-shadow: 5px 8px 5px rgba(0, 0, 0, .4);
    }

    textarea:hover {
        box-shadow: 5px 8px 5px rgba(0, 0, 0, .4);
    }

    label {
        width: 100%;
        align-items: center;
        justify-content: start;
        display: flex;
    }

    #btn {
        height: 25%;
        font-size: 1.3rem;
        transition: .6s;
    }

    #btn:hover {
        background-color: dodgerblue;
        color: white;
    }

    textarea {
        height: 30%;
        width: 100%;
        text-indent: 10px;
        border-radius: 15px;
    }

    #fl {
        box-shadow: none;
    }

    h1 {
        color: white;
    }

    #upload-progress {
        width: 100%;
        height: 20px;
        margin-bottom: 10px;
    }
</style>

<body>
    <!-- <h1 class="head" >Upload file</h1> -->
    <form enctype="multipart/form-data" method="post">
        <!-- <fieldset> -->
        <label for="em">To</label>
        <input type="email" name="mail" id="em" placeholder="Enter Your E-mail"><br>
        <span>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($err as $ans) {
                    if ($msg == 'plz enter your mail') {
                        echo $ans;
                    }
                    if ($msg == 'E-mail is not correct') {
                        echo $ans;
                    }
                }
            }
            ?>
        </span>
        <label for="sub">Subject</label>
        <input type="text" name="sub" id="sub" placeholder="Enter Your Subject"><br>
        <span>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($err as $ans) {
                    if ($msg == 'plz enter your sub') {
                        echo $ans;
                    }
                    if ($msg == 'subjact is not correct') {
                        echo $ans;
                    }
                }
            }
            ?>
        </span>
        <label for="fl">File</label>
        <input type="file" name="file" id="fl">
        <progress id="upload-progress" value="0" max="100"></progress>
        <label for="msg">Message</label>
        <textarea name="msg" id="msg" placeholder="Enter Your E-mail"></textarea><br>
        <span>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($err as $ans) {
                    if ($msg == 'plz enter your msg') {
                        echo $ans;
                    }
                    if ($msg == 'message is not correct') {
                        echo $ans;
                    }
                }
            }
            ?>
        </span>
        <input type="submit" value="Upload" name="btn" id="btn">
        <!-- </fieldset> -->
    </form><br><br>
    <div>
        <h2>
            <?php echo $mail;
            // header("location:  mai/n.php");
            ?>
        </h2>
        <h2>
            <?php echo $sub; ?>
        </h2>
        <h2>
            <?php echo $msg; ?>
        </h2>
        <!-- <img src="" alt="img" height="400" width="500"> -->
    </div>
</body>

</html>