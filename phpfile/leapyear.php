<?php

// function result($a){
//     if($a  > 1582) {
//         if(($a % 4 == 0 && $a % 100!=0)|| ($a % 400 == 0)){
//             echo $a,' It is leap year';
//         }
//         else{
//             echo $a,' It is not a leap year';
//         }   
//     }
//     else{
//         echo 'It is greater than 1582';
//     }
// }
// result(2024);

// $a = 2025;
// function result(){
//     global $a;
//     if($a  > 1582) {
//         if(($a % 4 == 0 && $a % 100!=0)|| ($a % 400 == 0)){
//             echo $a,' It is leap year';
//         }
//         else{
//             echo $a,' It is not a leap year';
//         }   
//     }
//     else{
//         echo 'It is greater than 1582';
//     }
// }
// result();

// function run($a,$b,$k='+'){
 
//     switch ($k) {
//             case '-': echo 'Its value is '.$a-$b;
//             break;
//             case '+': echo 'Its value is '.$a+$b; 
//             break;
//             case '/': echo 'Its value is '.$a/$b;
//             break;
//             case '%': echo 'Its value is '.$a%$b;
//             break;
//             case '*': echo 'Its value is '.$a*$b;
//             break;
//             case '**': echo 'Its value is '.$a**$b;
//             break;       
//         default: 
//            error;
//     }
// }
// run(2,20);

function run($a,$b,$k){
 if($k == '+') {
   echo 'Its value is',$a+$b;
 }elseif($k == '-'){
   echo 'Its value is',$a-$b;
 }elseif($k == '*'){
   echo 'Its value is',$a-$b;
 }elseif($k == '**'){
   echo 'Its value is',$a-$b;
 }elseif($k == '%'){
   echo 'Its value is',$a-$b;
 }elseif($k == '/'){
   return 'Its value is'.$a-$b;
 }
}
run(2,20,'-');






?>