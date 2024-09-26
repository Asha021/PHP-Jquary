<?php
   require "./connect1.php";
   $q = 'CREATE TABLE IF NOT EXISTS cloth(
      Sno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      sname VARCHAR(40) NOT NULL,
      sales_date VARCHAR(80) NOT NULL,
      sprice DECIMAL(6,2) NOT NULL,
      squantity INT NOT NULL,
      scolor  VARCHAR(40) NOT NULL,
      total_price INT NOT NULL
   )';
   $ans = mysqli_query($conn, $q);

   if ($ans) {
     echo 'create table';
     mysqli_close($conn);
   } else {
    echo 'not create table';
   }
   

