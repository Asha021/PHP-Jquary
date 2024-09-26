

<?php
   class Main{
    protected $a;

    public function __construct($x){
               $this -> a = $x;
   }

   public function Abc(){
     return (int)(($this->a*$this->a));
   }
}

$go = new Main(12);
echo $go -> Abc();

