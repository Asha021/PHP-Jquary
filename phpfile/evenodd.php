<?php

// $a = 3;

// if($a % 2 == 0) {
//     echo 'It is even no ';
// }else{
//     echo 'It is odd no ';
// }
// echo ($a);

// $b = 5;
// $c = ($b % 2 == 0);

// switch($c){
//     case 1: echo 'It is odd no',$b ;
//         break;
//     default:
//        echo 'It is even no',$b;
// }

// $v = 'friday';
// switch ($v) {
//         case 'sunday': echo 'Its is ',$v,0;
//         break;
//         case 'monday': echo 'Its is ',$v,1;
//         break;
//         case 'tuesday': echo 'Its is ',$v,2;
//         break;
//         case 'wednesday': echo 'Its is ',$v,3;
//         break;
//         case 'thursday': echo 'Its is ',$v,4;
//         break;
//         case 'friday': echo 'Its is ',$v,5;
//         break;
//         case 'saturday': echo 'Its is ',$v,6;
//         break;

//     default:
//         error;
// }

// $a = 10;
// $b = 15;
// $c =  '**';
// switch ($c) {
//         case '+' : echo 'The value is ',$a+$b;
//         break;
//         case '-' : echo 'The value is ',$a-$b;
//         break;
//         case '*' : echo 'The value is ',$a*$b;
//         break;
//         case '%' : echo 'The value is ',$a%$b;
//         break;
//         case '**' : echo 'The value is ',$a**$b;
//         break;
//         case '/' : echo 'The value is ',$a/$b;
//         break;   
//     default:
//         error;
// }

//## LOOPS.

// for($a=0; $a<101; $a++){ 
//      echo $a,"<br>";    
// }

// $a = 1;
// while($a<100){
//     echo $a ,"<br>";
//     $a++;
// }

// $a = 0;
// do {
//     echo 'This value is ', $a, "<br>";
//     $a++;
// } while ($a < 101);

// $check = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
// foreach ($check as $a => $b) {
//     echo '<br>',$a.')',$b;
// }

$sec = 12000;
$hr = (int)($sec/3600);
$min = (int)(($sec%3600)/60);
$re = (int)(($sec%3600)%60);
echo $hr,"hr  ",": ",$min,"min  ",': ',$re,"sec";


?>