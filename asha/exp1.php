<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>go</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            align-items: center;
            display: flex;
            justify-content: center;
            background-color: lavender;
        }
        .box{
            height: 55%;
            width: 30%;
            border: 1px solid black;
        }
        .box>div{
            border: 1px solid black;
           height: 33.5%;
           width: 100%;
           flex-direction: column;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .one>div{
           border: 1px solid black;
           height: 100%;
           width: 33.5%;
           flex-direction: column;
            /* align-items: self-start;
            justify-content: space-evenly;
            display: flex; */
        }
    </style>
</head>
<body>
     <div class="box">
        <div class="one">
        <div class="a1" onclick="a1()"></div>
        <div class="a2" onclick="a2()"></div>
        <div class="a3" onclick="a3()"></div>
        </div>
        <div class="two">
        <div class="a4"  onclick="a4()"></div>
        <div class="a5"   onclick="a5()"></div>
        <div class="a6"  onclick="a6()"></div>
        </div>
        <div class="three">
        <div class="a7"  onclick="a7()"></div>
        <div class="a8"   onclick="a8()"></div>
        <div class="a9"   onclick="a9()"></div>
        </div>
     </div>
</body>
</html>