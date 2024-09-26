<?php
    class Stat{
    public static $a,$b;
 }

 class abc extends stat{
    public static $a,$b;
   
     public static function app($x,$y){
        self::$a=$x;
          self::$b=$y;
          return self::$a + self::$b;
     }
    
 }
 echo abc::$a;
 echo abc::$b;
 echo abc::app(12,76);
 
