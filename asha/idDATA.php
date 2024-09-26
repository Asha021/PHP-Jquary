<?php
require 'connect1.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $nm = $_POST['nm'];
   $age = $_POST['age'];
   $cls = $_POST['cls'];
   $rol = $_POST['rol'];
   $dt = $_POST['dt'];
   $img = $_FILES['img']['name'];
   $imgg = "./Images/". $img;

   $as = "INSERT INTO iddata(sname,sAge,sClass,sRollNo,sDATE,simage) VALUES('$nm','$age','$cls','$rol','$dt','$imgg')";
   $ad =  mysqli_query($conn, $as);

   if ($ad) {
      echo 'data insert';
      mysqli_close($conn);
   } else {
      echo 'data not insert';
   }
}
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>go</title>
   <style type="text/css">
      * {
         margin: 0px;
         padding: 0px;
         box-sizing: border-box;
      }

      body {
         height: 100vh;
         background: linear-gradient(purple, darkred, grey);
         align-items: center;
         justify-content: space-around;
         display: flex;
         flex-direction: column;
      }

      .a {
         height: 12%;
         width: 100%;
         /*border: 1px solid black;*/
         align-items: center;
         justify-content: center;
         display: flex;
         font-size: 2.5rem;
         text-transform: capitalize;
      }

      .b {
         height: 8%;
         width: 100%;
         /*border: 1px solid black;*/
         align-items: center;
         justify-content: center;
         display: flex;
      }

      form {
         height: 91%;
         width: 40%;
         /*border: 1px solid black;*/
         background: rgba(255, 255, 255, .3);
      }

      fieldset {
         height: 100%;
         width: 100%;
         border: 1px solid dodgerblue;
         align-items: center;
         justify-content: center;
         display: flex;
         flex-direction: column;
         border-bottom-right-radius: 15px;
         border-bottom-left-radius: 15px;
         /*background-color: whitesmoke;*/
         background: rgba(255, 255, 200, .4);
      }

      legend {
         font-size: 3rem;
         color: dodgerblue;
      }

      .c {
         height: 7%;
         width: 100%;
         font-size: 1rem;
         align-items: center;
         display: flex;
         justify-content: center;
      }

      .d {
         height: 17%;
         width: 90%;
         /*border: 1px solid black;*/
         font-size: 1.2rem;
      }

      .d>input {
         height: 70%;
         width: 100%;
         border: none;
         outline: none;
         border-bottom: 1px solid dodgerblue;
         font-size: 1rem;
         background-color: transparent;
      }

      .d>input:hover {
         box-shadow: 0px 5px 15px rgba(30, 144, 255, .5);
         color: dodgerblue;
         border: none;
         border-radius: 50px;
         text-indent: 20px;
      }

      .e {
         height: 17%;
         width: 90%;
         /*border: 1px solid black;*/
         font-size: 1.2rem;
      }

      .e>input {
         height: 70%;
         width: 100%;
         border: none;
         outline: none;
         border-bottom: 1px solid dodgerblue;
         font-size: 1rem;
         background-color: transparent;
      }

      .e>input:hover {
         box-shadow: 0px 5px 15px rgba(30, 144, 255, .5);
         color: dodgerblue;
         border: none;
         border-radius: 50px;
         text-indent: 20px;
      }

      .f {
         height: 17%;
         width: 90%;
         /*border: 1px solid black;*/
         font-size: 1.2rem;
      }

      .f>input {
         height: 70%;
         width: 100%;
         border: none;
         outline: none;
         border-bottom: 1px solid dodgerblue;
         font-size: 1rem;
         background-color: transparent;
      }

      .f>input:hover {
         box-shadow: 0px 5px 15px rgba(30, 144, 255, .5);
         color: dodgerblue;
         border: none;
         border-radius: 50px;
         text-indent: 20px;
      }

      .g {
         height: 17%;
         width: 90%;
         /*border: 1px solid black;*/
         font-size: 1.2rem;
      }

      .g>input {
         height: 70%;
         width: 100%;
         border: none;
         outline: none;
         border-bottom: 1px solid dodgerblue;
         font-size: 1rem;
         background-color: transparent;
      }

      .g>input:hover {
         box-shadow: 0px 5px 15px rgba(30, 144, 255, .5);
         color: dodgerblue;
         border: none;
         border-radius: 50px;
         text-indent: 20px;
      }

      .h {
         height: 17%;
         width: 90%;
         /*border: 1px solid black;*/
         font-size: 1.2rem;
      }

      .h>input {
         height: 70%;
         width: 100%;
         border: none;
         outline: none;
         border-bottom: 1px solid dodgerblue;
         font-size: 1rem;
         color: dodgerblue;
         background-color: transparent;
      }

      .h>input:hover {
         box-shadow: 0px 5px 15px rgba(30, 144, 255, .5);
         color: dodgerblue;
         border: none;
         border-radius: 50px;
         text-indent: 20px;
      }

      .k {
         height: 17%;
         width: 90%;
         /*border: 1px solid black;*/
         align-items: center;
         justify-content: center;
         display: flex;
      }

      .k>input {
         height: 55%;
         width: 90%;
         border: none;
         outline: none;
         border-radius: 50px;
         background: dodgerblue;
         font-size: 1.8rem;
         color: white;
         cursor: pointer;
      }

      ::placeholder {
         color: dodgerblue;
      }
   </style>
</head>

<body>
   <h2 class="b"> Form</h2>
   <form method="POST" enctype="multipart/form-data" >
      <fieldset>
         <legend>Student Id Form</legend>
         <div class="d">
            <label for="A"><strong>Student name</strong><i style="color: red;">*</i></label>
            <input type="text" id="A" name="nm" placeholder="Enter Your Name">
         </div>
         <div class="f">
            <label for="A"><strong>Age</strong><i style="color: red;">*</i></label>
            <input type="number" id="A" name="age" placeholder="Enter Your Age">
         </div>
         <div class="g">
            <label for="A"><strong>Class</strong><i style="color: red;">*</i></label>
            <input type="number" id="A" name="cls" placeholder="Enter Your Class">
         </div>
         <div class="h">
            <label for="A"><strong>Roll No</strong><i style="color: red;">*</i></label>
            <input type="number" id="A" name="rol" placeholder="Enter Your Roll No">
         </div>
         <div class="h">
            <label for="A"><strong>Date</strong><i style="color: red;">*</i></label>
            <input type="date" name="dt" id="A">
         </div>
         <input type="file" name="img">

         <div href="#" class="k">
            <input type="submit" value="Submit">
         </div>
      </fieldset>
   </form>
   <h2 class="c">Copyrights © 2019 - 2023 All Rights Reserved.</h2>
</body>

</html>