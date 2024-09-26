<?php
   require 'connect1.php';

   $q = "SELECT * FROM idDATA";
   $qn = mysqli_query( $conn, $q );
   $index = 1;
   if (isset($_POST["nxt"])) {
    if ($index < 5) {
        $index = $_POST["inc"] + 1;
    }
        if ($index == 5) {
            $index = 1;
        }
        echo $index;
   }
//    if (isset($_POST["prv"])) {
//     $index = $_POST["dec"] -= 1;
//       if ($index < 1) {
//           $index == 5;
//       }
//       echo $index; 
//  }
   if ($qn) {
       while($qss = mysqli_fetch_array($qn , MYSQLI_ASSOC)) {
          if ($qss["Sno"] == $index) {
            $sname = $qss["sname"];
            $sAge = $qss["sAge"];
            $sClass  = $qss["sClass"];
            $sRollNo  = $qss["sRollNo"];
            $sDate   = $qss["sDate"];      
            $url   = $qss["simage"];      
          }
       }
   
    }
 
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>go</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        background-color: grey;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .main {
        height: 85%;
        width: 30%;
        border: 1px solid black;
        border-radius: 20px;
        /* background-color: red; */
        background-image: url("https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjEwMTYtYy0wOF8xLWtzaDZtemEzLmpwZw.jpg");
        background-size: 100% 100%;
    }

    h1 {
        align-items: center;
        justify-content: center;
        display: flex;
        color: white;
    }
    h4 {
        align-items: center;
        justify-content: center;
        display: flex;
        color: white;
    }
    .to{
        font-size: 1.3rem;
        border-bottom: 3px solid white;
        
    }

    .head {
        align-items: center;
        justify-content: space-around;
        display: flex;
        flex-direction: column;
        height: 90%;
        /* border: 1px solid black; */
    }

    .img {
        align-items: center;
        justify-content: center;
        display: flex;
        height: 40%;
        width: 50%;
        /* border: 1px solid black; */
    }

    .head2 {
        align-items: center;
        justify-content: center;
        display: flex;
        height: 50%;
        width: 90%;
    }

    .a1,.a2{
        /* border: 1px solid black; */
        color: white;
        font-size: 1.2rem;
    }
    .a2{
        height: 75%;
        width: 20%;
        align-items: start;
        justify-content: space-evenly;
        display: flex;
        font-size: 1.3rem;
        flex-direction: column;
        /* border: 1.2px solid black; */
    }
    .a1{
        height: 75%;
        width: 50%;
        align-items: start;
        justify-content: space-between;
        display: flex;
        flex-direction: column;
    }

    i {
        /* border: 1px solid black; */
        height: 10%;
        font-size: 2rem;
        width: 10%;
    }   

    .fa-backward,
    .fa-forward {
        font-size: 2.5rem;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    #imgs {
      border-radius: 30px;
      height: 180px;
      width: 180px;
    }
    .c{
        color: white;
        width: 100%;
        align-items: center;
        justify-content: center;
        display: flex;
        font-size: 1.2rem;
        border-top: 2px solid white;
    }
</style>

<body >
<!-- <form method="post" >
    <input type="hidden" name="dec" value="<?php echo $index; ?>" >
    <input type="submit" name="prv" value="prv" >
    </form> -->
    <div class="main">
        <h1>J.S PUBLIC SCHOOL</h1>
        <h1 class="to" >1-B BLOCK faridabad.</h1>
        <div class="head">
            <img src=" <?php echo $url?> " id="imgs">
            <div class="head2">
                <div class="a1" >
                <h3>NAME :-</h3>
                <h3>AGE :-</h3>
                <h3>CLASS :-</h3>
                <h3>ROLL NO :-</h3>
                </div>
                <div class="a2" >
                <h3 id="std"><?php echo  $sname?></h3><br>
                <h3 id="ag"><?php echo  $sAge?></h3><br>
                <h3 id="cl"><?php echo  $sClass?></h3><br>
                <h3 id="rol"><?php echo  $sRollNo?></h3><br>             
                </div>
                <img src="./pngegg.png" height="120px" width="100px" alt="img" >
            </div>
            <div class="c" >Contact as 987567646....</div>
        </div>
    </div>
    <form method="post" >
    <input type="hidden" name="inc" value="<?php echo $index; ?>" >
    <input type="submit" name="nxt" value="nxt" >
    </form>
    <script>
       
        // async function APIdata() {
        // var prvs = document.querySelector('.fa-backward');
        // var nxt = document.querySelector('.fa-forward');
        // var std = document.getElementById('std');
        // var ag = document.getElementById('ag');
        // var cl = document.getElementById('cl');
        // var rol = document.getElementById('rol');
        // var imgs = document.getElementById('imgs');
        // var index = 0;
        //     var val;

        //     var pic = await fetch("std.json");
        //     val = await pic.json();
        //     console.log(val);
        //     std.innerText = val[index].StudentName;
        //     ag.innerText = val[index].Age;
        //     cl.innerText = val[index].Class;
        //     rol.innerText = val[index].RollNo;
        //     imgs.src = val[index].img;

        //     nxt.addEventListener( 'click',() => {
        //         if (index < val.length) {
        //             index++;
        //             if (index == val.length) {
        //                 index = val.length - val.length;
        //             }
        //             std.innerText = val[index].StudentName;
        //             ag.innerText = val[index].Age;
        //             cl.innerText = val[index].Class;
        //             rol.innerText = val[index].RollNo;
        //             imgs.src = val[index].img;
        //         }
        //     });

        //     prvs.addEventListener( 'click',() => {
        //         if (index >= val.length - val.length) {
        //             if (index == val.length- val.length) {
        //                 index = val.length;
        //             }
        //             index--;
        //             std.innerText = val[index].StudentName;
        //             ag.innerText = val[index].Age;
        //             cl.innerText = val[index].Class;
        //             rol.innerText = val[index].RollNo;
        //             imgs.src = val[index].img;
        //         }
        //     });

        // }
        // APIdata();
    </script>
</body>

</html>