<?php
require "connect1.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $na = $_POST['name'];
  $pa = $_POST['price'];
  $da = $_POST['date'];
  $qa = $_POST['qua'];
  $ca = $_POST['color'];
  $tot = $pa * $qa;
  header('location:regSQL.php');


  $q = "INSERT INTO cloth(sname,sales_date,sprice,squantity,scolor,total_price) VALUES('$na','$da','$pa','$qa','$ca', '$tot')";
  $r = mysqli_query($conn, $q);

  if ($r) {
    echo 'insert data';
  } else {
    echo 'not insert data';
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
    align-items: center;
    justify-content: center;
    display: flex;
  }

  form {
    height: 60%;
    width: 20%;
    align-items: center;
    justify-content: space-around;
    display: flex;
    border-radius: 20px;
    flex-direction: column;
    border: 1px solid black;
  }

  input {
    height: 8%;
    width: 95%;
    border-radius: 10px;
    align-items: center;
    justify-content: center;
    display: flex;
    text-indent: 10px;
    font-size: 1rem;
  }

  label {
    /* height: 20%; */
    width: 100%;
    align-items: center;
    justify-content: start;
    display: flex;
  }

  #but {
    height: 13%;
  }
</style>

<body>
  <form method="post">
    <label for="na">NAME</label>
    <input type="text" id="na" name="name" placeholder=" pls enter your name..">
    <label for="pa">PRICE</label>
    <input type="text" id="pa" name="price" placeholder=" pls enter price..">
    <label for="da">DATE</label>
    <input type="date" id="da" name="date">
    <label for="qa">QUANTITY</label>
    <input type="text" id="qa" name="qua" placeholder=" pls enter your quantity..">
    <label for="ca">COLOR</label>
    <input type="text" id="ca" name="color" placeholder=" pls enter your dress color..">
    <input type="submit" value="submit" id='but'>
  </form>
</body>

</html>