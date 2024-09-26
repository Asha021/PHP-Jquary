<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $err = [];
    if (!empty($_POST['fname'])) {
        $fn = $_POST['fname'];
    } else {
        $err[] = 'plz enter your first name';
    }
    if (!empty($_POST['lname'])) {
        $ln = $_POST['lname'];
    } else {
        $err[] = 'plz enter your last name';
    }

    if (!empty($_POST['pno'])) {
        $p = "/^[\w]{10}$/i";
        if (preg_match($p, $_POST['pno'])) {
            $pn = $_POST['pno'];
        } else {
            $err[] = ' phone no is not correct';
        }

    } else {
        $err[] = 'plz enter your phone no';
    }

    if (!empty($_POST['mail'])) {
        $m = "/^[\w]+@[\w]+\.[a-z]{2,8}$/i";

        if (preg_match($m, $_POST['mail'])) {
            $ml = $_POST['mail'];
        } else {
            $err[] = ' email is not correct';
        }

    } else {
        $err[] = 'plz enter your mail';
    }
    if (!empty($_POST['pass']) && !empty($_POST['cpass'])) {
        if ($_POST['pass'] == $_POST['cpass']) {
            $ps = $_POST['pass'];

        } else {
            $err[] = 'password is not match';
        }
    }
    else {
        $err[] = 'plz enter your cinfirm password';
    }
    if (empty($err)) {
        $_SESSION['f'] = $fn;
        $_SESSION['l'] = $ln;
        $_SESSION['p'] = $pn;
        $_SESSION['m'] = $ml;
        $_SESSION['ps'] = $ps;
        header('location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../form/ragister.css"> -->
    <title>go
    </title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        /* background-color: wheat; */
        background-image: url('https://img.freepik.com/free-vector/gradient-network-connection-background_23-2148865393.jpg');
        background-size: 100% 100%;
    }

    .fa {
        color: white;
    }

    h1 {
        height: 10%;
        width: 40%;
        align-items: center;
        justify-content: center;
        display: flex;
        position: absolute;
        left: 30%;
        color: white;
        font-size: 3rem;
    }

    form {
        height: 85%;
        width: 30%;
        border: 2px ridge silver;
        border-radius: 20px;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        display: flex;
        position: absolute;
        left: 35%;
        top: 12%;
        /* color: white; */
        background-color: transparent;
        /* position: relative; */
    }

    form:hover {
        border: 2px solid white;
        box-shadow: 2px 5px 5px rgba(255, 255, 255, .5);
    }

    label {
        /* height: 100%; */
        width: 90%;
        color: white;
        font-size: 1.5rem;
        align-items: flex-start;
        justify-content: start;
        display: flex;
    }

    input {
        width: 90%;
        height: 10%;
        color: white;
        /* opacity: 0.2; */
        background-color: none;
        border: transparent;
        text-indent: 10px;
        font-size: 1rem;
        transition: 1s;
        border-bottom: 1px solid black;
        /* border-radius: 10px; */
        /* border-radius: 20px; */
        background-color: transparent;
        outline: none;
        border: none;
        text-indent: 10px;
        border-bottom: 1px solid white;
    }

    input:hover {
        border: 2px solid white;
        border-radius: 20px;
        box-shadow: 2px 5px 5px rgba(255, 255, 255, .5);
    }

    #sub {
        /* height: 20%; */
        width: 40%;
        align-items: center;
        justify-content: center;
        display: flex;
        border: 1px solid white;
        font-size: 1.2rem;
    }

    #sub:hover {
        color: white;
        background-color: darkblue;
        /* border: 2px solid green; */
        box-shadow: 2px 5px 5px rgba(255, 255, 255, .5);
    }

    i {
        position: absolute;
        left: 89%;
        top: 62.5%;
        color: black;
    }

    b {
        position: absolute;
        left: 89%;
        top: 86.5%;
        color: black;
    }

    .nav {
        height: 60%;
        width: 20%;
        top: 12%;
        left: 70%;
        position: absolute;
        border: 1px solid black;
        align-items: self-start;
        justify-content: space-between;
        flex-direction: column;
        display: flex;
        background-color: whitesmoke;
    }

    .nav>div {
        font-size: 1.2rem;
        color: red;
    }

    .red {
        color: red;
    }

    .green {
        color: green;
    }

    /* #vis{
  visibility: hidden;
 } */
</style>

<body>
    <h1>Registration Form</h1>
    <form method="post">
        <label for="fname">First name</label>
        <input type="text" placeholder="First name" id="fname" name="fname" onclick="first()"><br>
        <span>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                foreach ($err as $msg) {
                    if ($msg == 'plz enter your first name') {
                        echo $msg;
                    }
                }
            }
            ?>
        </span>
        <label for="lname">Last name</label>
        <input type="text" placeholder="Last name" id="lname" name="lname"><br>
        <span>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($err as $msg) {
                    if ($msg == 'plz enter your last name') {
                        echo $msg;
                    }
                }
            }
            ?>
        </span>
        <label for="pno">Phone No</label>
        <input type="tel" placeholder="Phone No" id="pno" name="pno"><br>
        <span>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($err as $msg) {
                    if ($msg == 'plz enter your phone no') {
                        echo $msg;
                    }
                    if ($msg == ' phone no is not correct') {
                        echo $msg;
                    }
                }
            }
            ?>
        </span>
        <label for="email">E-mail</label>
        <input type="text" placeholder="E-mail" id="mail" name="mail"><br>
        <span>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($err as $msg) {
                    if ($msg == 'plz enter your mail') {
                        echo $msg;
                    }
                    if ($msg == ' email is not correct') {
                        echo $msg;
                    }
                }
            }
            ?>
        </span>
        <label for="pass">Password</label>
        <input type="password" placeholder="Password" id="pass" name="pass" oninput="col(this.value)" onfocus="clk()">
        <i class='fa fa-eye-slash' onclick="e()" id="y"></i>
        <span>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($err as $msg) {
                    if ($msg == 'plz enter your password') {
                        echo $msg;
                    }
                    // if($msg == ' password is not correct'){
                    //   echo $msg;
                    // }
                }
            }
            ?>
        </span>
        <span class="box">
            <ul id="vis">
                <li class="a1 red">
                    One uppercase letter.
                </li>
                <li class="a2 red">
                    One lowercase Letter no.
                </li>
                <li class="a3 red">
                    Any one special symbol (!,&,@,#,$,?,.,).
                </li>
                <li class="a4 red">
                    Total 8 digits compulsary.
                </li>
            </ul>
        </span>
        <label for="cpass">Cinfirm Password</label>
        <input type="password" placeholder="Cinfirm Password" id="cpass" name="cpass"><br>
        <b class='fa fa-eye-slash' onclick="ee()" id="ys"></b>
        <span>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($err as $msg) {
                    if ($msg == 'password is not match') {
                        echo $msg;
                    }
                }
            }
            ?>
        </span>
        <input type="submit" value="submit" id="sub">
    </form>
    <script>
        function e() {
            if (document.getElementById('pass').getAttribute('type') == 'password') {
                document.getElementById('pass').setAttribute('type', 'text');
                document.getElementById('y').classList.add('fa-eye');
                document.getElementById('y').classList.remove('fa-eye-slash');

            } else {
                document.getElementById('pass').setAttribute('type', 'password');
                document.getElementById('y').classList.remove('fa-eye');
                document.getElementById('y').classList.add('fa-eye-slash');
            }
        }
        function ee() {
            if (document.getElementById('cpass').getAttribute('type') == 'password') {
                document.getElementById('cpass').setAttribute('type', 'text');
                document.querySelector('#ys').classList.add('fa-eye');
                document.querySelector('#ys').classList.remove('fa-eye-slash');

            } else {
                document.getElementById('cpass').setAttribute('type', 'password');
                document.querySelector('#ys').classList.remove('fa-eye');
                document.querySelector('#ys').classList.add('fa-eye-slash');
            }
        }
        function col(val) {
            var abc = /[A-Z]/g;
            if (val.match(abc)) {
                document.querySelector('.a1').classList.remove('red');
                document.querySelector('.a1').classList.add('green');
            } else {
                document.querySelector('.a1').classList.remove('green');
                document.querySelector('.a1').classList.add('red');
            }

            var ab2 = /[a-z]/g;
            if (val.match(ab2)) {
                document.querySelector('.a2').classList.remove('red');
                document.querySelector('.a2').classList.add('green');
            } else {
                document.querySelector('.a2').classList.remove('green');
                document.querySelector('.a2').classList.add('red');
            }

            var ab3 = /[!,&,@,#,$,?,.,]/g;
            if (val.match(ab3)) {
                document.querySelector('.a3').classList.remove('red');
                document.querySelector('.a3').classList.add('green');
            } else {
                document.querySelector('.a3').classList.remove('green');
                document.querySelector('.a3').classList.add('red');
            }

            if (val.length >= 8) {
                document.querySelector('.a4').classList.remove('red');
                document.querySelector('.a4').classList.add('green');
            } else {
                document.querySelector('.a4').classList.remove('green');
                document.querySelector('.a4').classList.add('red');
            }
        }

        //  function clk(){

        //   if (document.getElementById('vis').style.visibility=="hidden") {
        //     document.getElementById('vis').style.visibility="visible";
        //   } else {
        //     document.getElementById('vis').style.visibility="hidden";
        //   }
        //  } 
    </script>
</body>

</html>