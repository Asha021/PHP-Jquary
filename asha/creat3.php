<?php
   require "connect1.php";
   $ql = 'CREATE TABLE IF NOT EXISTS Uploadfile(
      Sno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      flname VARCHAR(200) NOT NULL,
      fltmp VARCHAR(120) NOT NULL,
      flsize INT NOT NULL
   )';
   $an = mysqli_query($conn, $ql);

   if ($an) {
     echo 'create table';
     mysqli_close($conn);
   } else {
    echo 'not create table';
   }
   

