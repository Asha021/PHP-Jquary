<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>go</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
        align-items: center;
        justify-content: center;
        display: flex;
        background-color: lavender;
    }
    form{
        height: 50%;
        width: 25%;
        border: 3px double black;
        background-color: lightgoldenrodyellow;
    }
    label{
       font-size: 1.5rem;
    }
    input{
        height: 17%;
        width: 100%;
        text-indent: 10px;
        font-size: 1.2rem;
    }
    #sub{
        font-size: 2rem;
        height: 23%;
    }
    #sub:hover{
        background-color: dodgerblue;
        color: white;
      
    }
</style>
<body>
<form method="POST" >
    <label for="num">Enter your no</label><br/><br/>
        <input type="text" name="num" placeholder="enter your 1st no" ><br/><br/>
    <label for="num">Enter your no</label><br/><br/>
        <input type="text" name="num2" placeholder="enter your 2nd no" ><br/><br/>
        <input type="submit" id="sub" name="sub" value="Submit">
    </form>
</body>
</html>
<?php
  if (isset($_POST['sub'])){
    $h1 = $_POST['num'];
    $h2 = $_POST['num2'];
}

class Ex{
  protected $a;
  protected $b;
}

class Main extends Ex{
  public function setvalue($x,$y){
      $this -> a = $x;
      $this -> b = $y;
  }

  public function abc1(){
      return $this -> a + $this -> b;
  }

  public function abc2(){
    return $this -> a - $this -> b;
}

public function abc3(){
  return $this -> a * $this -> b;
}

public function abc4(){
  return $this -> a / $this -> b;
}

public function abc5(){
  return $this -> a % $this -> b;
}
}
$go = new Main();
$go -> setvalue($h1,$h2);
echo 'Its your sum value:-', $go -> abc1(),"<br/>";
echo  'Its your sub value:-', $go -> abc2(),"<br/>";
echo  'Its your mul value:-', $go -> abc3(),"<br/>";
echo  'Its your div value:-', $go -> abc4(),"<br/>";
echo  'Its your mod value:-', $go -> abc5(),"<br/>";