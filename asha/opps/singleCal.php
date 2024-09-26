
<?php
  
class One
{
   protected $a;
   protected  $b;

   public function setvalue($x,$y){
        $this -> a = $x;
        $this -> b = $y;
   }
   public function First(){
        return $this -> a + $this -> b;
   }

}

$go = new One();
$go -> setvalue(12,76);

echo $go -> First(),'<br/>';

 class Two{
    protected $a;
    protected $b;

    public function setvalue($x,$y){
         $this -> a = $x;
         $this -> b = $y;
    }

    public function two(){
        return $this -> a - $this -> b;
    }
 }

  $go = new Two();
 $go -> setvalue(34,24);
  echo $go -> two(),"<br/>";


  class Three{
    protected $a;
    protected $b;

    public function  setvalue($x,$y){
         $this -> a = $x;
         $this -> b = $y;
    }

    public function mul(){
      return $this -> a * $this -> b;
    }
  }

  $go = new Three();
  $go -> setvalue(1,23);
  echo $go -> mul(),"<br/>";
  
  class Forth{
    protected $a;
    protected $b;

    public function setvalue($x,$y){
      $this -> a = $x;
      $this -> b = $y;
    }

    public function div(){
      return $this -> a / $this -> b;
    }
  }

  $go = new Forth();
  $go -> setvalue(23,5);
  echo $go -> div();

  class Five{
    protected $a;
    protected $b;

    public function setvalue($x,$y){
      $this -> a = $x;
      $this -> b = $y;
    }

    public function mod(){
      return $this -> a % $this -> b;
    }
  }

  $go = new Five();
  $go -> setvalue(23,5);
  echo $go -> mod();
