<!-- <?php
//   session_start();
//   if ($_SESSION['REQUEST_METHOD'] == 'POST') {
//      $err;
//      $fn = $_POST['fn'];
//      $_SESSION['e'] = $err;
//      $_SESSION['f'] = $fn;
//   }
?> -->
<?php  
session_start(); 
if (isset($_POST['btn'])) {
    $err = [];
    $mail = $_POST['mail'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];
    $flname = $_FILES['file']['name'];
    $fltmp = $_FILES['file']['tmp_name'];
    $flerr = $_FILES['file']['error'];
    $url = "../img/" . $flname;
    // header("location:  main.php");

    if (move_uploaded_file($fltmp, $url)) {
        $_SESSION['imgSRC'] = $url;
        $_SESSION['msg'] = $msg;
        $_SESSION['sub'] = $sub;
        $_SESSION['em'] =  $mail;


        header("Location: main.php");
    } else {
        echo 'File error', $flerr;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $err = [];
    if (!empty($_POST['mail'])) {
        $m = "/^[\w]+@[\w]+\.[a-z]{1,6}$/i";
        if (preg_match($m, $_POST['mail'])) {
            $ml = $_POST['mail'];
        } else {
            $err[] = 'E-mail is not correct';
        }
    }
}
if (!empty($_POST['sub'])) {
    $s = "/^[\w]{5,15}$/i";
    if (preg_match($m, $_POST['sub'])) {
        $sub = $_POST['sub'];
    } else {
        $err[] = 'subjact is not correct';
    }
}
if (!empty($_POST['file'])) {
    $fn = $_POST['file'];
} else {
    $err[] = 'plz choose your file.';
}
if (!empty($_POST['msg'])) {
    $m = "/^[A-Z]{1,6}+[\w]{10-50}$/i";
    if (preg_match($m, $_POST['msg'])) {
        $msg = $_POST['msg'];
    } else {
        $err[] = 'msg is not correct';
    }

} else {
    $err[] = 'error';
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
</style>

<body>
    <!-- <h1 class="head" >Upload file</h1> -->
    <form enctype="multipart/form-data" method="post" >
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