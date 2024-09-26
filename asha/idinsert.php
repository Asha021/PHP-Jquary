<?php
   require "./connect1.php";
   $qs = 'CREATE TABLE IF NOT EXISTS idDATA(
      Sno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      sname VARCHAR(40) NOT NULL,
      sAge  INT NOT NULL,
      sClass INT NOT NULL,
      sRollNo INT NOT NULL,
      sDate VARCHAR(80) NOT NULL,
      simage VARCHAR(80) NOT NULL
   )';
   $ans = mysqli_query($conn, $qs);

   if ($ans){
     echo 'create table';
     mysqli_close($conn);
   } else {
    echo 'not create table';
   }
   