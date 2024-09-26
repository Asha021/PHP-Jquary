<?php
  session_start();
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $err;
       if(!empty($_POST['email'])){
       $pattern_em =  "/^[\w]+@[\w]+\.[a-z]{1,5}$/i";
       if (preg_match($_em,$_POST['email'])) {
          $em = $_POST["email"];
       }else {
        $err[] = 'email is incorrect';
       }

   }else {
    $err[] = 'pls enter your email';
   }
//    if (move_uploaded_file($fltmp, $url)){
//     $_SESSION['f'] = $fn;
//     $_SESSION['l'] = $ln;
//     $_SESSION['p'] = $sub;
//     $_SESSION['m'] = $ml;
//     $_SESSION['ms'] = $msg;
//     header('location:test1.php');
// }
if (move_uploaded_file($fname, $lname)) {
    $_SESSION['su'] = $sub;
    $_SESSION['e'] =  $mail;
    $_SESSION['ms'] =  $msg;

    header("Location: main.php");
} else {
    echo 'File error';
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
    }
    form{
        border: 3px ridge black;
        height: 80%;
        width: 40%;
        align-items: center;
        justify-content: space-around;
        display: flex;
        flex-direction: column;
        border-radius: 10px;      
    }
    label{
        font-size: 2rem;
        width: 100%;
        align-items: center;
        justify-content: start;
        display: flex;
    }
    input{
        width: 100%;
        height: 12%;
        text-indent: 10px;
        /* border-radius: 20px; */
    }
    input:hover{
        border-radius: 20px;       
    }
    textarea{
        height: 20%;
        width: 100%;
        text-indent: 10px;
    }
    textarea:hover{
        border-radius: 20px;       
    }
    #but{
        height: 15%;
        font-size: 2rem;
        transition: .8s;
    }
    #but:hover{
        background-color: plum;
        color: white;
    }
 </style>
<body>
    <form method="POST">
        <!-- <label for="fn" >First name</label> -->
        <input type="hidden" id="fn" name="fname">
        <!-- <label for="ln">Last name</label> -->
        <input type="hidden" id="ln" name="lname">
        <label for="em">TO</label>
        <input type="text" id="em" name="email" placeholder="Pls enter your E-mail">
        <span>
        <?php
              if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                 foreach($err as $msg)
                 if ($msg == 'pls enter your email') {
                    echo $msg;
                 }
                 if ($msg == 'email is incorrect') {
                    echo $msg;
                 }
              }
        ?>
        </span>
        <label for="sub">Subjact</label>
        <input type="text" id="sub" name="subjact" placeholder="Pls enter your Subjact" required >
        <label for="msg">Message</label>
        <textarea name="msg" id="msg" placeholder="pls enter your Message" required ></textarea>
        <input type="submit" value="submit" id="but">
    </form>
    <?php echo $_SESSION['ms'] ?><br>
    <?php echo $_SESSION['su'] ?><br>
    <?php echo $_SESSION['e'] ?>
</body>
</html>