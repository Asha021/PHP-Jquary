<?php
require "./connect2.php";
$qqq = 'CREATE TABLE IF NOT EXISTS NewUsers(
      Sno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      UserName VARCHAR(80) NOT NULL,
      PhoneNo DOUBLE NOT NULL,
      Email VARCHAR(120) NOT NULL,
      UPassword VARCHAR(100) NOT NULL
   )';
$ans = mysqli_query($connn, $qqq);

if ($ans) {
    echo 'create table';
    mysqli_close($connn);
} else {
    echo 'not create table';
}


