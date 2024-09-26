<?php

function go($num){
    $flag = 0;
    for($i = 2; $i <= $num; $i++){
        for ($j=2;  $j<=$num/2; $j++) { 
           if($num % $j == 0) 
             $flag=1;
        }
}
if($num == 0 || $num == 1) {
    echo 'Its not prime or composite '.$num;
 }else if($flag == 0){
     echo 'Its prime no'.$num;
 }
 else{
   echo 'Its not prime no'.$num;
 }
}

  go(9);
?>