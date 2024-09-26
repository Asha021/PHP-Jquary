<?php
  require 'connect1.php';
  $qs = 'SELECT * FROM cloth';
  $ra = mysqli_query($conn,$qs);

  if ($ra) {
  
    $num = mysqli_num_rows($ra);
    $viewl = mysqlI_fetch_array($ra , MYSQLI_ASSOC);
    echo $viewl['sprice'];  
  }
  