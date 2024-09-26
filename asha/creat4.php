<?php
   require "connect1.php";
   $ql = 'CREATE TABLE IF NOT EXISTS resumes(
      Sno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      fname VARCHAR(200) NOT NULL,
      lname VARCHAR(120) NOT NULL,
      semail VARCHAR(120) NOT NULL UNIQUE,
      sub VARCHAR(120) NOT NULL UNIQUE
       
   )';
   $an = mysqli_query($conn, $ql);

   if ($an) {
     echo 'create table';
     mysqli_close($conn);
   } else {
    echo 'not create table';
   }