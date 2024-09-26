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
        height: 30%;
        width: 25%;
        border: 3px double black;
        background-color: lightgoldenrodyellow;
    }
    label{
       font-size: 1.5rem;
    }
    input{
        height: 30%;
        width: 100%;
        text-indent: 10px;
        font-size: 1.2rem;
    }
    #sub{
        font-size: 2rem;
        height: 35%;
    }
    #sub:hover{
        background-color: dodgerblue;
        color: white;
      
    }
</style>
<body>
    <form method="POST" >
    <label for="num">Enter your no</label><br/><br/>
        <input type="text" name="num" placeholder="enter your no" ><br/><br/>
        <input type="submit" name="sub" value="submit">
    </form>
</body>
</html>
<?php
    if (isset($_POST['sub'])){
        $hou = $_POST['num'];
   }
 class Cir{
    protected $a;

    public function __construct($x){
         $this->a = $x;
    }
    public function sq(){
        return (int) ($this->a ** 2 * pi());
    }
 }
 
 $go = new Cir($hou);
 echo $go->sq();
